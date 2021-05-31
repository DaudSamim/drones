<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Stripe;


class CartController extends Controller
{
	public function add_to_cart(Request $request){
		if(!auth()->check()){
			return redirect()->back()->with('message','Login to Add Product in Cart');
		}

		
		DB::table('carts')->insert([
			'user_id' => auth()->user()->id,
			'product_id' => $request->product_id,
			'price' => $request->price,
			'quality' => $request->quality,

		]);

		return redirect()->back()->with('message','Successfully Added to Cart');
	}

	public function removeItem($id){
		DB::Table('carts')->where('user_id',auth()->user()->id)->where('id',$id)->delete();

		return redirect()->back()->with('success','Successfully Removed');
	}

	public function getCheckout(){
		$cart_products = DB::Table('carts')->where('user_id',auth()->user()->id)->get();
		return view('cart',compact('cart_products'));
	}

	public function getPaypal(){
		$amount = DB::table('carts')->where('user_id',auth()->user()->id)->get()->sum('price');
		return view('paypal',compact('amount'));
	}

	public function getStripe(){
		$amount = DB::table('carts')->where('user_id',auth()->user()->id)->get()->sum('price');
		return view('stripe',compact('amount'));
	}

	public function postStripe(Request $request){
		$total_amount = null;
		
		\Stripe\Stripe::setApiKey ( 'sk_test_51H2omrEBrijIcOQ0FrcrRTJ0oFUOuaBvrr8r54VHpukmRzwHQ8HVDxGgMzp2ktmGY9SPzT9Bf0mp4SkuHCW1o9ZP00DHfHaVxj' );

            $amount = $request->amount * 100;
            try {
                \Stripe\Charge::create ( array (
                        "amount" => $amount,
                        "currency" => "usd",
                        "source" => $request->input( 'stripeToken' ), // obtained with Stripe.js
                        "description" => "Test payment." 
                ) );

               
            } catch ( \Exception $e ) {
                
                return redirect()->back();
            }

            $order_data = DB::table('carts')->where('user_id',auth()->user()->id)->get();
			
            DB::table('orders')->insert([
            	'user_id' => auth()->user()->id,
            	'order_data' => serialize($order_data),
            	'price' => $request->amount,
             ]);
            
			 $orders = DB::table('carts')->get();

			 foreach($orders as $order)
			 {
				$find_id = DB::table('videos')->where('id',$order->product_id)->first();
				$find_amount = DB::table('vendors')->where('user_id',$find_id->user_id)->first();
                    $total_amount = ( ( 100 - $find_amount->commissions ) * $order->price ) / 100 ;
				DB::table('vendor_orders')->insert([
                         'price' => $order->price,
						 'profit' => $total_amount,
						 'quality' => $order->quality,
						 'product_id' => $find_id->id,
						 'title' => $find_id->title,
						 'vendor_id' => $find_id ->user_id,
					]);
					
					DB::table('vendors')->where('user_id',$find_id->user_id)->update([
						'amount' => $find_amount->amount + $total_amount,
						
						]);
					

					$total_amount = null;
			 }


			 

            DB::table('carts')->where('user_id',auth()->user()->id)->delete();

           
            return redirect('/view-purchases')->with('message','Order Placed');
	}

}