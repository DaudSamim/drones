@include('header')

    <div class="mayosis-wrapper">

      @include('header_for_single_page')

        <div class="mayosis-container" style="background:#ffffff">

            <div data-elementor-type="wp-post" data-elementor-id="24" class="elementor elementor-24"
                data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">

                        <section 
                            class="elementor-section elementor-top-section elementor-element elementor-element-16adda4 custom-bg-color elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="16adda4" data-element_type="section"
                            >
                            <div class="elementor-background-video-container">
                                 <div data-video="69yA-F7yOiQ" class="header__video js-background-video">
          <div class="header__background">
            <div id="yt-player"></div>
          </div>
        </div>
        <div class="header__video-overlay js-video-overlay" style="background-image: url('https://img.youtube.com/vi/69yA-F7yOiQ/maxresdefault.jpg');"></div>
     
                            </div>
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c44438"
                                        data-id="1c44438" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7da0020 elementor-widget elementor-widget-mayosis-theme-hero"
                                                    data-id="7da0020" data-element_type="widget"
                                                    data-widget_type="mayosis-theme-hero.default">
                                                    <div class="elementor-widget-container">

                                                        <!-- Element Code start -->

                                                        <div
                                                            class="col-md-12  col-xs-12 col-sm-12 mayosis_theme_hero_box">
                                                            <h1 class="hero-title">THE BEST AERIAL VIDEOS SHARED BY
                                                                TALLENTED CREATORS
                                                                <span class="mhero_counter_main">
                                                                </span>
                                                            </h1>
                                                            <div class="hero-description"></div>

                                                        </div>
                                                        <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-32e332b elementor-widget elementor-widget-mayosis-search"
                                                    data-id="32e332b" data-element_type="widget"
                                                    data-widget_type="mayosis-search.default">
                                                    <div class="elementor-widget-container">

                                                        <!-- Element Code start -->
                                                        <div class="product-search-form style1">
                                                            <form method="GET" action="https://africandronestock.com/">

                                                                <div class="search-fields">
                                                                    <input name="s" value="" type="text"
                                                                        placeholder="Search Now">
                                                                    <input type="hidden" name="post_type"
                                                                        value="download">
                                                                    <span class="search-btn"><input value=""
                                                                            type="button"></span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-85b239a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="85b239a" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-899d6e0"
                                        data-id="899d6e0" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0dc32e0 elementor-widget elementor-widget-heading"
                                                    data-id="0dc32e0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">OUR
                                                            CATEGORIES</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-dcd2318 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="dcd2318" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                            @if(isset($categories))
                            @foreach($categories as $category)
                             


                            <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-a2025a3"
                                        data-id="a2025a3" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3e50a25 elementor-widget elementor-widget-image"
                                                    data-id="3e50a25" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <a href="{{'/category_'.$category->title}}">
                                                                <img style="max-width: 100%;height: 150px"
                                                                    src="{{'images/'.$category->image}}"
                                                                    class="attachment-large size-large" alt=""
                                                                    loading="lazy"
                                                                    /> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-50b210f elementor-widget elementor-widget-heading"
                                                    data-id="50b210f" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default"><a
                                                                href="{{'/category_'.$category->title}}">{{$category->title}}</a></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                             @endforeach
                             @endif

                                    

                                   
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-e26d8b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="e26d8b3" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-561d15f"
                                        data-id="561d15f" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-30aa770 elementor-widget elementor-widget-heading"
                                                    data-id="30aa770" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">Most
                                                            Recent Videos</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-79047b9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="79047b9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c274fd0"
                                        data-id="c274fd0" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-029c0ce elementor-widget elementor-widget-mayosis-edd-recent"
                                                    data-id="029c0ce" data-element_type="widget"
                                                    data-widget_type="mayosis-edd-recent.default">
                                                    <div class="elementor-widget-container">


                                                        <div class="edd_fetured_ark">
                                                            <div class="ms--title--container">
                                                                <div class="title--box--full"
                                                                    style="margin-bottom:20px;">
                                                                    <div class="title--promo--box">
                                                                        <h3 class="section-title"> </h3>
                                                                    </div>

                                                                    <div class="title--button--box">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row fix    ">



                                                                 @if(isset($videos))
                    @foreach($videos as $video)
                     <div class="col-lg-4" style="max-height: 300px !important">
                        <a href="{{'/product_'.$video->id}}">
                           <video class="zxc"  poster="{{'/images/'.$video->poster}}" style="width: 100%; height: 80%; object-fit: fill" preload="none">
                              <source src="{{'videos/'.$video->file}}">
                              Your browser does not support this file
                           </video>
                            <div class="product-meta">

                                                                                    <div class="product-tag">

                                                                                        <a href="#" class="mayosis-play--button-video icon-play" data-lity="">
                                                                                        </a>

                                                                                        <h4 class="product-title">
                                                                                               {{str_limit($video->title,30)}}</h4>





                                                                                    </div>

                                                                                    <div class="count-download">

                                                                                        <div class="product-price promo_price">
                                                                                            <span class="edd_price" id="edd_price_11718">${{$video->price}}</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="clearfix"></div>


                                                                                </div>
                        </a>
                     </div>
                     @endforeach
                     @endif




                                                            </div>

                                                            <div class="mayo-page-product">
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e151cb0 mayosis-mobile-align-center mayosis-align-center elementor-widget elementor-widget-mayosis-single-button"
                                                            data-id="e151cb0" data-element_type="widget"
                                                            data-widget_type="mayosis-single-button.default">
                                                            <div class="elementor-widget-container">

                                                                <!-- Element Code start -->
                                                                <div class="elementor-button-area">
                                                                    <a class="custombuttonmain btn btn-primary btn-lg browse-more single_dm_btn"
                                                                        href="#"
                                                                        target="_self">Explore More <i class=""></i></a>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </section>

<section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-f0bf11b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="f0bf11b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-51ab3e6 shadow-box"
                                        data-id="51ab3e6" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-cf2348d elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                    data-id="cf2348d" data-element_type="widget"
                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Subscribe To Get Discounts, Updates & More</h1>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-405c79b elementor-widget elementor-widget-text-editor"
                                                    data-id="405c79b" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div role="form" class="wpcf7" id="wpcf7-f83-p24-o1"
                                                                lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite"
                                                                        aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form
                                                                    action="https://africandronestock.com/#wpcf7-f83-p24-o1"
                                                                    method="post" class="wpcf7-form init"
                                                                    novalidate="novalidate" data-status="init">
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7" value="83" />
                                                                        <input type="hidden" name="_wpcf7_version"
                                                                            value="5.4.1" />
                                                                        <input type="hidden" name="_wpcf7_locale"
                                                                            value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f83-p24-o1" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_container_post" value="24" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_posted_data_hash" value="" />
                                                                    </div>
                                                                    <div
                                                                        class="input-group subscribe_form_dm solid-input">
                                                                        <span
                                                                            class="wpcf7-form-control-wrap email"><input
                                                                                type="email" name="email" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control email-attach-mayo"
                                                                                aria-invalid="false"
                                                                                placeholder="Your Email Address" /></span><br />
                                                                        <span class="input-group-addon subscribe-button"
                                                                            id="basic-addon2"><input type="submit"
                                                                                value="Submit"
                                                                                class="wpcf7-form-control wpcf7-submit btn btn-lg subscribe-button subscribe-button-attach" /></span>
                                                                    </div>
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-e2a1a18 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="e2a1a18" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-768ee27"
                                        data-id="768ee27" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-fe22c4d elementor-widget elementor-widget-mayosis-edd-featured"
                                                    data-id="fe22c4d" data-element_type="widget"
                                                    data-widget_type="mayosis-edd-featured.default">
                                                    <div class="elementor-widget-container">


                                                        <div class="edd_fetured_ark">

                                                            <div class="full--grid-elementor">
                                                                <div class="title--box--full"
                                                                    style="margin-bottom:20px;">
                                                                    <div class="title--promo--box">
                                                                        <h3 class="section-title">BEST SELLING VIDEOS
                                                                        </h3>
                                                                    </div>

                                                                    <div class="title--button--box">
                                                                    </div>
                                                                </div>

                                                                <div class="row fix">

                                                                     @if(isset($videos))
                @foreach($videos as $video)
                 <div class="col-lg-4" style="max-height: 300px !important">
                    <a href="{{'/product_'.$video->id}}">
                       <video class="zxc"  poster="{{'/images/'.$video->poster}}" style="width: 100%; height: 80%; object-fit: fill" preload="none">
                          <source src="{{'videos/'.$video->file}}">
                          Your browser does not support this file
                       </video>
                       <div class="product-meta">

                                                                                    <div class="product-tag">

                                                                                        <a href="#" class="mayosis-play--button-video icon-play" data-lity="">
                                                                                        </a>

                                                                                        <h4 class="product-title">
                                                                                               {{str_limit($video->title,30)}}</h4>





                                                                                    </div>

                                                                                    <div class="count-download">

                                                                                        <div class="product-price promo_price">
                                                                                            <span class="edd_price" id="edd_price_11718">${{$video->price}}</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="clearfix"></div>


                                                                                </div>
                     
                    </a>
                 </div>
                 @endforeach
                 @endif
                                                                   
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </section>

                        <section
                            class="has_mayosis_custom_bg_thumbnail elementor-section elementor-top-section elementor-element elementor-element-89b086e elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            style="background:url('images/home_page_image.jpg');" data-particle_enable="false" data-particle-mobile-disabled="false"
                            data-id="89b086e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:10162,&quot;url&quot;:&quot;https:\/\/africandronestock.com\/wp-content\/uploads\/2021\/04\/frankfurt-1804481-2.jpg&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aad8544"
                                        data-id="aad8544" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">

                                                <section data-particle_enable="false"
                                                    data-particle-mobile-disabled="false"
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8749ec5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8749ec5" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">

                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-08ed2a1 shadow-box"
                                                                data-id="08ed2a1" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-3ff7f70 shadow-bo elementor-widget elementor-widget-mayosis-counter"
                                                                            data-id="3ff7f70" data-element_type="widget"
                                                                            data-widget_type="mayosis-counter.default">
                                                                            <div class="elementor-widget-container">


                                                                                <!-- Element Code start -->
                                                                                <div class="counter-box">
                                                                                    <h4 class="statistic-counter">35841
                                                                                    </h4> <span
                                                                                        class="counter-suffix"></span>
                                                                                    <p class="mcounter_title_promo">
                                                                                        PREMIUM STOCKS</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4c6a766 shadow-box"
                                                                data-id="4c6a766" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9afa1ac elementor-widget elementor-widget-mayosis-counter"
                                                                            data-id="9afa1ac" data-element_type="widget"
                                                                            data-widget_type="mayosis-counter.default">
                                                                            <div class="elementor-widget-container">


                                                                                <!-- Element Code start -->
                                                                                <div class="counter-box">
                                                                                    <h4 class="statistic-counter">17852
                                                                                    </h4> <span
                                                                                        class="counter-suffix"></span>
                                                                                    <p class="mcounter_title_promo">
                                                                                        TOTAL DOWNLOADS</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3009d65 shadow-box"
                                                                data-id="3009d65" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5570bc5 elementor-widget elementor-widget-mayosis-counter"
                                                                            data-id="5570bc5" data-element_type="widget"
                                                                            data-widget_type="mayosis-counter.default">
                                                                            <div class="elementor-widget-container">


                                                                                <!-- Element Code start -->
                                                                                <div class="counter-box">
                                                                                    <h4 class="statistic-counter">1132
                                                                                    </h4> <span
                                                                                        class="counter-suffix"></span>
                                                                                    <p class="mcounter_title_promo">
                                                                                        EMAIL SUBSCRIBER</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-aeff6c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="aeff6c0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bc4d91c"
                                        data-id="bc4d91c" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-95d64bb elementor-widget elementor-widget-mayosis-search-terms"
                                                    data-id="95d64bb" data-element_type="widget"
                                                    data-widget_type="mayosis-search-terms.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="search--term--div ">
                                                            <h2 class="section-title">Search With Tags </h2>


                                                            <div class="search-term-style-five tag_widget_single">

                                                                <ul>
                                                                    <li><a href="#"
                                                                            rel="nofollow">1080</a><a
                                                                            href="#"
                                                                            rel="nofollow">drone view</a><a
                                                                            href="#"
                                                                            rel="nofollow">h</a><a
                                                                            href="#"
                                                                            rel="nofollow">aerials</a><a
                                                                            href="#"
                                                                            rel="nofollow">a flock of birds flying over
                                                                            a pond with beautiful cityscape aerial, uk
                                                                            london-</a><a
                                                                            href="#"
                                                                            rel="nofollow">drone descends revealing
                                                                            straight city pathway</a><a
                                                                            href="#"
                                                                            rel="nofollow">bird eye view of car
                                                                            park</a><a
                                                                            href="#"
                                                                            rel="nofollow">drone videos</a><a
                                                                            href="#"
                                                                            rel="nofollow">videos</a><a
                                                                            href="#"
                                                                            rel="nofollow">dronevideos</a><a
                                                                            href="#"
                                                                            rel="nofollow">high angle view</a><a
                                                                            href="#"
                                                                            rel="nofollow">top down reveal city
                                                                            aerial</a><a
                                                                            href="#"
                                                                            rel="nofollow">african girl</a><a
                                                                            href="#"
                                                                            rel="nofollow">nature</a><a
                                                                            href="#"
                                                                            rel="nofollow">flying forward over birds
                                                                            swimming in the pond</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-281671ff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="281671ff" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c725afa"
                                        data-id="7c725afa" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2fabcc9c elementor-widget elementor-widget-heading"
                                                    data-id="2fabcc9c" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Subscribe</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-3d964d6b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3d964d6b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-786ea4c"
                                        data-id="786ea4c" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3fd995ac elementor-widget elementor-widget-mayosis-pricing-table"
                                                    data-id="3fd995ac" data-element_type="widget"
                                                    data-widget_type="mayosis-pricing-table.default">
                                                    <div class="elementor-widget-container">

                                                        <!-- Element Code start -->

                                                        <div class="dm_pricing_table">
                                                            <div class="pricing_title"
                                                                style="background:rgba(198,201,204,0)">
                                                                <h2 style="color:#1d314f; text-align:center;"> Silver
                                                                </h2>
                                                            </div>
                                                            <div class="pricing_content">
                                                                <div class="pricing_table_title_box">
                                                                    <h3 class="price_tag_table table_pricing_amount">
                                                                        <sub class="pricing_currency">$</sub> 99<span
                                                                            class="pricing_timeframe">/mo</span></h3>
                                                                </div>

                                                                <div class="main_price_content"
                                                                    style="text-align:left;">
                                                                    <ul>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Download <b>5
                                                                                Videos</b> Per Month</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i> <b>1080P Full HD
                                                                            </b>Quality</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Access To All
                                                                            Videos</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited
                                                                            Broadcast Views</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited Web
                                                                            Views</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited /
                                                                            Forever Use License – Royalty-Free</li>
                                                                    </ul>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn_blue_pricing btn"
                                                                    style="background:rgba(255,35,65,0);border-color:rgba(29,49,79,0.44);color:#1d314f;">Purchase</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-781fe88e"
                                        data-id="781fe88e" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7b241fa elementor-widget elementor-widget-mayosis-pricing-table"
                                                    data-id="7b241fa" data-element_type="widget"
                                                    data-widget_type="mayosis-pricing-table.default">
                                                    <div class="elementor-widget-container">

                                                        <!-- Element Code start -->

                                                        <div class="dm_pricing_table">
                                                            <div class="pricing_title"
                                                                style="background:rgba(198,201,204,0)">
                                                                <h2 style="color:#1d314f; text-align:center;"> Gold</h2>
                                                            </div>
                                                            <div class="lable_price_data">
                                                                <span class="label_pricing"
                                                                    style="background:#149632;">Popular Choice</span>
                                                            </div>
                                                            <div class="pricing_content">
                                                                <div class="pricing_table_title_box">
                                                                    <h3 class="price_tag_table table_pricing_amount">
                                                                        <sub class="pricing_currency">$</sub> 199<span
                                                                            class="pricing_timeframe">/mo</span></h3>
                                                                </div>

                                                                <div class="main_price_content"
                                                                    style="text-align:left;">
                                                                    <ul>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Download <b>8
                                                                                Videos</b> Per Month</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i><b>2160P
                                                                                4K+1080p</b> Quality</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Access To All
                                                                            Videos</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited
                                                                            Broadcast Views</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited Web
                                                                            Views</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited /
                                                                            Forever Use License – Royalty-Free</li>
                                                                    </ul>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn_blue_pricing btn"
                                                                    style="background:#ff2341;border-color:#ffffff;color:#ffffff;">Purchase</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-715756c3"
                                        data-id="715756c3" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1dc05e47 elementor-widget elementor-widget-mayosis-pricing-table"
                                                    data-id="1dc05e47" data-element_type="widget"
                                                    data-widget_type="mayosis-pricing-table.default">
                                                    <div class="elementor-widget-container">

                                                        <!-- Element Code start -->

                                                        <div class="dm_pricing_table">
                                                            <div class="pricing_title"
                                                                style="background:rgba(198,201,204,0)">
                                                                <h2 style="color:#1d314f; text-align:center;"> Diamond
                                                                </h2>
                                                            </div>
                                                            <div class="pricing_content">
                                                                <div class="pricing_table_title_box">
                                                                    <h3 class="price_tag_table table_pricing_amount">
                                                                        <sub class="pricing_currency">$</sub> 399<span
                                                                            class="pricing_timeframe">/mo</span></h3>
                                                                </div>

                                                                <div class="main_price_content"
                                                                    style="text-align:left;">
                                                                    <ul>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Download <b>17
                                                                                Videos</b> Per Month</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>2160P 4K+1080p
                                                                            Quality</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Access To All
                                                                            Videos</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i><b>Unlimited</b>
                                                                            Broadcasting</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited Web
                                                                            Views</li>
                                                                        <li><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i>Unlimited /
                                                                            Forever Use License – Royalty-Free</li>
                                                                    </ul>
                                                                </div>
                                                                <a href="#"
                                                                    class="btn_blue_pricing btn"
                                                                    style="background:rgba(255,35,65,0);border-color:rgba(29,49,79,0.44);color:#1d314f;">Purchase</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                            class="elementor-section elementor-top-section elementor-element elementor-element-6887b89d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6887b89d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3823d941"
                                        data-id="3823d941" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-409cc453 elementor-widget elementor-widget-mayosis-icon-box"
                                                    data-id="409cc453" data-element_type="widget"
                                                    data-widget_type="mayosis-icon-box.default">
                                                    <div class="elementor-widget-container">


                                                        <div class="mayosis-icon-box">
                                                            <div class="quality-box">
                                                                <div style="margin-top:-45px"
                                                                    class="add-align-box icon-with-bg">




                                                                    <i aria-hidden="true" class="fas fa-money-bill"></i>
                                                                </div>
                                                                <h4 class="mix-iconb-title">Secure Payment</h4>
                                                                <div class="icon-box-content">
                                                                    <div>We do not share your full credit card, debit
                                                                        card, or bank account number with Third parties.
                                                                        We only receives information that is required to
                                                                        complete and support your transaction. This
                                                                        information may include your name, email
                                                                        address, and Billing address.</div>


                                                                </div>



                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-616655f5"
                                        data-id="616655f5" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4c5f1288 elementor-widget elementor-widget-mayosis-icon-box"
                                                    data-id="4c5f1288" data-element_type="widget"
                                                    data-widget_type="mayosis-icon-box.default">
                                                    <div class="elementor-widget-container">


                                                        <div class="mayosis-icon-box">
                                                            <div class="quality-box">
                                                                <div style="margin-top:-45px"
                                                                    class="add-align-box icon-with-bg">




                                                                    <i aria-hidden="true" class="far fa-thumbs-up"></i>
                                                                </div>
                                                                <h4 class="mix-iconb-title">Unlimited Use</h4>
                                                                <div class="icon-box-content">
                                                                    <div>We like to keep things simple too. Our royalty
                                                                        free license is simple and gives you right to
                                                                        use licensed content in perpetuity across
                                                                        different projects.

                                                                    </div>


                                                                </div>



                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-607b4910"
                                        data-id="607b4910" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5489bcfd elementor-widget elementor-widget-mayosis-icon-box"
                                                    data-id="5489bcfd" data-element_type="widget"
                                                    data-widget_type="mayosis-icon-box.default">
                                                    <div class="elementor-widget-container">


                                                        <div class="mayosis-icon-box">
                                                            <div class="quality-box">
                                                                <div style="margin-top:-45px"
                                                                    class="add-align-box icon-with-bg">




                                                                    <i aria-hidden="true" class="far fa-angry"></i>
                                                                </div>
                                                                <h4 class="mix-iconb-title">Cancel Anytime</h4>
                                                                <div class="icon-box-content">
                                                                    <div>You are free to cancel your subscription plan
                                                                        at anytime with no additional charges. Once a
                                                                        subscription has been canceled, you still will
                                                                        have access to download content in your account
                                                                        through the end of your paid subscription
                                                                        period.</div>


                                                                </div>



                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                      <section data-particle_enable="false" data-particle-mobile-disabled="false"
class="elementor-section elementor-top-section elementor-element elementor-element-09c27ef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="09c27ef" data-element_type="section"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">

<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-683cbd4"
data-id="683cbd4" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-f391f25 elementor-widget elementor-widget-mayosis-theme-hero"
data-id="f391f25" data-element_type="widget"
data-widget_type="mayosis-theme-hero.default">
<div class="elementor-widget-container">

<!-- Element Code start -->

<div
class="col-md-12 col-xs-12 col-sm-12 mayosis_theme_hero_box">
<h2 class="hero-title">Thousands Of Happy Customers!
<span class="mhero_counter_main">
</span>
</h2>
<div class="hero-description">Here you will find high
quality resolution Royalty-Free Aerial Videos and many
more for any project.</div>

</div>
<div class="clearfix"></div>

<div class="swiper-container mySwiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-1.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-2.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-3.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-4.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-5.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="bg-white-slider card">
<div class="img-div mb-3">
<img class="dp-slider" src="https://swiperjs.com/demos/images/nature-6.jpg" alt="">
<img style="margin-top: -100px;" src="assets/Capture.PNG" width="60px" alt="">
</div>
<div class="detai-test">
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Quaerat modi deleniti voluptatum laborum ex sit ea cupiditate atque quasi veritatis.</span>
<h5 class="my-3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
<h6>Josph <a href="Links video production">link video produvtion</a></h6>
</div>
</div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
</div>
</div>





<div class="elementor-element elementor-element-452aefb elementor-widget elementor-widget-spacer"
data-id="452aefb" data-element_type="widget"
data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
                    </div>
                </div>
            </div>

        </div>



        <div class="clearfix"></div>




       @include('footer')



    </div>
    </div>
    <a id="back-to-top" href="#" class="back-to-top" role="button"><i class="zil zi-chevron-up"></i></a>
     <script src="js/jquery-3.3.1.min.js"></script>
    
<script>

    // YouTube Player API for header BG video

// Insert the <script> tag targeting the iframe API
const tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Get the video ID passed to the data-video attribute
const bgVideoID = document.querySelector('.js-background-video').getAttribute('data-video');

// Set the player options
const playerOptions = {
  // Autoplay + mute has to be activated (value = 1) if you want to autoplay it everywhere 
  // Chrome/Safari/Mobile
  autoplay: 1,
  mute: 1,
  autohide: 1, 
  modestbranding: 1, 
  rel: 0, 
  showinfo: 0, 
  controls: 0, 
  disablekb: 1, 
  enablejsapi: 1, 
  iv_load_policy: 3,
  // For looping video you have to have loop to 1
  // And playlist value equal to your currently playing video
  loop: 1,
  playlist: bgVideoID,
  
}

// Get the video overlay, to mask it when the video is loaded
const videoOverlay = document.querySelector('.js-video-overlay');

// This function creates an <iframe> (and YouTube player)
// after the API code downloads.
let ytPlayer;
function onYouTubeIframeAPIReady() {
  ytPlayer = new YT.Player('yt-player', {
    width: '1280',
    height: '720',
    videoId: bgVideoID,
    playerVars: playerOptions,
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

// The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();

  // Get the duration of the currently playing video
  const videoDuration = event.target.getDuration();
  
  // When the video is playing, compare the total duration
  // To the current passed time if it's below 2 and above 0,
  // Return to the first frame (0) of the video
  // This is needed to avoid the buffering at the end of the video
  // Which displays a black screen + the YouTube loader
  setInterval(function (){
    const videoCurrentTime = event.target.getCurrentTime();
    const timeDifference = videoDuration - videoCurrentTime;
    
    if (2 > timeDifference > 0) {
      event.target.seekTo(0);
    }
  }, 1000);
}

// When the player is ready and when the video starts playing
// The state changes to PLAYING and we can remove our overlay
// This is needed to mask the preloading
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING) {
    videoOverlay.classList.add('header__video-overlay--fadeOut');
  }
}
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
   var swiper = new Swiper(".mySwiper", {
     effect: "flip",
     grabCursor: true,
     pagination: {
       el: ".swiper-pagination",
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });


  $(".zxc").on("mouseover", function(event) {
    this.play();


  }).on('mouseout', function(event) {
        this.pause();
        this.currentTime = 0;

      });

 </script>

</body>
<!-- End Main Layout -->


<!-- Mirrored from africandronestock.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 May 2021 18:12:28 GMT -->

</html>
<!-- Page generated by LiteSpeed Cache 3.6.4 on 2021-05-16 15:20:29 -->
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/


Served from: africandronestock.com @ 2021-05-16 15:20:29 by W3 Total Cache
-->