@php
  $categories_search = DB::table('categories')->limit(10)->get();
@endphp

@php
  $cart_count = 0;
  $total_cart_price = 0;
    if(auth()->check()){
        $cart_data = DB::Table('carts')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get(); 
        $cart_count = count($cart_data);
        $total_cart_price =  DB::Table('carts')->where('user_id',auth()->user()->id)->get()->pluck('price')->sum(); 
    }
@endphp
<style>
    .cart-div{
        display: flex!important;
    /*align-items: center;*/
    justify-content: space-between;
    color: #fff;
    margin-top: 15px;
    }
    .name{
        /*width: 80%;*/
    }
    .name .vedio-name{
          color: #fff;
    display: block;
    font-size: 14px;
    font-weight: 500;
}

 .vedio-price{
    color: #fff;
    display: block;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
}
.bx{
    font-size: 20px !important;
    cursor: pointer;
}
</style>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 <header id="main-header" class="main-header header-stacked">
            <div class="header-top">
                <div class="container">


                    <div class="to-flex-row  th-flex-flex-middle">
                        <div class="to-flex-col th-col-left hidden-sm hidden-xs flexleft">


                            <ul class="top-social-icon">
                                <li><a href="https://www.facebook.com/African-Drone-Stock-352177435860332"
                                        target="_blank"><i class="zil zi-facebook"></i></a></li>


                                <li><a href="https://www.instagram.com/africandronestock/" target="_blank"><i
                                            class="zil zi-instagram"></i></a></li>


                                <li><a href="https://www.youtube.com/channel/UC3zgqtlhtZY6vEuOlCSNQmQ"
                                        target="_blank"><i class="zil zi-youtube"></i></a></li>



                            </ul>
                        </div>

                        <div class="to-flex-col th-col-center hidden-sm hidden-xs flexcenter">

                            <ul class="code-blocks">
                                <li class="html custom html_topbar_left">DRONE STOCK CLIPS</li>
                            </ul>
                        </div><!-- center -->

                        <div class="to-flex-col th-col-right hidden-sm hidden-xs flexright">

                            <ul id="account-button" class="mayosis-option-menu hidden-xs hidden-sm">

                                @if(!auth()->check())
                                <li class="menu-item">

                                    <a href="/login" class=""><i class="zil zi-user"></i> Login</a>
                                </li>

                                @else


                                 <li class="menu-item">

                                    <a href="/view-stats" class=""><i class="zil zi-user"></i> Profile</a>
                                </li>

                                <li class="menu-item">

                                    <a href="/logout" class=""><i class="zil zi-user"></i> Logout</a>
                                </li>


                                @endif

                            </ul>

                            <div id="account-mob" class="mayosis-option-menu hidden-md hidden-lg">

                                <div id="mayosis-sidemenu">

                                    <ul>
                                        @if(!auth()->check())
                                        <li class="menu-item">
                                            <a href="/login"><i class="zil zi-user"></i>
                                                Login</a>
                                        </li>
                                         @else

                                          <li class="menu-item">
                                                        <a href="/view-stats"><i class="zil zi-user"></i>
                                                            Profile</a>
                                                    </li>

                                           <li class="menu-item">
                                                        <a href="/logout"><i class="zil zi-user"></i>
                                                            Logout</a>
                                                    </li>
                                            @endif
                                    </ul>
                                </div>

                            </div>
                        </div><!-- .to-flex-col right -->


                        <div class="to-flex-col hidden-md hidden-lg flex-grow flexright">
                        </div>

                    </div><!-- .to-flex-row -->



                </div>
            </div><!-- .header-top -->

            <div class="header-master stickydisabled smartdisable">
                <div class="container-fluid">


                    <div class="to-flex-row  th-flex-flex-middle">

                        <!-- Start Desktop Content -->




                        <div class="to-flex-col th-col-left hidden-xs hidden-sm default-logo-box  flexleft">


                            <div class="site-logo sticky-enabled">

                                <a href="/" class="logo_box">

                                    <img src="images/logo.png"
                                        class="img-responsive main-logo hidden-xs hidden-sm" alt=""
                                        style="width:220px;">

                                    <img src="images/logo.png"
                                        class="img-responsive main-logo hidden-md hidden-lg" alt=""
                                        style="width:130px;">
                                    <img src="images/logo.png"
                                        class="img-responsive sticky-logo" alt="" style="width:220px;">

                                </a>

                            </div>

                        </div>


                        <div class="to-flex-col th-col-right hidden-sm hidden-xs flexright">





                            <ul id="cart-menu" class="mayosis-option-menu hidden-sm hidden-xs">

                                <li class="dropdown cart_widget cart-style-one"><a href="#" data-toggle="dropdown"
                                        class="cart-button"><i class="zil fa fa-shopping-cart"></i> <span
                                            class="items edd-cart-quantity">{{$cart_count}}</span></a>
                                    <ul role="menu" class="dropdown-menu mini_cart">
                                        <li class="widget">
                                            <div class="widget widget_edd_cart_widget">
                                                <p class="edd-cart-number-of-items" >Number of
                                                    items in cart: <span class="edd-cart-quantity">0</span></p>
                                                <ul class="edd-cart">

                                                    @if(isset($cart_data))
                                                        <h3 style="color: white">Videos List</h3>
                                                        @foreach($cart_data as $row)
                                                            @php
                                                                $row_product = DB::table('videos')->where('id',$row->product_id)->first();

                                                            @endphp
                                                             <li class="cart_item empty" style="width: 100%">
                                                               <!--  <span class="edd_empty_cart">{{$row_product->title}}  {{$row->quality}}  {{$row->price}}</span> -->
                                                                <div class="cart-div">
                                                                    <div class="name">
                                                                        <span class="vedio-name">{{$row_product->title}}</span>
                                                                        
                                                                    </div>
                                                                    <div>
                                                                         <span class="vedio-price"></span>
                                                                         <span>
                                                                    </div>
                                                                    <div class="price">
                                                                       
                                                                         <a href="{{'/remove_cart_item/'.$row->id}}">${{$row->price}} <i class="fa fa-trash" style="color: red" aria-hidden="true"></i></a>
                                                                         
                                                                    </div>
                                                                </div>
                                                             </li><br>
                                                        @endforeach
                                                         
                                                             @if($cart_count < 1)
                                                             <li class="cart_item edd-cart-meta edd_total " >
                                                                <p style="font-size: 12px">No Videos Added</p></li>
                                                            @else
                                                            <li class="cart_item edd-cart-meta edd_total" >
                                                                Total: <span class="cart-total">${{$total_cart_price}}</span></li>
                                                            <li class="cart_item edd_checkout"><a
                                                                    href="/checkout">Checkout</a>
                                                            </li>
                                                            @endif
                                                        @else
                                                         <li class="cart_item empty"><span class="edd_empty_cart">Your cart
                                                            is empty.</span></li>
                                                    @endif
                                                   
                                                   

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>

                            <ul class="mobile-cart hidden-md hidden-lg">
                                <li class="cart-style-one"><a href="#"
                                        class="btn btn-danger btn-lg mobile-cart-button">
                                        <i class="zil zi-cart"></i></a></li>

                            </ul>

                        </div>


                        <div class="to-flex-col th-col-center hidden-xs hidden-sm flexleft">

                            <div class="main-navigation text-right">
                                <div id="mayosis-menu" class="menu-menu-1-container">
                                    <ul id="menu-menu-1" class="menu">
                                        <li id="menu-item-8827"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                            <a href="/"> <span class="menu-item-text">Home</span></a>
                                        </li>
                                        <li id="menu-item-8828"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children has-sub">
                                            <a> <span class="menu-item-text">CATEGORIES</span></a>
                                            <ul>
                                               @if(isset($categories_search))
                                                    @foreach($categories_search as $row)
                                                     <li id="menu-item-8824"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                        href="{{'/category_'.$row->title}}"> <span
                                                            class="menu-item-text">{{$row->title}}</span></a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                       

                        <!-- End Desktop Content -->

                        <!-- Start Mobile Content -->

                        <div class="to-flex-col th-col-left hidden-md hidden-lg">



                            <div class="site-logo sticky-enabled">

                                <a href="/" class="logo_box">

                                    <img src="images/logo.png"
                                        class="img-responsive main-logo hidden-xs hidden-sm" alt=""
                                        style="width:220px;">

                                    <img src="images/logo.png"
                                        class="img-responsive main-logo hidden-md hidden-lg" alt=""
                                        style="width:130px;">
                                    <img src="images/logo.png"
                                        class="img-responsive sticky-logo" alt="" style="width:220px;">

                                </a>

                            </div>


                        </div>

                        <div class="to-flex-col th-col-center hidden-md hidden-lg">


                        </div>


                        <div class="to-flex-col th-col-right hidden-md hidden-lg flexright">





                            <ul id="cart-menu" class="mayosis-option-menu hidden-sm hidden-xs">

                                <li class="dropdown cart_widget cart-style-one"><a href="#" data-toggle="dropdown"
                                        class="cart-button"><i class="zil fa fa-shopping-cart"></i> <span
                                            class="items edd-cart-quantity">0</span></a>
                                    <ul role="menu" class="dropdown-menu mini_cart">
                                        <li class="widget">
                                            <div class="widget widget_edd_cart_widget">
                                                <p class="edd-cart-number-of-items" >Number of
                                                    items in cart: <span class="edd-cart-quantity">0</span></p>
                                                <ul class="edd-cart">

                                                    <li class="cart_item empty"><span class="edd_empty_cart">sYour cart
                                                            is empty.s</span></li>
                                                    <li class="cart_item edd-cart-meta edd_total" style="display:none;">
                                                        Total: <span class="cart-total">$0.00</span></li>
                                                    <li class="cart_item edd_checkout" style="display:none;"><a
                                                            href="#">Checkout</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>

                            <ul class="mobile-cart hidden-md hidden-lg">
                                <li class="cart-style-one"><a href="#"
                                        class="btn btn-danger btn-lg mobile-cart-button">
                                        <i class="zil zi-cart"></i></a></li>

                            </ul>
                            <div class="mobile--nav-menu">
                                <div class="top-part-mobile to-flex-row">
                                    <div class="to-flex-col th-col-left">
                                    </div>

                                    <div class="to-flex-col th-col-right">
                                    </div>
                                </div>

                                <div class="mobile-menu-main-part">
                                    <div class="col-sm-12 col-xs-12">
                                        <div id="mayosis-sidemenu" class="menu-menu-1-container">
                                            <ul id="menu-menu-2" class="menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                                    <a href="/"> <span class="menu-item-class">Home</span></a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children has-sub">
                                                    <a> <span class="menu-item-class">CATEGORIES</span><span
                                                            class="holder"></span></a>
                                                    <ul>
                                                       @if(isset($categories_search))
                                                    @foreach($categories_search as $row)
                                                     <li id="menu-item-8824"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                        href="{{'/category_'.$row->title}}"> <span
                                                            class="menu-item-text">{{$row->title}}</span></a></li>
                                                    @endforeach
                                                @endif
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="bottom-part-mobile to-flex-row">
                                    <div class="to-flex-col th-col-left">
                                    </div>

                                    <div class="to-flex-col th-col-right">
                                    </div>
                                </div>
                            </div>
                            <div class="overlaymobile"></div>
                            <ul class="mobile-nav">
                                <li class="burger"><span></span></li>
                            </ul>
                        </div>
                        <!-- End Mobile Content -->
                    </div>

                </div>
            </div><!-- .header-master -->

        </header>