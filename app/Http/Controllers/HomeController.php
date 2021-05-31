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
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function getStats()

    {
            
            return view('home.view-stats');
  
     
    }

    public function approveVideo($id){
        DB::table('videos')->where('id',$id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with('success','Successfully Updated');
    }

    public function rejectVideo(Request $request){
        DB::Table('videos')->where('id',$request->id)->update([
            'status' => 2,
            'rejection_message' => $request->message,

        ]);

         return redirect()->back()->with('success','Successfully Updated');

    }   

    public function getPurchases(){
        
        $purchases = DB::table('orders')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        if(auth()->user()->role == 1){
             $purchases = DB::table('orders')->orderBy('id','desc')->get();
        }
        if(Session::has('message')){
            return view('home.purchases',compact('purchases'))->with('message','Order Placed');
        }
        return view('home.purchases',compact('purchases'));

    }

    public function showOrder($id){
        $products = DB::table('orders')->where('id',$id)->pluck('order_data')->first();
        $products = unserialize($products);
        return view('home.show_products',compact('products','id'));
    }

    public function getorders(){
        $allOrders = DB::table('vendor_orders')->where('vendor_id',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('home.show_vendor_orders',compact('allOrders'));
        
        
        }

    public function downloadProduct($id){
        $link = DB::table('videos')->where('id',$id)->pluck('file')->first();
        return response()->download(public_path('videos/'.$link));
    }

    public function getQualities(){
        $qualities = DB::table('qualities')->get();
        return view('home.view_qualities',compact('qualities'));
    }

     public function postQualities(Request $request){

        $validated = $request->validate([
            'price' => 'required|integer',
            
        ]);

        DB::table('qualities')->where('id',$request->id)->update([
            'price' => $request->price,
        ]);
       
       return redirect()->back()->with('message','Price Updated Successfully');
    }

    public function getUserStats(Request $request)
    {
            //dd($request->segment(1) == '');
            $users = DB::table('users')->where('email','!=','admin@admin.com')->orderBy('id','desc')->get();

            return view('home.view_user',compact('users'));
      
    }

    public function getCategory()
    {
        
            
            $categories = DB::table('categories')->orderBy('id','desc')->get();

            return view('home.view-category',compact('categories'));
       
    }

    public function postCategory(Request $request){
        
        $validated = $request->validate([
            'title' => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,jpg,png,gif|required|max:10000',
            
        ]);


        if($request->file('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path().'/images/';
            $file->move($path, $filename);

        };

             DB::Table('categories')->insert([
            'title' => $request->title,
            'image' => $filename
            ]);

             return redirect()->back()->with('success','Successfully Added');
    }


    

    public function getViewUser()
    {
        if (Auth::user()->username == 'admin')
        {
            
            return view('home.view_user');
        }
        else
        {
            return redirect()->back();
        }
    }

     public function getVendors()
    {
        
            
            $vendors = DB::table('vendors')->get();


            return view('home.vendor',compact('vendors'));
       
    }

    public function postUser(Request $request){
        
       $validated = $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required'
        ]);

        
      

             DB::Table('users')->insert([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password)
            ]);

             return redirect()->back()->with('success','Successfully Added');
       
    }


    public function getContactQueries()
    {
           
            $queries = DB::table('contact_queries')->orderBy('id','desc')->get();
            return view('home.view_contact_us',compact('queries'));
        
    }

     public function getSubscriptions()
    {
            $queries = DB::table('subscriptions')->orderBy('id','desc')->get();
            return view('home.view_subscriptions',compact('queries'));
        
    }

    public function getViewVideos()
    {
          
            $videos = DB::table('videos')->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
            $categories = DB::table('categories')->orderBy('title','asc')->get();
            return view('home.view_videos',compact('videos','categories'));
        
    }
    public function postVideos(Request $request){
        
         
       if($request->fourk_price < 1 || $request->fhd_price < 1  || $request->hd_price < 1) {
            return redirect()->back()->with('alert','Price not Valid, Must be greater than 1');
       }

       $validated = $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'description' => 'required',
            'category_id' => 'required',
        ]);

      if(!$request->fourk == 'on'){
            $fourk = null;
      }else{
            $fourk = $request->fourk_price;
      }

      if(!$request->fhd == 'on'){
            $fhd = null;
      }else{
            $fhd = $request->fhd_price;
      }

      if(!$request->hd == 'on'){
            $hd = null;
      }else{
            $hd = $request->hd_price;
      }

        if($request->file('video')){
            $file = $request->file('video');
            $filename = $file->getClientOriginalName();
            $path = public_path().'/videos/';
            $file->move($path, $filename);


                DB::Table('videos')->insert([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'file' => $filename,
                'category_id' => $request->category_id,
                'poster' => 'poster.png',
                'price' => $fourk?$fourk:$fhd,
                'description' => $request->description,
                'fourk_price' => $fourk,
                'fhd_price' => $fhd,
                'hd_price' => $hd,

                ]);

                return redirect()->back()->with('success','Successfully Added');

             };

             

             
        
       
        return redirect()->back()->with('error','Something Wrong');
        
    }


    public function posteditVideos(Request $request){

        
         
        
 
        $validated = $request->validate([
             'title' => 'required', 
         ]);
 
       if(!$request->fourk == 'on'){
             $fourk = null;
       }else{
             $fourk = $request->fourk_price;
       }
 
       if(!$request->fhd == 'on'){
             $fhd = null;
       }else{
             $fhd = $request->fhd_price;
       }
 
       if(!$request->hd == 'on'){
             $hd = null;
       }else{
             $hd = $request->hd_price;
       }

 
 
                 DB::Table('videos')->where('id',$request->id)->update([
                 
                 'title' => $request->title,
                
                 'category_id' => $request->category_id,
                 'price' => $fourk?$fourk:$fhd,
                 
                 'fourk_price' => $fourk,
                 'fhd_price' => $fhd,
                 'hd_price' => $hd,
                 'status' => 0,
 
                 ]);
 
                 return redirect('/view-videos')->with('success','Successfully Updated');
 
         
     }

    public function editVideo($id){
        $video = DB::table('videos')->where('id',$id)->first();
        if(!$video){
            return redirect()->back();
        }
        return view('home.edit_videos',compact('video'));
    }

 

    public function getViewCashin()
    {
        if (Auth::user()->username == 'admin')
        {
            $opt['opt'] = 'view-cashin';
            $job['job'] = DB::table('jobs')->get();
            return view('home.view_cashin')->with($opt)->with($job);
        }
        else
        {
            return redirect()->back();
        }
    }

    public function getViewallVideos()
    {
          
            $videos = DB::table('videos')->orderBy('id','desc')->get();
            $categories = DB::table('categories')->orderBy('title','asc')->get();
            return view('home.view_videos',compact('videos','categories'));
        
    }

    public function getCommission($id)
    {           $vendor = DB::table('vendors')->where('id', $id)->first();
            return view('home.commission', compact('vendor'));
       
    }


     public function postCommission(Request $request)
    {
        $this->validate($request, [
            'commissions'=> 'required|integer|min:1|max:100',
            ]);    

        DB::table('vendors')->where('id', $request->id)->update([
            'commissions' => $request->commissions
        ]);
        return redirect('view-vendors')->with('message','Successfully updated');
    }

    public function getConfirm($id)
    {
        
            
        DB::Table('users')->where('id',$id)->update([
            'status' => 1,
            ]);
       

            return redirect('view-vendors');
       
    }


    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
