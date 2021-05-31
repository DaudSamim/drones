@include('header')
   <div class="site-wrap">
      <div class="site-mobile-menu">
         <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
               <span class="icon-close2 js-menu-toggle"></span>
            </div>
         </div>
         <div class="site-mobile-menu-body"></div>
      </div>
      <div style="background-color: #30e3ca;text-align: center; color: white; font-weight: 800">
         AFRICAN DRONE STOCK
      </div>
      <header class="site-navbar container py-0" style="font-weight: 1000" role="banner">
         <div class="row align-items-center">
            <div class="col-6 col-xl-2" style="display: flex;">
              <a href="/"> <img src="images/logo.png" alt="Logo" style="max-width: 100%"></a>
               <!--  <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">African<span class="text-primary">Drone</span> </a></h1> -->
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
                     <li><a href="/contact_us">Contact</a></li>
                     <li class="ml-xl-3 login"><a href="/login"><span class="border-left pl-xl-4"></span>Log In</a></li>
                  </ul>
               </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
               <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
         </div>
      </header>
      <div class=" overlay" style="background-image: url(images/jeeni.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
         <div class="container" style="height: 220px">
            <!--  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZBZxQV6JDFI?autoplay=1&muted=1&loop=1&controls=0&rel=0&hd=1&playlist=ZBZxQV6JDFI&showinfo=0&fs=0" title="YouTube video player" frameborder="0"></iframe> -->
            <div class="row align-items-center justify-content-center text-center">
               <div class="col-md-12">
                  <div class="row justify-content-center mb-0">
                     <div class="col-md-8 text-center form-search-wrap " style="margin-top: 8%" >
                        <h1 style="color: black; font-weight: 800" class="" data-aos="fade-up">
{{ str_limit($main_video->title,30)}}</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="site-section bg-light mx-0" style="padding-top:0!important;padding-bottom:30px!important; margin-top: 0px !important">
            <div class="row mb-5">
            </div>
            <div class="row p-3" >
               <div class="col-lg-6">
                  <video width="100%" height="auto" muted="muted" autoplay>
                     <source src="{{'/videos/'.$main_video->file}}">
                     Your browser does not support this file
                  </video>
               </div>
               <div class="col-lg-6" style="background-color:#191919; padding: 5%;color: white; border-radius: 5%"  >
                  <h1 class=" text-light pt-0 mt-2 text-7">
{{$main_video->title}}</h1>
                  <p>ITEM ID: {{$main_video->id}}</p>
                  <hr style="background-color:#7B7B7B!important;margin:0px">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                     <label class="form-check-label" for="flexCheckDefault">
                     4k Hd (1300 x 1000)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                     <label class="form-check-label" for="flexCheckChecked">
                     8k Hd (1800 x 1000)
                     </label>
                  </div>
                  <hr style="background-color:#!important;margin:0px">
                  <span class=" mt-4 font-weight-bold  text-4" style="color:">BEST PRICE GUARANTEE</span>
                  <br>
                  <br>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: 50px;
                     width: 350px;
                     background-color:# ;
                     color:white;
                     border-color:# ;
                     border-radius: 1%!important;
                     display: inline-block;">ADD TO CART</button>
               </div>
           
         </div>
      </div>
         <div class="container px-5">
            <div class="row">
               <div class="col-lg-12">
                  <h2>Description</h2>
                  <p>Frame Rate: 29.97fps |Bitrate: 100 Mbps | Format: H.264, MP4 |Colour Profile: Normal
Model Released: No |Property Released: No |Unlimited / Forever Use License – Royalty-Free
                  </p>
                  <h1 class=" text-light pt-0 mt-2 text-7">Tags:</h1>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px"> Bird Eye View</button>
                 
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px"> CitySCape</button>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px"> Higher Up</button>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px"> Skyline</button>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px"> Sunny</button>
                  <button type="button" class="btn btn-primary font-weight-bold"           style="border-radius: 50%; height: auto;
                     width: auto;
                     background-color:white ;
                     color:black;
                     border-color:grey ;
                     border-radius: 10px!important;
                     display: inline-block;
                     font-size:12px;
                     margin:10px">Tall Building</button>
               </div>
               
            </div>
         </div>

      <br>
         <hr>
      <br>

        <div class="site-section bg-light p-1" style="padding-top: 0px !important; padding-bottom: 0px !important">
            <div class="container-fluid ">
               <div class="row m-0">
                  <div class="col-md-7  border-primary mb-3 " style="margin-left: 5%">
                     <h2 class="font-weight-light text-primary" >Related Videos</h2>
                  </div>
               </div>
                <div class="row mt-2">
                @if(isset($videos))
                @foreach($videos as $video)
               <div class="col-lg-3" style="max-height: 300px !important">
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
     /*
      var vid = document.getElementsByTagName("video");
      [].forEach.call(vid, function (item) {
          item.addEventListener('mouseover', hoverVideo, false);
          item.addEventListener('mouseout', hideVideo, false);
      });

      function hoverVideo(e)
      {   
          this.play();
      }
      function hideVideo(e)
      {
          //this.pause();
      }
      */
$(document).ready(function() {
   $(".videos").on("mouseover", function(event) {
   this.play();
   
   }).on('mouseout', function(event) {
   this.pause();
   this.currentTime = 0;
   
   });
   })
   

      // Show loading animation.
     
      
   </script>
</html>