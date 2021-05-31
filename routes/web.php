<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Guest Routes
 *
 **/

// Route::get('/', '\App\Http\Controllers\UserController@getLogin')->name('/');
Route::get('/login', '\App\Http\Controllers\UserController@getLogin')->name('login');
Route::post('/login', '\App\Http\Controllers\UserController@postLogin');

Route::get('/register', '\App\Http\Controllers\UserController@getRegister');
Route::post('/register', '\App\Http\Controllers\UserController@postRegister');

Route::post('/add_to_cart', '\App\Http\Controllers\CartController@add_to_cart');
 Route::post('register_vendor','\App\Http\Controllers\VendorRegistrationController@vendor_register');


Route::get('/',function(){
    $categories = DB::table('categories')->limit(6)->get();
    $categories_search = DB::table('categories')->get();
    $videos = DB::table('videos')->where('status',1)->orderBy('id','desc')->limit(6)->get();
    return view('home',compact('categories','categories_search','videos'));
});

Route::get('product_{id}',function($id){
    $main_video = DB::table('videos')->where('id',$id)->first();
    if(!isset($main_video)){
        return redirect()->back();
    }
    $categories = DB::table('categories')->limit(6)->get();
    $categories_search = DB::table('categories')->get();
    $videos = DB::table('videos')->orderBy('id','desc')->limit(6)->get();
        return view('product',compact('categories','categories_search','videos','main_video'));
    });


Route::get('/category_{name}',function($name){
    $main_category = DB::table('categories')->where('title',$name)->first();
    if(!isset($main_category)){
        return redirect()->back();
    }
    $categories = DB::table('categories')->limit(6)->get();
    $categories_search = DB::table('categories')->get();
    $videos = DB::table('videos')->where('category_id',$main_category->id)->where('status',1)->orderBy('id','desc')->limit(6)->get();

     $next_category = DB::table('categories')->where('id','>',$main_category->id)->first();
    if(!$next_category){
        $next_category = DB::table('categories')->where('id','<=',$main_category->id)->first();
    }

    $previous_category = DB::table('categories')->where('id','<',$main_category->id)->orderBy('id','desc')->first();
    if(!$previous_category){
         $previous_category = DB::table('categories')->orderBy('id','desc')->first();
    }

        return view('category',compact('categories','categories_search','main_category','videos','next_category','previous_category'));

});

Route::get('subscribe',function(){
    return redirect('/');
});

Route::post('subscribe',function(Request $request){
    $validated = $request->validate([
        'email' => 'required|unique:subscriptions'
    ]);

    DB::table('subscriptions')->insert([
        'email' => $request->email
    ]);
    return redirect()->back();
});

Route::get('contact_us',function(){
    return view('contactus');
});
Route::post('contact_us',function(Request $request){
    DB::table('contact_queries')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message
    ]);
    return redirect('contact_us')->with('success','Successfully Submitted');
});
Route::get('faqs',function(){
    return view('faqs');
});
Route::get('privacy_policy',function(){
    return view('privacy');
});
Route::get('refund_policy',function(){
    return view('refund');
});
Route::get('terms_and_conditions',function(){
    return view('terms');
});
Route::get('about_us',function(){
    return view('aboutus');
});
Route::get('customer',function(){
    return view('customer_dashboard');
});
Route::get('contributor',function(){
    return view('vendor_dashboard');
});

Route::get('paypal',function(){
    return view('asd');
});

Route::post('/payment/add-funds/paypal','\App\Http\Controllers\PaymentController@payWithpaypal');


Route::get('/next_category_{id}',function($id){

    $next_category = DB::table('categories')->where('id','>',$id)->first();
    if($next_category){
        return redirect('category_'.$next_category->title);
    }else{
         $next_category = DB::table('categories')->where('id','<=',$id)->first();
         return redirect('category_'.$next_category->title);
    }
});

Route::get('/previous_category_{id}',function($id){

    $next_category = DB::table('categories')->where('id','<',$id)->orderBy('id','desc')->first();
    if($next_category){
        return redirect('category_'.$next_category->title);
    }else{
         $next_category = DB::table('categories')->orderBy('id','desc')->first();
         return redirect('category_'.$next_category->title);
    }
});

Route::get('approve_video/{id}','\App\Http\Controllers\HomeController@approveVideo');
Route::post('reject_video','\App\Http\Controllers\HomeController@rejectVideo');



/**
 * Auth Routes
 *
 **/
Route::middleware('auth')->group(function ()
{

    Route::get('/logout', '\App\Http\Controllers\UserController@getLogout');
    Route::get('/user-logout', '\App\Http\Controllers\HomeController@getLogout');
    Route::get('/view-home', '\App\Http\Controllers\HomeController@getHome')->name('view-home');
    Route::get('/view-stats', '\App\Http\Controllers\HomeController@getStats');
    Route::post('/view-stats', '\App\Http\Controllers\HomeController@getStatsDate')->name('view-stats');

    Route::get('/view-user-stats', '\App\Http\Controllers\HomeController@getUserStats');
    Route::post('/view-user-stats', '\App\Http\Controllers\HomeController@getUserStatsDate')->name('view-user-stats');

    Route::get('/view-qualities', '\App\Http\Controllers\HomeController@getQualities');
    Route::post('/view-qualities', '\App\Http\Controllers\HomeController@postQualities');


    Route::get('/view-category', '\App\Http\Controllers\HomeController@getCategory');
    Route::post('/view-category', '\App\Http\Controllers\HomeController@postCategory')->name('view-category'); 
    Route::get('delete_category/{id}',function($id){
        DB::Table('categories')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully Deleted');
    });

    Route::get('/view-videos', '\App\Http\Controllers\HomeController@getViewVideos')->name('view-videos');
    Route::post('/view_videos','\App\Http\Controllers\HomeController@postVideos');
    Route::get('/view_videos/{id}', '\App\Http\Controllers\HomeController@editVideo');
    Route::get('/delete_video/{id}',function($id){
         DB::Table('videos')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully Deleted');
    });

    //purchases
    Route::get('/view-purchases','\App\Http\Controllers\HomeController@getPurchases');
    Route::get('show_order/{id}','\App\Http\Controllers\HomeController@showOrder');
    Route::get('download_product_{id}','\App\Http\Controllers\HomeController@downloadProduct');

    //checkout 
    Route::get('checkout','\App\Http\Controllers\CartController@getCheckout');
    Route::get('paypal','\App\Http\Controllers\CartController@getPaypal');
    Route::get('stripe','\App\Http\Controllers\CartController@getStripe');
    Route::post('stripe','\App\Http\Controllers\CartController@postStripe');
    Route::get('remove_cart_item/{id}','\App\Http\Controllers\CartController@removeItem');


    
    Route::get('/view-user', '\App\Http\Controllers\HomeController@getViewUser')->name('view-user');
    Route::post('/view-user', '\App\Http\Controllers\HomeController@postUser')->name('view-user');
    Route::get('/view_contact_us', '\App\Http\Controllers\HomeController@getContactQueries');
    Route::get('/view_subscriptions', '\App\Http\Controllers\HomeController@getSubscriptions');

    Route::get('/change-password', '\App\Http\Controllers\UserController@getChangePassword');
    Route::post('/change-password', '\App\Http\Controllers\UserController@postChangePassword');
    Route::get('/user-change-password', '\App\Http\Controllers\UserController@getUserChangePassword');
    Route::post('/user-change-password', '\App\Http\Controllers\UserController@postUserChangePassword');

    Route::get('/view-all-videos', '\App\Http\Controllers\HomeController@getViewallVideos')->name('view-all-videos');
    Route::get('/confirm/{id}', '\App\Http\Controllers\HomeController@getConfirm');
    Route::get('/commissions/{id}', '\App\Http\Controllers\HomeController@getCommission');
    Route::post('commissions', '\App\Http\Controllers\HomeController@postCommission')->name('commission');
    Route::get('/view-contributor', '\App\Http\Controllers\HomeController@getVendors');


});
