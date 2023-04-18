@include('website.partials.head')

@include('website.partials.page_loader')

<!--========== BEGIN #WRAPPER ==========-->

  <!--========== BEGIN #HEADER ==========-->
    @include('website.partials.header')
  <!--========== END #HEADER ==========--> 
  <!--========== BEGIN #MAIN-SECTION ==========-->
  <section id="main-section"> 
    <!-- ========== BEGIN PARALLAX ========== -->
    @include('website.partials.parallax_section')
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.parallax_section_2')
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module"> 
      <!--========== BEGIN .CONTAINER ==========-->
      <div class="container"> 
        <!--========== BEGIN .ROW ==========-->
        <div class="row no-gutter"> 
          <!-- Begin .full-block-three-columns -->
          <div class="full-block-three-columns"> 
            <!-- Begin .container-full-->
            <div class="container-full bottom-text full-photo">
              <div class="entry-media">
                <div class="image" style="display: block; background-image: url(img/index_875x656.jpg);"></div>
              </div>
              <div class="content">
                <h2><a href="#">Florida International Air Show</a></h2>
                <h4>One of the top 15 air show events and festivals in the USA, Florida International Air Show has been a popular event for nearly 40 years.</h4>
              </div>
            </div>
            <!-- End .container-full--> 
          </div>
          <!-- End .full-block-three-columns --> 
          <!-- Begin .full-block-three-columns -->
          <div class="full-block-three-columns"> 
            <!-- Begin .container-half -->
            <div class="container-half">
              <div class="entry-media">
                <div class="image" style="background-image: url(img/index_800x600.jpg);">
                <span><a class="label-1" href="#">World News</a></span> <a href="video.html"><span class="play-icon"></span></a></div>
                </div>
              <div class="content">
                <h4><a href="#">People have demonstrated against the policies...</a></h4>
              </div>
            </div>
            <!-- End .container- entry- --> 
            <!-- Begin .entry-post -->
            <div class="entry-post"> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image01.jpg') }}" alt=""></a></div>
                <div class="item-content">
                  <div class="entry-meta bg-1">News</div>
                  <p class="ellipsis"><a href="#">Police are hunting a group of men believed to be responsible for...</a></p>
                </div>
              </div>
              <!-- End .item--> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image02.jpg') }}" alt=""></a></div>
                <div class="item-content">
                  <div class="entry-meta bg-2">Business</div>
                  <p class="ellipsis"><a href="#">The sale creates further uncertainty for British steelworkers...</a></p>
                </div>
              </div>
              <!-- End .item--> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image03.jpg') }}" alt=""></a></div>
                <div class="item-content">
                  <div class="entry-meta bg-4">Politics</div>
                  <p class="ellipsis"><a href="#">Do referendums lead to better outcomes?</a></p>
                </div>
              </div>
              <!-- End .item--> 
            </div>
            <!-- End .entry-post --> 
          </div>
          <!-- End .full-block-three-columns --> 
          <!-- Begin .full-block-three-columns -->
          <div class="full-block-three-columns">
            <div class="sidebar-add-place"> <a href="#" target="_blank"><img class="img-responsive" src="{{ asset('website/img/banner_300x600.jpg') }}" alt=""></a> </div>
          </div>
          <!-- End .full-block-three-columns --> 
        </div>
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!-- Begin #parallax-section1 -->
    <div id="parallax-section1">
      <div class="image3 img-overlay1">
        <div class="container">
          <div class="caption text-center">
            <h2 class="color-white weight-300 small-caption">We introduce you our <strong>24h News Team!</strong> Get more information about us here!</h2>
            <a href="about-us.html" target="_blank" class="btn btn-default">About Us</a> </div>
        </div>
      </div>
    </div>
    <!-- End #parallax-section1 --> 
    <!-- Begin .add-place -->
    <div class="add-place"> <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank"><img src="{{ asset('website/img/banner_820x100.jpg') }}" alt=""></a> </div>
    <!-- End .add-place --> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
      <h2 class="title-style05 style-02">more headlines in our <span><a href="#">item sections</a></span></h2>
      <!-- Begin .title-style05-bg -->
      <div class="center-title"> <span class="title-line-left"></span>
        <h4 class="title-style05 style-01">latest # news</h4>
        <span class="title-line-right"></span> </div>
      <!-- End .title-style05-bg --> 
      <!--========== BEGIN .CONTAINER ==========-->
      <div class="container"> 
        <!--========== BEGIN BIG-GALLERY==========--> 
        <!-- Begin .carousel-title -->
        <h3 class="carousel-title-gray">Home Gallery</h3>
        <!-- End .carousel-title --> 
        <!-- Begin .gallery-slider owl-carousel -->
        <div id="big-gallery-slider-3" class="owl-carousel">
          <div class="big-gallery"> <img src="{{ asset('website/img/index_slider-large-image01.jpg') }}" alt=""> <a href="video.html"><span class="play-icon"></span></a> </div>
          <div class="big-gallery"><img src="{{ asset('website/img/index_slider-large-image02.jpg') }}" alt=""> <a href="video.html"><span class="play-icon"></span></a> </div>
          <div class="big-gallery"> <img src="{{ asset('website/img/index_slider-large-image03.jpg') }}" alt=""><a href="video.html"><span class="play-icon"></span></a> </div>
          <div class="big-gallery"><img src="{{ asset('website/img/index_slider-large-image04.jpg') }}" alt=""><a href="video.html"><span class="play-icon"></span></a> </div>
          <div class="big-gallery"> <img src="{{ asset('website/img/index_slider-large-image05.jpg') }}" alt=""><a href="video.html"><span class="play-icon"></span></a> </div>
          <div class="big-gallery"> <img src="{{ asset('website/img/index_slider-large-image06.jpg') }}" alt=""><a href="video.html"><span class="play-icon"></span></a> </div>
        </div>
        <!-- End .gallery-slider owl-carousel --> 
        <!--========== END BIG-GALLERY==========--> 
      </div>
      <!--========== BEGIN .CONTAINER ==========--> 
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.section_module_highlight') 
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
     @include('website.partials.video_bg_dark')  
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.section_module_highlight_1')   
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.section_module')
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE  ==========-->
    @include('website.partials.section_module_highlight_2')   
    <!--========== END .MODULE ==========--> 
  </section>
  <!--========== END #MAIN-SECTION ==========--> 
  <!--========== BEGIN #FOOTER==========-->
  @include('website.partials.footer')