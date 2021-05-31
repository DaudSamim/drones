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

         <div style="background-color: #30e3ca; padding: 5px;text-align: center; color: white; font-weight: 800">
         AFRICAN DRONE STOCK
     	 </div>

         <header class="site-navbar container py-0" style="font-weight: 1000" role="banner">
            <div class="row align-items-center">
               <div class="col-6 col-xl-2" style="display: flex;">
               	<img src="images/logo.png" alt="Logo" style="max-width: 100%">
                 <!--  <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">African<span class="text-primary">Drone</span> </a></h1> -->

               </div>
               <div class="col-12 col-md-10 d-none d-xl-block">
                  <nav class="site-navigation position-relative text-right" role="navigation">
                     <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="has-children">
                           <a href="#">Categories <i class="fas fa-angle-down"></i></a>
                           
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

        

         <div class="site-blocks-cover overlay" style="background-image: url(videos/Video-20210331_134819-Meeting Recording.mp4);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">

            	<video class="video" style="width: fill ; height: 240"  autoplay loop preload="none" muted="muted">
				  <source src="videos/main.mp4" type="video/mp4">
				  <!-- <source src="movie.ogg" type="video/ogg"> -->
				  Your browser does not support the video tag.
				</video>
            	<!--  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZBZxQV6JDFI?autoplay=1&muted=1&loop=1&controls=0&rel=0&hd=1&playlist=ZBZxQV6JDFI&showinfo=0&fs=0" title="YouTube video player" frameborder="0"></iframe> -->
               <div class="row align-items-center justify-content-center text-center">
                  <div class="col-md-12">
                     <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center " >
                           <h1 style="color: black; font-weight: 800" class="" data-aos="fade-up">THE BEST AERIAL VIDEOS </h1>
                           <p style="color: black; font-weight: 800" data-aos="fade-up" data-aos-delay="100">SHARED BY TALLENTED CREATORS</p>
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
                                       <option value="">All Categories</option>
                                       @if(isset($categories_search))
                                       	@foreach($categories_search as $row)
                                       	 <option value="{{$row->id}}">{{$row->title}}</option>
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
         <div class="site-section bg-light" style="padding-bottom: 0px !important">
            <div class="container">
               <div class="overlap-category mb-5">
                  <div class="row align-items-stretch no-gutters">
                  	@if(isset($categories))
                  	@foreach($categories as $category)
                     <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="{{'/category_'.$category->title}}" class="popular-category h-100">
                        <img src="{{'images/'.$category->image}}" style="max-width: 100%;height: 130px">
                        <span class="caption mb-2 d-block" style="text-transform: uppercase;">{{$category->title}}</span>
                        <!-- <span class="number">3,921</span> -->
                        </a>
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
           </div>
       </div>

       <div class="site-section bg-light p-1" style="padding-top: 0px !important; padding-bottom: 0px !important">
            <div class="container-fluid">
               <div class="row m-0 ">
                  <div class="col-md-7  border-primary mb-3 " style="margin-left: 5%">
                     <h2 class="font-weight-light text-primary">Featured Videos</h2>
                  </div>
               </div>
                <div class="row mt-2">
                @if(isset($videos))
                @foreach($videos as $video)
		         <div class="col-lg-4" style="max-height: 300px !important">
		            <a href="{{'/product_'.$video->id}}">
		               <video class="Videos" onmouseover="$(this).play(); style="width: 100%; height: 70%; object-fit: fill" preload="none">
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
		               <video poster="{{'/images/'.$video->poster}}" onmouseover="$(this).play(); width="100%" style="height: 70%; object-fit: fill" class="videos" preload="none">
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


         <div class="site-section" style="background-color: lightgrey">
            <div class="container">
               <div class="row justify-content-center mb-5">
                  <div class="col-md-7 text-center border-primary">
                     <h2 class="font-weight-light text-primary">Testimonials</h2>
                  </div>
               </div>
               <div class="slide-one-item home-slider owl-carousel">
                  <div>
                     <div class="testimonial">
                        <figure class="mb-4">
                           <img src="images/test_3.jpg" alt="Image" class="img-fluid mb-3">
                           <p>Joseph B.</p>
                        </figure>
                        <blockquote>
                           <p>&ldquo;We use African Drone Stock regularly for Documentaries, and music videos. Always a super-great selection. Fulfillment is always easy and quick! So we just keep on coming back for more!&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
                  <div>
                     <div class="testimonial">
                        <figure class="mb-4">
                           <img src="images/test_4.jpg" alt="Image" class="img-fluid mb-3">
                           <p>Fransisca B</p>
                        </figure>
                        <blockquote>
                           <p>&ldquo;Easy, quick and uncomplicated purchase. Everything worked fine just how it should. They have a huge collection of all types  of aerial clips. I will definitely purchase again on African drone stock.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
                  <div>
                     <div class="testimonial">
                        <figure class="mb-4">
                           <img src="images/test_1.jpg" alt="Image" class="img-fluid mb-3">
                           <p>Walter Jacobson</p>
                        </figure>
                        <blockquote>
                           <p>&ldquo;Great service and selections! I had an issue with one video download, BUT African Drone Stock provided great and fast support on clearing it up.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
                  <div>
                     <div class="testimonial">
                        <figure class="mb-4">
                           <img src="images/test_2.jpg" alt="Image" class="img-fluid mb-3">
                           <p>Leticia Cereti</p>
                        </figure>
                        <blockquote>
                           <p>&ldquo;I always find that shots I'm looking for. And everytime it's so cheap and fast. So I am more efficient in my work.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
         <div class="newsletter bg-primary py-5">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <h2>Newsletter</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
                  <div class="col-md-6">
                     <form method="post" action="/subscribe" class="d-flex">
                     	@csrf
                        <input type="email" required name="email" class="form-control" placeholder="Email">
                        <input type="submit" value="Subscribe" class="btn btn-white">
                     </form>
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
   

   </script>
</html>