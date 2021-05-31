@include('header')
<style>
   .popular-category1 {
   background: #30e3ca;
   display: block;
   text-align: center;
   padding: 30px 10px;
   border-radius: 7px;
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
   color: #30e3ca; }
   .popular-category1:hover .icon {
   color: #fff; }
   .popular-category1:hover .number {
   background: #1bc5ad;
   color: #fff; }
</style>
<style>
   .cart-div{
   display: flex!important;
   /*align-items: center;*/
   justify-content: space-between;
   color: #000 !important;
   margin-top: 15px;
   }
   .name{
   width: 33%;
   }
   .name .vedio-name{
   color: #s000 !important;
   display: block;
   font-size: 22px;
   font-weight: 500;
   }
   .vedio-price{
   color: #000;
   display: block;
   text-align: center;
   font-size: 20px;
   font-weight: 600;
   }
   .bx{
   font-size: 20px !important;
   cursor: pointer;
   }
</style>
<div class="site-wrap">
   @include('header_for_single_page')
   <div class=" overlay" style="background-image: url(images/contact.jpg);height:50%!important" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container" style="height: 380px">
         <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZBZxQV6JDFI?autoplay=1&muted=1&loop=1&controls=0&rel=0&hd=1&playlist=ZBZxQV6JDFI&showinfo=0&fs=0" title="YouTube video player" frameborder="0"></iframe> -->
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
               <div class="row justify-content-center mb-4">
                  <div class="col-md-8 text-center  form-search-wrap" style="margin-top: 15%" >
                     <h1 style="color: black; font-weight: 800" class="" data-aos="fade-up">Checkout</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container m-5">
      <div class="row pt-5">
         <div class="col-12">
            <h3>Products in Cart</h3>
            @if(isset($cart_products))
            <div class="cart-div">
               <div class="name">
                  <span class="vedio-name text-dark">Title</span>
                 
               </div>
               <div>
                  <span class="vedio-price text-dark">Price</span>
                  <span>
               </div>
               <div class="price">
                 
                  <span class="vedio-price text-dark">Remove</span>
                 
               </div>
            </div>
            <hr>
            @foreach($cart_products as $row)
            @php
            $row_product = DB::Table('videos')->where('id',$row->product_id)->first();
            @endphp 
            <div class="cart-div">
               <div class="name">
                 <a href="{{'product_'.$row->product_id}}"> <span class="vedio-name text-dark">{{$row_product->title}}</span>
                  <span class="text-dark ">{{$row->quality}}</span></a>
               </div>
               <div>
                  <span class="vedio-price text-dark">{{$row->price}}$</span>
                  <span>
               </div>
               <div class="price">
                  <a href="{{'/remove_cart_item/'.$row->id}}"><i class="fa fa-trash" style="color: red" aria-hidden="true"></i></a>
               </div>
            </div>
            <hr>
            @endforeach
            @endif
            <div style="float: right"><button class="btn btn-lg" data-toggle="modal" data-target="#checkout" style="background-color: #3b009e; color:white">Checkout</button></div>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Select Payment Method</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <a href="/paypal"><button type="button" style="background-color: #3b009e; color:white" class="btn btn-secondary" >Paypal</button></a>
               <a href="/stripe"><button type="button" style="background-color: #3b009e; color:white" class="btn btn-secondary">Stripe</button></a>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
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
   $(document).ready(function() {
   $(".myvideos").on("mouseover", function(event) {
   this.play();
   
   }).on('mouseout', function(event) {
   this.pause();
   this.currentTime = 0;
   
   });
   })
   
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
   this.pause();
   }
</script>
</html>