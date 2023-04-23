</section>
<!--========== END #MAIN-SECTION ==========--> 
<!--========== BEGIN #FOOTER==========-->
<footer id="footer"> 
  <!-- Begin .parallax -->
  <div id="parallax-section2">
    <div class="bg parallax2 overlay img-overlay2">
      <div class="container">
        <div class="row no-gutter">
          <div class="col-sm-6 col-md-3">
            <h3 class="title-left title-style03 underline03">About Us</h3>
            <p class="about-us">When you’re building a website, it’s tempting to get distracted by all the bells and whistles of the design process and forget all about creating compelling content.<br>
              But having awesome content on your website is crucial to making inbound marketing
              work for your business.<br>
              We know ... easier said than done. </p>
            <div class="site-logo"><a href="index.html"><img src="{{ asset('website/img/logo.png') }} " alt="Side Logo" />
              <h3>24h <span>News</span></h3>
              <p>Your 24h News Source</p>
              </a></div>
          </div>
          <div class="col-sm-6 col-md-3">
            <h3 class="title-left title-style03 underline03">News</h3>
            <div class="footer-post">
              <ul>
                  @for($i = 1; $i <=4 ; $i++)
                  <li>
                      <div class="item">
                      <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image01.jpg ') }}" alt=""></a></div>
                      <div class="item-content">
                          <p class="ellipsis"><a href="#">Deals do not have a trajectory like most other human interactions.</a></p>
                      </div>
                      </div>
                  </li>
                 @endfor
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <h3 class="title-left title-style03 underline03">Watch+Listen</h3>
            <div class="footer-post">
              <ul>
                  @for($i = 1; $i <=4 ; $i++)
                <li>
                  <div class="item">
                    <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="{{ asset('website/img/art-entertainment_370x185-image04.jpg ') }}" alt=""></a></div>
                    <div class="item-content">
                      <p class="ellipsis"><a href="#">Music may help you think better, analyze matters faster, and work more efficiently.</a></p>
                    </div>
                  </div>
                </li>
                @endfor
              
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <h3 class="title-left title-style03 underline03">Tags</h3>
            <div class="tagcloud"><a href="#">News</a><a href="#">Sports</a><a href="#">Schedule</a><a href="#">Health</a><a href="#">Business</a><a href="#">Travel</a><a href="#">Autos</a><a href="#">Deals</a><a href="#">Corporate</a><a href="#">Markets</a><a href="#">Design</a><a href="#">Food</a><a href="#">Broadcast News</a><a href="#">Politics</a><a href="#">Promo</a><a href="#">Entertainment</a><a href="#">Primetime News</a><a href="#">Advertising</a><a href="#">Android</a><a href="#">Live Feed</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End .parallax --> 
</footer>
<!--========== END #FOOTER==========--> 
<!--========== BEGIN #COPYRIGHTS==========-->
<div id="copyrights"> 
  <!-- Begin .container -->
  <div class="container"> 
    <!-- Begin .copyright -->
    <div class="copyright"> &copy; 2016, Copyrights 24hNews Theme. All Rights Reserved </div>
    <!-- End .copyright --> 
    <!--  Begin .footer-social-icons -->
    <div class="footer-social-icons">
      <ul>
        <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
        <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> </li>
        <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
        <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
      </ul>
    </div>
    <!--  End .footer-social-icons --> 
  </div>
  <!-- End .container --> 
</div>
<!--========== END #COPYRIGHTS==========--> 
</div>

<!--========== END #WRAPPER ==========--> 

<!-- External JavaScripts --> 
<script src="{{ asset('website/js/jquery-3.1.1.min.js ') }} "></script> 
<script src="{{ asset('website/js/bootstrap.min.js ') }} "></script> 
<script src="{{ asset('website/js/jquery-ui.min.js ') }} "></script> 
<!-- JavaScripts --> 
<script src="{{ asset('website/js/functions.js ') }} "></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="collapse"]').click(function(){
        $('.sidenav').toggleClass('show');
    });
});
</script>
</body>

<!-- Mirrored from 24hnews.via-theme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2023 17:09:41 GMT -->
</html>