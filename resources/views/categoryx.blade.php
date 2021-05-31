@include('header')
<style>
   .popular-category1 {
   background: #61ce70;
   display: block;
   text-align: center;
   padding: 10px 10px;
   /*border-radius: 7px;*/
   top: 0;
   position: relative;
   -webkit-transition: .3s all ease-in-out;
   -o-transition: .3s all ease-in-out;
   transition: .3s all ease-in-out;
   color: white!important }
   .popular-category1 .icon {
   display: block;
   -webkit-transition: .1s all ease;
   -o-transition: .1s all ease;
   transition: .1s all ease;
   margin-bottom: 10px; }
   .popular-category1 .icon > span {
   line-height: 0;
   font-size: 45px; }
   .popular-category1 .caption {
   color: #fff;
   -webkit-transition: .1s all ease;
   -o-transition: .1s all ease;
   transition: .1s all ease;
   text-transform: none;
   letter-spacing: normal;
   font-size: 18px;
   font-weight: normal; }
   .popular-category1 .number {
   padding: 2px 20px;
   border-radius: 30px;
   display: inline-block;
   background: #e9ecef;
   color: #000;
   font-size: 14px;
   -webkit-transition: .1s all ease;
   -o-transition: .1s all ease;
   transition: .1s all ease; }
   .popular-category1:hover {
   background: #fff;
   font-color:#30e3ca;
   -webkit-box-shadow: 0 5px 30px -5px rgba(48, 227, 202, 0.5);
   box-shadow: 0 5px 30px -5px rgba(48, 227, 202, 0.5);
   top: -10px; }
   .popular-category1:hover .caption {
   color: #61ce70; }
   .popular-category1:hover .icon {
   color: #fff; }
   .popular-category1:hover .number {
   background: #1bc5ad;
   color: #fff; }
</style>
<div class="site-wrap">
   <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
         <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
         </div>
      </div>
      <div class="site-mobile-menu-body"></div>
   </div>
   <div style="background-color: #30e3ca; padding: 5px;text-align: center; color: white; font-weight: 800">
      AFRICAN DRONE STOCK
   </div>
   <header class="site-navbar container py-0" style="font-weight: 1000" role="banner">
      <div class="row align-items-center">
         <div class="col-6 col-xl-2" style="display: flex;">
            <a href="/"><img src="images/logo.png" alt="Logo" style="max-width: 100%"></a>
            <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">African<span class="text-primary">Drone</span> </a></h1> -->
         </div>
         <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
               <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="active"><a href="/">Home</a></li>
                  <li class="has-children">
                     <a href="#">Categories  <i class="fas fa-angle-down"></i></a>
                     <ul class="dropdown">
                        @if(isset($categories_search))
                        @foreach($categories_search as $row)
                        <li><a href="{{'/category_'.$row->title}}">{{$row->title}}</a></li>
                        @endforeach
                        @endif
                     </ul>
                  </li>
                  <li><a href="contact_us">Contact</a></li>
                  <li class="ml-xl-3 login"><a href="/login"><span class="border-left pl-xl-4"></span>Log In</a></li>
               </ul>
            </nav>
         </div>
         <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
         </div>
      </div>
   </header>
   <div class=" overlay" style="background-image: url(images/jeeni.jpg);height:50%!important" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container" style="height: 380px">
         <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZBZxQV6JDFI?autoplay=1&muted=1&loop=1&controls=0&rel=0&hd=1&playlist=ZBZxQV6JDFI&showinfo=0&fs=0" title="YouTube video player" frameborder="0"></iframe> -->
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
               <div class="row justify-content-center mb-4">
                  <div class="col-md-8 text-center  form-search-wrap" style="margin-top: 8%" >
                     <h1 style="color: black; font-weight: 800; text-transform: uppercase;" class="" data-aos="fade-up" >{{$main_category->title}} </h1>
                  </div>
               </div>
               <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                  <form method="post">
                     <div class="row align-items-center">
                        <div class="col-lg-6 mb-6 mb-xl-0 col-xl-5">
                           <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                        </div>
                        <div class="col-lg-3 mb-6 mb-xl-0 col-xl-3">
                           <div class="select-wrap">
                              <span class="icon"></span>
                              <select class="form-control rounded" name="" id="">
                                 @if(isset($categories_search))
                                 @foreach($categories_search as $row)
                                 <option @if($row->title == $main_category->title) selected @endif value="{{$row->id}}">{{$row->title}}</option>
                                 @endforeach
                                 @endif
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 ml-auto text-right">
                           <input style="color: white" type="submit" class="btn btn-primary btn-block rounded" value="Search">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="bg-light" style="margin-bottom: 0px !important; padding-bottom: 0px !important">
      <div class="container-fluid" style="background-color: black">

         <div class=" mb-0 bg-transparent">
            <div class="row align-items-stretch no-gutters">
               <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-4 bg-transparent">
                  <a href="{{'/previous_category_'.$main_category->id}}" class="popular-category1 ">
                  <span class="caption mb-2 d-block">Previous Category</span>
                  </a>
               </div>
               <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-4">
                  <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                  <form method="post">
                     <div class="row align-items-center">
                        <div class="col-lg-9 mb-6 mb-xl-0 col-xl-5">
                           <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                        </div>
                        
                        <div class="col-lg-3 col-xl-3 ml-auto text-right">
                           <input style="color: white" type="submit" class="btn btn-primary btn-block rounded" value="Search">
                        </div>
                     </div>
                  </form>
               </div>
               </div>
               <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-4">
                  <a href="{{'/next_category_'.$main_category->id}}" class="popular-category1 ">
                  <span class="caption mb-2 d-block">Next Category</span>
                  </a>
               </div>
            </div>
         </div>
         
      </div>
   </div>


   <div class="site-section bg-light p-1" style="padding-top: 0px !important; padding-bottom: 0px !important">
            <div class="container-fluid">
               <div class="row m-0">
                  <div class="col-md-7  border-primary mb-3 " style="margin-left: 5%">
                     <h2 class="font-weight-light text-primary" >Trending Videos</h2>
                  </div>
               </div>
                <div class="row mt-2">
                @if(isset($videos))
                @foreach($videos as $video)
             <div class="col-lg-4" style="max-height: 300px !important">
                <a href="{{'/product_'.$video->id}}">
                   <video class="videos" poster="{{'/images/'.$video->poster}}" style="width: 100%; height: 70%; object-fit: fill" preload="none">
                      <source src="{{'videos/'.$video->file}}">
                      Your browser does not support this file
                   </video>
                   <div style="padding: 1%">
                   <p>{{str_limit($video->title,30)}}<span style="float:right;">${{$video->price}}</span></p>
                  </div>
                </a>
             </div>
             @endforeach
             @endif
            
            
          </div>
            </div>
         </div>
   @include('footer')
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/rangeslider.min.js"></script>
<script src="js/main.js"></script>
</body>
<script>
   $(document).ready(function() {
   $(".videos").on("mouseover", function(event) {
   this.play();
   
   }).on('mouseout', function(event) {
   this.pause();
   this.currentTime = 0;
   
   });
   })
   
 
</script>
</html>