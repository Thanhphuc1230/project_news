  @include('website.partials.head')
  @include('website.partials.header')
  <!--========== END #HEADER ==========--> 
  <!--========== BEGIN #MAIN-SECTION ==========-->

    <!-- ========== BEGIN PARALLAX ========== -->
    {{-- Breaking new --}}
    @include('website.partials.breaking_new')
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module dark">
      <div class="container">
        <div class="show-info">
          <h4 class="schedule-logo bg-1"><a href="tv-schedule.html" target="_blank">TV Schedule</a></h4>
          <div class="show-title">
            <h2>News Insight</h2>
            <h3>Hosted by Neal Bailey</h3>
          </div>
          <h4><a class="show-info-button bg-1" href="#"> Watch the final presidential debate, moderated by Neal Bailey, Tonight at 10 </a></h4>
          <div class="figure"><img src="{{ asset('website/img/schedule_figure.png') }} " alt=""></div>
        </div>
        <div class="schedule-squares"><span class="square2"></span><span class="square3"></span><span class="square4"></span> <span class="square5"></span><span class="square6"></span><span class="square7"></span><span class="square8"></span><span class="square9"></span><span class="square10"></span><span class="square11"></span></div>
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.local_new')
    <!--========== END .MODULE ==========--> 
    
> 

    <!--========== BEGIN .MODULE ==========-->
    @include('website.partials.boot_new')
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE  ==========-->
    
    <!--========== END .MODULE ==========--> 
    @include('website.partials.footer')