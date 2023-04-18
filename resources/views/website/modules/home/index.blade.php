@include('website.partials.head')

@include('website.partials.page_loader')


@include('website.partials.header')
<section id="main-section"> 
    <!-- ========== BEGIN PARALLAX ========== -->
    <div id="parallax-section">
      <div class="image2 img-overlay1" style="background-position: 100% 201px;">
        <div class="container">
          <div class="caption text-center">
            <div class="color-white text-center weight-300 medium-caption" style="font-size: 30px;">Get the latest breaking news and top news headlines</div>
            <div class="color-white text-center weight-800 large-caption" style="font-size: 60px;">News headlines on 24h News Channel</div>
            <div class="color-white text-center weight-400 medium-caption" style="font-size: 30px;">No one hurt in North Side blaze</div>
            <h5>A fire that broke out Tuesday afternoon in the Park West, forcing residents to evacuate, is under control and no one was hurt.</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== END PARALLAX ========== --> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
      <div class="container"> 
        <!--========== BEGIN .BREAKING-NEWS ==========--> 
        <!-- Begin #outer -->
        <div class="outer">
          <div class="breaking-ribbon">
            <h5>Breaking News</h5>
          </div>
          <!-- Begin .newsticker -->
          <div class="newsticker" style="position: relative; height: 40px; overflow: hidden;">
            <ul style="margin: 0px; position: absolute; top: 0px;">
              
              
              
              <li style="margin: 0px;">
                <h4><span class="category">Health:</span><a href="#"> Evanston doctor gives up license after cancer drug probe.</a></h4>
              </li>
              <li style="margin: 0px;">
                <h4><span class="category">World:</span><a href="#"> North Coast fest organizers plan to decrease noise, increase security.</a></h4>
              </li>
              <li style="margin: 0px;">
                <h4><span class="category">Finance:</span><a href="#"> Credit rating hit, another big tax hike possible as clock ticks on pension overhaul.</a></h4>
              </li>
            <li style="margin: 0px;">
                <h4><span class="category">News:</span><a href="#"> Extra! Extra! Rethinking the 24 h News Breaking News Experience.</a></h4>
              </li><li style="margin: 0px;">
                <h4><span class="category">Travel:</span><a href="#"> Man seriously hurt after jumping from upper level terminal while fleeing police.</a></h4>
              </li><li style="margin: 0px;">
                <h4><span class="category">Politics:</span><a href="#"> We see momentous or informative events that are relevant to a wide audience.</a></h4>
              </li></ul>
            <div class="navi" style="margin: 0px;">
              <button class="up" style="margin: 0px;"><i class="fa fa-caret-left"></i></button>
              <button class="down" style="margin: 0px;"><i class="fa fa-caret-right"></i></button>
            </div>
          </div>
          <!-- End .newsticker --> 
        </div>
        <!-- End #outer --> 
        <!--========== END .BREAKING-NEWS ==========--> 
        <!--========== BEGIN #NEWS-SLIDER ==========-->
        <div id="news-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
          <div class="owl-wrapper-outer autoHeight" style="height: 442.688px;"><div class="owl-wrapper" style="width: 7488px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px); transform-origin: 624px center; perspective-origin: 624px center;"><div class="owl-item" style="width: 1248px;"><div class="news-slide">
            <div class="news-slider-layer second"> <a href="news.html" target="_blank">
              <div class="content"> <span class="category-tag bg-1">Breaking News</span>
                <p>The police responded to a protest in downtown</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image01.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer first"> <a href="politics.html" target="_blank">
              <div class="content"> <span class="category-tag bg-6">Politics</span>
                <p>The EU refugee and migration policy is not working</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image02.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer third"> <a href="soccer.html" target="_blank">
              <div class="content"> <span class="category-tag bg-4">Football News</span>
                <p>Live match reports and latest scores</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image03.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer fourth"> <a href="health.html" target="_blank">
              <div class="content"> <span class="category-tag bg-2">Health</span>
                <p>Food &amp; Nutrition | Healthy Dinner Recipes | Healthy Desserts</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image04.jpg') }} " alt=""> </a> </div>
          </div></div><div class="owl-item" style="width: 1248px;"><div class="news-slide">
            <div class="news-slider-layer second"> <a href="news.html" target="_blank">
              <div class="content"> <span class="category-tag bg-1">Around the World</span>
                <p>Keep up to date with the latest climbing news</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image05.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer first"> <a href="politics.html" target="_blank">
              <div class="content"> <span class="category-tag bg-6">Competitions</span>
                <p>Stay up-to-date with the latest sailboat racing news and results</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image06.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer third"> <a href="sport.html" target="_blank">
              <div class="content"> <span class="category-tag bg-4">Travel</span>
                <p>Live rail disruptions and travel news</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image07.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer fourth"> <a href="travel.html" target="_blank">
              <div class="content"> <span class="category-tag bg-1">Breaking News</span>
                <p>Private helicopter pilot performs jaw-dropping rescue of stranded tourist</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image08.jpg') }} " alt=""> </a> </div>
          </div></div><div class="owl-item" style="width: 1248px;"><div class="news-slide">
            <div class="news-slider-layer second"> <a href="tech-science.html" target="_blank">
              <div class="content"> <span class="category-tag bg-4">Latest News</span>
                <p>Nationally, pools are experiencing a shortage of lifeguards</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image09.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer first"> <a href="lifestyle.html" target="_blank">
              <div class="content"> <span class="category-tag bg-6">Around the world</span>
                <p>Latest firefighting news and headlines from around the world</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image10.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer third"> <a href="news.html" target="_blank">
              <div class="content"> <span class="category-tag bg-1">Headlines</span>
                <p>Get breaking news for Black Friday 2016 ads, sales, and more updates!</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image11.jpg') }} " alt=""> </a> </div>
            <div class="news-slider-layer fourth"> <a href="food-drinks.html" target="_blank">
              <div class="content"> <span class="category-tag bg-2">Environment</span>
                <p>The human race have never been under such pressure from their surrounding environment.</p>
              </div>
              <img src="{{ asset('website/img/news_slider-image12.jpg') }} " alt=""> </a> </div>
          </div></div></div></div>
          
          
        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa-angle-left"></i></div><div class="owl-next"><i class="fa-angle-right"></i></div></div></div></div>
        <!--========== END #NEWS-SLIDER ==========--> 
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
      <div class="container">
        <div class="module-title">
          <h3 class="title"><span class="bg-11">Latest</span></h3>
          <h3 class="subtitle">News</h3>
        </div>
        <!--========== BEGIN .ROW ==========-->
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-6 ==========-->
          <div class="col-sm-6 col-md-6"> 
            <!--========== BEGIN .NEWS ==========-->
            <div class="news"> 
              <!-- Begin .item -->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image01.jpg') }} " alt=""></a><span><a href="politics.html" target="_blank" class="label-1">Politics</a></span></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3><a href="politics.html"><strong>Politics</strong> News</a></h3>
                  </div>
                  <p><a href="#" target="_blank" class="external-link"><strong>Interviews</strong> with dozens of women who have worked for presidential candidate or interacted with him socially reveal a pattern...</a></p>
                  <div> <a href="politics.html" target="_blank"><span class="read-more">Politics</span></a> </div>
                </div>
              </div>
              <!-- End .item --> 
              <!-- Begin .item -->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image02.jpg') }} " alt=""></a><span><a href="business.html" target="_blank" class="label-3">Business</a></span></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3><a href="business.html"><strong>Business</strong> News</a></h3>
                  </div>
                  <p><a href="#" target="_blank" class="external-link"><strong>Overall retail</strong> sales grew by 1.3% last month compared with Dec and car sales climbed by 3.2%, a sharp reversal from the 3.2%.</a></p>
                  <div> <a href="business.html" target="_blank"><span class="read-more">Business</span></a> </div>
                </div>
              </div>
              <!-- End .item --> 
            </div>
            <!--========== END .NEWS ==========--> 
          </div>
          <!--========== END .COL-MD-6 ==========--> 
          <!--========== BEGIN .COL-MD-6 ==========-->
          <div class="col-sm-6 col-md-6"> 
            <!--========== BEGIN .NEWS ==========-->
            <div class="news"> 
              <!-- Begin .item -->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image11.jpg') }} " alt=""></a><span><a href="lifestyle.html" target="_blank" class="label-9">Lifestyle</a></span></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3><a href="lifestyle.html"><strong>Lifestyle</strong> News</a></h3>
                  </div>
                  <p><a href="#" target="_blank" class="external-link"><strong>Lifestyle section</strong> entitled or, sometimes, Life &amp; Style covers a variety of topics, included section: Fashion | Food | Health...</a></p>
                  <div> <a href="lifestyle.html" target="_blank"><span class="read-more">Lifestyle</span></a> </div>
                </div>
              </div>
              <!-- End .item --> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image04.jpg') }} " alt=""></a><span><a href="tech-science.html" target="_blank" class="label-5">Tech-Science</a></span></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3><a href="tech-science.html"><strong>Tech-Science</strong> News</a></h3>
                  </div>
                  <p><a href="#" target="_blank" class="external-link"><strong>There appear</strong> to be more planets in space than stars, and could be 10 billion of them in our galaxy that are suitable for life...</a></p>
                  <div> <a href="tech-science.html" target="_blank"><span class="read-more">Tech-Science</span></a> </div>
                </div>
              </div>
              <!-- End .item--> 
            </div>
            <!--========== END .NEWS==========--> 
          </div>
          <!--========== END .COL-MD-6==========--> 
        </div>
        <!--========== END .ROW ==========--> 
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
      <div class="container">
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-8 ==========-->
          <div class="col-md-8">
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-4">Sport</span></h3>
                <h3 class="subtitle">News</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image05.jpg') }} " alt=""></a></div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"> <strong>24h Sport</strong> launches a newsletter that gives you a slightly different take on the world of sport...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Rather than repeat the big headlines, we will dig deeper to give you the latest news</a></p>
                    <div> <a href="24-news-store.html" target="_blank"><span class="read-more">Network</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image06.jpg') }} " alt=""></a></div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>M. A. was a fighter all his life,</strong> both in and out of the ring. He initially found fame as a champion boxer, celebrated for his unorthodox ring style and witty talk...</a></p>
                    <div> <a href="sport.html" target="_blank"><span class="read-more">Sport</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image07.jpg') }} " alt=""></a></div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Soccer news</strong>, scores, stats, and features from the world's leading soccer website...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Also featuring soccer tickets, soccer betting, soccer games, and transfer news...</a></p>
                    <div> <a href="soccer.html" target="_blank"><span class="read-more">Soccer</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="module-title">
                <h3 class="title"><span class="bg-11">Autos</span></h3>
                <h3 class="subtitle">News</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========--> 
            </div>
            <div class="container">
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image08.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Eight automakers</strong> are recalling more than 12 million vehicles in the U.S. to replace potentially dangerous  air bag inflators...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Research and compare cars, find local dealers, calculate loan...</a></p>
                    <div><a href="autos.html" target="_blank"><span class="read-more">Autos</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image09.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>The industry</strong> came out with a luxury concept in 2016 that features a storage drawer and built-in bottle-holder...</a></p>
                    <p><a href="#" target="_blank" class="external-link">On every Sunday, we feature a cool or modern or creative interior/product design...</a></p>
                    <div><a href="deals.html" target="_blank"><span class="read-more">Deals</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image10.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"> <strong>Over-fleeting</strong> and demand anomalies put unusual pressure on pricing in the first few months of 2016, but strong summer demand is turning...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Financial Report - Auto News...</a></p>
                    <div><a href="environment.html" target="_blank"><span class="read-more">Environment</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
          </div>
          <!--========== END .COL-MD-8 ==========--> 
          <!--========== BEGIN .COL-MD-4 ==========-->
          <div class="col-md-4">
            <div class="container"> 
              <!-- Begin .block-title-2 -->
              <div class="block-title-2">
                <h3><strong>Watch</strong> Live 24/7</h3>
              </div>
              <!-- End .block-title-2 --> 
              <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->
              <div class="sidebar-newsfeed"> 
                <!-- Begin .newsfeed -->
                <div class="newsfeed-6" style="position: relative; height: 840px; overflow: hidden;">
                  <ul style="margin: 0px; position: absolute; top: 0px;">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image08.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>02</h3>
                          <p class="ellipsis"><a href="#">East Kilbride: Manager Billy O. to leave post on 20 Dec.</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image09.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>03</h3>
                          <p class="ellipsis"><a href="#">Nature's way of saying older women aren't attractive?</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image10.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>04</h3>
                          <p class="ellipsis"><a href="#">Last post for stamp collectors? Stamps valued in catalogues.</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image11.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>05</h3>
                          <p class="ellipsis"><a href="#">The great age of the Post Office is past, here and indeed all over the ...</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image12.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>06</h3>
                          <p class="ellipsis"><a href="#">World's biggest cruise ship is 'a construction site'.</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image13.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>07</h3>
                          <p class="ellipsis"><a href="#">Zika: Experts call for Rio Olympic Games move over virus</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image14.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>08</h3>
                          <p class="ellipsis"><a href="#">Why do I need to sign in with my TV service provider information? </a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image15.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>09</h3>
                          <p class="ellipsis"><a href="#">Your TV subscription is your key to watching TV online. </a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image16.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>10</h3>
                          <p class="ellipsis"><a href="#">Please contact your TV service provider for information.</a></p>
                        </div>
                      </div>
                    </li><li style="margin: 0px;">
                      <div class="item">
                        <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image07.jpg') }} " alt=""></a></div>
                        <div class="item-content">
                          <h3>01</h3>
                          <p class="ellipsis"><a href="#">Survivor is world's oldest man - Guinness World Records.</a></p>
                        </div>
                      </div>
                    </li></ul>
                </div>
                <!-- End .newsfeed --> 
              </div>
              <!--========== END .SIDEBAR-NEWSFEED ==========--> 
              <!--========== BEGIN #SIDEBAR-NEWSLETTER ==========-->
              <div id="sidebar-newsletter"> 
                <!-- Begin .title-style01 -->
                <div class="title-style01">
                  <h3><strong>Newsletter</strong></h3>
                </div>
                <!-- End .title-style01 --> 
                <!-- Begin .sidebar-newsletter-form -->
                <div class="sidebar-newsletter-form">
                  <form class="form-horizontal" action="http://24hnews.via-theme.com/include/subscribe.php" id="subscribeForm" method="POST">
                    <div class="input-group">
                      <input title="Newsletter" class="form-control" name="email" type="email" id="address" placeholder="Enter Your Email Address" data-validate="validate(required, email)" required="">
                      <span class="input-group-btn">
                      <button type="submit" class="btn btn-success">Subscribe</button>
                      </span> </div>
                  </form>
                  <span id="result" class="alertMsg"></span> </div>
                <!-- End .sidebar-newsletter-form --> 
              </div>
              <!--========== END #SIDEBAR-NEWSLETTER ==========--> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
   
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
      <div class="container">
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-8 ==========-->
          <div class="col-md-8">
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-5">Art &amp; Entertainment</span></h3>
                <h3 class="subtitle">News</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image11.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>In art,</strong> technology changes but core skills remain the same. This is true in today’s entertainment field...</a> </p>
                    <p><a href="#" target="_blank" class="external-link">Get photography news, camera reviews and buying guides...</a> </p>
                    <div><a href="art-entertainment.html" target="_blank"><span class="read-more">Art &amp; Entertainment</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image12.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Entertainment Programs</strong> offer a balanced education that starts with traditional  skills and ends with the application...</a> </p>
                    <p><a href="#" target="_blank" class="external-link">Music magazine with mixes, interviews and reviews...</a> </p>
                    <div><a href="music-opera.html" target="_blank"><span class="read-more">Music &amp; Opera</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image13.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Two museums in Paris</strong> have been closed at least until Monday to protect exhibits after the River Seine was predicted...</a> </p>
                    <p><a href="#" target="_blank" class="external-link">Browse our complete collection of articles and commentary...</a> </p>
                    <div><a href="art-design.html" target="_blank"><span class="read-more">Art &amp; Design</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-7">Travel</span></h3>
                <h3 class="subtitle">News</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image14.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Best places</strong> to visit in Ibiza: readers' travel tips...</a></p>
                    <p><a href="#" target="_blank" class="external-link">If you stray from the superclubs, the Balearic party isle has a wealth of coves, beaches and live music bars to discover...</a></p>
                    <div><a href="travel.html" target="_blank"><span class="read-more">Travel</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image15.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>The 50 best</strong> highlands, shallow and beaches in the world...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Whether you’re seeking solitude or a party, check this article to find the perfect beach...</a></p>
                    <div><a href="destinations.html" target="_blank"><span class="read-more">Destinations</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image16.jpg') }} " alt=""></a> </div>
                  <div class="entry-content">
                    <h4><a href="#"> <span class="day">Dec 14, 2016</span></a></h4>
                    <p><a href="#" target="_blank" class="external-link"><strong>Holiday guide</strong> to Costa Rica: beaches and adventures...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Costa Rica is perhaps the best in Latin America for a tropical adventure, thanks to its misty jungles and incredible wildlife...</a></p>
                    <div><a href="types-of-trip.html" target="_blank"><span class="read-more">Types Of Trip</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
          </div>
          <!--========== END .COL-MD-8==========--> 
          <!--========== BEGIN .COL-MD-4 ==========-->
          <div class="col-md-4">
            <div class="container"> 
              <!-- Begin .title-style02 -->
              <div class="title-style02">
                <h3><a href="#">Recent Posts</a></h3>
              </div>
              <!-- End .title-style02 --> 
              <!--========== BEGIN .SIDEBAR-SCROLL ==========-->
              <div class="sidebar-scroll mCustomScrollbar _mCS_1" style="height: 876px; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr"> 
                <!-- Begin .scroll-item -->
                <div class="item">
                  <div class="item-image-full"><a class="img-link" href="#"><img class="img-responsive img-full mCS_img_loaded" src="{{ asset('website/img/index_800x400-image02.jpg') }} " alt=""></a></div>
                </div>
                <div class="item">
                  <div class="item-content-1">
                    <h3>Tens of thousands of people have demonstrated against the governing laws.</h3>
                  </div>
                </div>
                
                <!-- End .scroll-item -->
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full mCS_img_loaded" src="{{ asset('website/img/index_800x400-image40.jpg') }} " alt=""></a></div>
                    <div class="item-content">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 1 min ago</span> <br>
                        The River Seine is at its highest level for more than 30 years. </p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 7 min ago</span> <br>
                        Spammers often broadcast sites with popular hashtags even if the social media has nothing to do with them.</p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><a href="#"> <span class="day"> 3 min ago</span> <br>
                        The M. players ran through a banner which read: “You don’t need to wear red &amp; blue...</a></p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full mCS_img_loaded" src="{{ asset('website/img/index_800x400-image41.jpg') }} " alt=""></a></div>
                    <div class="item-content">
                      <p><a href="#"> <span class="day"> 4 min ago</span> <br>
                        The flat brown spots show up on some parts of the skin...</a></p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full mCS_img_loaded" src="{{ asset('website/img/index_800x400-image42.jpg') }} " alt=""></a></div>
                    <div class="item-content">
                      <p><a href="#"> <span class="day">5 min ago</span> <br>
                        The natural cycles alone aren’t sufficient to explain...</a></p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 6 min ago</span> <br>
                        L.Counsel is demanding stop its policy of censoring student religious speech. </p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 2 min ago</span> <br>
                        First-time buyers are being warned they could pay more if they sign up for 40-year mortgages. </p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day">8 min ago</span> <br>
                        The River Seine is at its highest level for more than 30 years. </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-image-full"><a class="img-link" href="#"><img class="img-responsive img-full mCS_img_loaded" src="{{ asset('website/img/index_800x400-image04.jpg') }} " alt=""></a></div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 9 min ago</span> <br>
                        Magazines are publications, that are printed or electronically published online magazines. </p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 10 min ago</span> <br>
                        First-time buyers are being warned they could pay more if they sign up for 40-year mortgages </p>
                    </div>
                  </div>
                </div>
                <div class="scroll-item">
                  <div class="item">
                    <div class="item-content-1">
                      <p><i class="fa fa-clock-o"></i> <span class="day"> 11 min ago</span> <br>
                        New research provides new evidence that natural cycles alone aren’t sufficient to explain the global atmospheric warming. </p>
                    </div>
                  </div>
                </div>
                <!-- End .scroll-item --> 
              </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 489px; max-height: 864px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
              <!--========== END .SIDEBAR-SCROLL ==========--> 
            </div>
          </div>
          <!--========== END .COL-MD-4 ==========--> 
        </div>
      </div>
    </section>
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
          <h4><a class="show-info-button bg-13" href="#"> Watch the final presidential debate, moderated by Neal Bailey, Tonight at 10 </a></h4>
          <div class="figure"><img src="{{ asset('website/img/schedule_figure.png') }} " alt=""></div>
        </div>
        <div class="schedule-squares"><span class="square2"></span><span class="square3"></span><span class="square4"></span> <span class="square5"></span><span class="square6"></span><span class="square7"></span><span class="square8"></span><span class="square9"></span><span class="square10"></span><span class="square11"></span></div>
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
      <div class="container">
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-8 ==========-->
          <div class="col-md-8">
            <div class="module-title">
              <h3 class="title"><span class="bg-11">That future</span></h3>
              <h3 class="subtitle">is fast becoming a reality</h3>
            </div>
            <!--========== BEGIN .NEWS ==========-->
            <div class="news"> 
              <!-- Begin .entry-block-full -->
              <div class="entry-block-full">
                <div class="image-full"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_944x455.jpg') }} " alt=""></a></div>
                <div class="content">
                  <div class="title-left title-style04 underline04">
                    <h3><a href="#"><strong>Flying robots</strong> patrolled the skies</a></h3>
                  </div>
                  <p><strong> Flying robots patrolled the skies</strong> while land-based vehicles with minds of their own trundled along on the ground below.</p>
                  <p><strong>But thankfully,</strong> these drones could soon be an indispensable component of our lives: building skyscrapers using 3D printing technology; transporting cargo across town; crop spraying; or helping find people trapped in buildings.</p>
                </div>
                <!--  End .content --> 
              </div>
              <!--  End .entry-block-full --> 
            </div>
            <!--========== END.NEWS ==========--> 
          </div>
          <!--========== END .COL-MD-8 ==========--> 
          <!--========== BEGIN .COL-MD-4 ==========-->
          <div class="col-md-4"> 
            <!--========== BEGIN .TV SCHEDULE ==========-->
            <div class="sidebar-schedule"> 
              <!-- Begin .block-title-2 -->
              <div class="block-title-2">
                <h3><strong>TV</strong> Schedule</h3>
              </div>
              <!-- End .block-title-2 -->
              <div id="sidebar-schedule-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;"> 
                <!-- Begin .schedule-slide -->
                <div class="owl-wrapper-outer autoHeight" style="height: 337px;"><div class="owl-wrapper owl-origin" style="width: 2400px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(-400px, 0px, 0px); transform-origin: 600px center; perspective-origin: 600px center;"><div class="owl-item owl-fade-out" style="width: 400px; position: relative; left: 400px;"><div class="sidebar-schedule-slide">
                  <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                    <div class="content">
                      <h3 class="hour-tag">18:00</h3>
                      <h4 class="sidebar-show-title bg-1">Around the World</h4>
                      <p>New global rules on firms' tax disclosure urged by economists</p>
                    </div>
                    <img src="{{ asset('website/img/sidebar-schedule_slider-image01.jpg') }} " alt=""> </a> </div>
                </div></div><div class="owl-item owl-fade-in" style="width: 400px;"><div class="sidebar-schedule-slide">
                  <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                    <div class="content">
                      <h3 class="hour-tag">18:45</h3>
                      <h4 class="sidebar-show-title bg-1">Sport Headlines</h4>
                      <p>All the latest sports news from around the world.</p>
                    </div>
                    <img src="{{ asset('website/img/sidebar-schedule_slider-image02.jpg') }} " alt=""> </a> </div>
                </div></div><div class="owl-item" style="width: 400px;"><div class="sidebar-schedule-slide">
                  <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                    <div class="content">
                      <h3 class="hour-tag">22:00</h3>
                      <h4 class="sidebar-show-title bg-1">Happening Now</h4>
                      <p>Kerry Thomas will take you to news when and where it happens.</p>
                    </div>
                    <img src="{{ asset('website/img/sidebar-schedule_slider-image03.jpg') }} " alt=""> </a> </div>
                </div></div></div></div>
                <!-- End .schedule-slide --> 
                <!-- Begin .schedule-slide -->
                
                <!-- End .schedule-slide --> 
                <!-- Begin .schedule-slide -->
                
                <!-- End .schedule-slide --> 
              <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa-angle-left"></i></div><div class="owl-next"><i class="fa-angle-right"></i></div></div></div></div>
            </div>
            <!--========== END .TV SCHEDULE ==========--> 
            <!--========== BEGIN #WEATHER ==========-->
            <div id="weather" class="sidebar-weather"> 
              <!-- Begin .block-title-1 -->
              <div class="block-title-1">
                <div class="weather-city-text"></div>
              </div>
              <!-- End .block-title-1 -->
              <div class="weather-card">
                <div class="temp"> <i class="weather-icon wi"></i>
                  <div class="temperature"></div>
                  <button class="btn btn-primary"> <span class="switch">F</span> </button>
                </div>
                <div id="description">
                  <div id="type" class="desc-text"> </div>
                  <i class="wi wi-humidity"></i>
                  <div id="humidity" class="desc-text"> </div>
                  <i class="wi wi-strong-wind"></i>
                  <div id="wind" class="desc-text"> </div>
                </div>
              </div>
            </div>
            <!--========== END  #WEATHER ==========--> 
          </div>
          <!--========== END .COL-MD-4 ==========--> 
        </div>
        <!--========== BEGIN 24H NEWS ON-AIR ==========--> 
        <!-- Begin .outer -->
        <div class="outer">
          <div class="breaking-ribbon">
            <h5>24h News On-Air</h5>
          </div>
          <!-- Begin .newsticker -->
          <div class="news-on-air">
            <ul>
              <li>
                <h4><i class="fa fa-video-camera" aria-hidden="true"></i> <a href="#">Watch 24h News Streaming Live Online</a></h4>
              </li>
            </ul>
            <div class="navi">
              <button class="up"><i class="fa fa-caret-left"></i></button>
              <button class="down"><i class="fa fa-caret-right"></i></button>
            </div>
          </div>
          <!-- End .outer --> 
        </div>
        <!--========== END 24H NEWS ON-AIR ==========--> 
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
      <div class="container">
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-8 ==========-->
          <div class="col-md-8">
            <div class="module-title">
              <h3 class="title"><span class="bg-1">Tech-Science</span></h3>
              <h3 class="subtitle">and Gadgets</h3>
            </div>
            <!--========== BEGIN .NEWS ==========-->
            <div class="news"> 
              <!-- Begin .item -->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image17.jpg') }} " alt=""></a></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3> <a href="#"><strong>Best</strong> News Gadgets</a></h3>
                  </div>
                  <p><a href="#"> <span class="day">Dec 14, 2016</span></a></p>
                  <p><a href="#" target="_blank" class="external-link"><strong>A new interactive dog camera</strong> that allows you to communicate and share treats remotely with your pup...</a></p>
                  <p><a href="#" target="_blank" class="external-link"><strong>Whether you are on the go,</strong> in your office or at home, new technology gadgets can introduce great time-saving advantages...</a></p>
                </div>
              </div>
              <!-- End .item --> 
              <!-- Begin .item -->
              <div class="item">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image18.jpg') }} " alt=""></a></div>
                <div class="item-content">
                  <div class="title-left title-style04 underline04">
                    <h3> <a href="#"><strong>Mobile</strong> and Phones</a></h3>
                  </div>
                  <p><a href="#"> <span class="day">Dec 14, 2016</span></a></p>
                  <p><a href="#" target="_blank" class="external-link"><strong>The electronics company</strong> has developed a new smartphone display concept  which basically removes...</a></p>
                  <p><a href="#">1.Turn your phone off</a> | <a href="#">2. Leave tech behind</a></p>
                  <p><a href="#">3. Stop checking </a> | <a href="#">4. Stop checking at night</a></p>
                </div>
              </div>
              <!-- End .item--> 
            </div>
            <!--========== END  .NEWS ==========--> 
          </div>
          <!--========== END .COL-MD-8 ==========--> 
          <!--========== BEGIN .COL-MD-4 ==========-->
          <div class="col-md-4"> 
            <!--========== BEGIN EXCHANGE RATES==========--> 
            <!-- Begin .block-title-3 -->
            <div class="block-title-3">
              <h3><strong>exchange</strong> rates</h3>
            </div>
            <!-- End .block-title-3 -->
            <div class="currency">
              <h3>Date<span id="cdate"></span></h3>
              <h5>Base USD</h5>
              <hr>
              <h3>EXCHANGE RATES</h3>
              <hr>
              <div class="rates">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>EUR<span id="euro"></span></h4>
                    <h4>GBP<span id="pound"></span></h4>
                    <h4>JPY<span id="yen"></span></h4>
                    <h4>CHF<span id="franc"></span></h4>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>CAD<span id="cdollar"></span></h4>
                    <h4>AUD<span id="adollar"></span></h4>
                    <h4>RON<span id="ron"></span></h4>
                    <h4>RUB<span id="rub"></span></h4>
                  </div>
                </div>
              </div>
            </div>
            <!--========== END EXCHANGE RATES==========--> 
            <!--========== BEGIN CURRENCY CONVERTER==========--> 
            <!-- Begin .block-title-3 --> 
            <!-- Begin .block-title-3 -->
            <div class="block-title-3">
              <h3><strong>currency</strong> converter</h3>
            </div>
            <!-- End .block-title-3 -->
            <form class="conversionForm">
              <div class="conversionForm-amount">
                <label for="amount">Amount:</label>
                <input type="number" class="currencyValue form-control no-spinners" title="Amount" id="amount">
              </div>
              <div class="conversionForm-currencies">
                <div class="conversionForm__from">
                  <label for="from">From:</label>
                  <div class="btn-group bootstrap-select convertFrom show-menu-arrow form-control"><button type="button" class="dropdown-toggle bs-placeholder btn btn-primary" data-toggle="dropdown" role="button" data-id="from" title="From"><span class="filter-option pull-left">From</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"></ul></div><select class="convertFrom selectpicker show-menu-arrow form-control" data-style="btn btn-primary" title="From" id="from" tabindex="-98"><option class="bs-title-option" value="">From</option>
                  </select></div>
                </div>
                <div class="conversionForm__to">
                  <label for="to">To:</label>
                  <div class="btn-group bootstrap-select convertTo show-menu-arrow form-control"><button type="button" class="dropdown-toggle bs-placeholder btn btn-primary" data-toggle="dropdown" role="button" data-id="to" title="To"><span class="filter-option pull-left">To</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"></ul></div><select class="convertTo selectpicker show-menu-arrow form-control" data-style="btn btn-primary" title="To" id="to" tabindex="-98"><option class="bs-title-option" value="">To</option>
                  </select></div>
                </div>
              </div>
              <input type="submit" value="convert" class="currencySubmit btn btn-default">
              <p class="output"></p>
            </form>
            <!--========== END CURRENCY CONVERTER ==========--> 
          </div>
          <!--========== END .COL-MD-4 ==========--> 
        </div>
      </div>
    </section>
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
                <div class="image" style="background-image: url(img/news_875x656.jpg);"></div>
              </div>
              <div class="content">
                <h2><a href="#">Metropolitan Police - Latest news</a></h2>
                <h4>Find the latest news and up on crime across the US</h4>
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
                <div class="image" style="background-image: url(img/news_800x600.jpg);"> <span><a class="label-1" href="#">World News</a></span> <a href="video.html"><span class="play-icon"></span></a></div>
              </div>
              <div class="content">
                <h4><a href="#">Magazines are publications, that are electronically or printed  published  online.</a></h4>
              </div>
            </div>
            <!-- Begin .entry-post -->
            <div class="entry-post"> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image01.jpg') }} " alt=""></a></div>
                <div class="item-content">
                  <div class="entry-meta bg-1">News</div>
                  <p class="ellipsis"><a href="#">Police are hunting a group of men believed to be responsible for...</a></p>
                </div>
              </div>
              <!-- End .item--> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image02.jpg') }} " alt=""></a></div>
                <div class="item-content">
                  <div class="entry-meta bg-2">Business</div>
                  <p class="ellipsis"><a href="#">The sale creates further uncertainty for British steelworkers...</a></p>
                </div>
              </div>
              <!-- End .item--> 
              <!-- Begin .item-->
              <div class="item">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_464x232-image03.jpg') }} " alt=""></a></div>
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
            <div class="sidebar-add-place"> <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank"><img src="{{ asset('website/img/banner_300x600.jpg') }} " alt=""></a> </div>
          </div>
          <!-- End .full-block-three-columns --> 
        </div>
        <!--========== END .ROW ==========--> 
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!-- Begin #parallax-section1 -->
    <div id="parallax-section1">
      <div class="image3 img-overlay1">
        <div class="container">
          <div class="caption text-center">
            <h2 class="color-white weight-300">We introduce you our <strong>24h News Team!</strong> Get more information about us here!</h2>
            <a href="about-us.html" target="_blank" class="btn btn-default">About Us</a> </div>
        </div>
      </div>
    </div>
    <!-- End #parallax-section1 --> 
    <!-- Begin .add-place -->
    <div class="add-place"> <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank"><img src="{{ asset('website/img/banner_820x100.jpg') }} " alt=""></a> </div>
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
        <!--========== BEGIN SMALL-GALLERY ==========--> 
        <!-- Begin .carousel-title -->
        <h3 class="carousel-title-gray">News Carousel</h3>
        <!-- End .carousel-title --> 
        <!-- Begin .gallery-slider owl-carousel -->
        <div id="small-gallery-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;"> 
          <!-- Begin .small-gallery -->
          <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4992px; left: 0px; display: block;"><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image01.jpg') }} " alt="">
            <div class="post-content"> <a href="watch-live.html">Watch Live 24/7</a>
              <p><a href="watch-live.html">What this generation's watching.</a></p>
              <i class="fa fa-clock-o"></i><span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image02.jpg') }} " alt="">
            <div class="post-content"> <a href="24-tv-radio.html">24 TV &amp; Radio </a>
              <p><a href="24-tv-radio.html">Sport station could follow 24h3 in going off air.</a></p>
              <i class="fa fa-clock-o"></i><span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image03.jpg') }} " alt="">
            <div class="post-content"> <a href="web-shows.html">Web Shows </a>
              <p><a href="web-shows.html">Promoted Links From around the Web.</a></p>
              <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image04.jpg') }} " alt="">
            <div class="post-content"> <a href="24-news-store.html">News Store </a>
              <p><a href="24-news-store.html">Everything | Stories | Interactives | iReport |</a></p>
              <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image05.jpg') }} " alt="">
            <div class="post-content"> <a href="business.html">Business </a>
              <p><a href="business.html">the Co.hired advisers at investment bank </a></p>
              <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div><div class="owl-item" style="width: 416px;"><div class="small-gallery"> <img class="img-responsive" src="{{ asset('website/img/news_108x108_slider-image06.jpg') }} " alt="">
            <div class="post-content"> <a href="business.html">Tech-Science </a>
              <p><a href="business.html">With SkinTrack, Your Arm is the Touchpad</a></p>
              <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Dec, 2016</span> </div>
          </div></div></div></div>
          
          
          
          
          
        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa-angle-left"></i></div><div class="owl-next"><i class="fa-angle-right"></i></div></div></div></div>
        <!-- End .gallery-slider owl-carousel --> 
        <!--========== END  .SMALL-GALLERY ==========--> 
      </div>
      <!--========== END .CONTAINER ==========--> 
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
      <div class="container">
        <div class="row no-gutter"> 
          <!--========== BEGIN .COL-MD-8 ==========-->
          <div class="col-md-8">
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-1">World News</span></h3>
                <h3 class="subtitle">Watch the latest news</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img src="{{ asset('website/img/news_800x400-image19.jpg') }} " alt="" class="img-responsive img-full"></a><span><a class="label-1" href="#">News</a></span></div>
                  <div class="entry-content">
                    <h3><a href="#">Migrant and Refugee Crisis News from Europe</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link"><strong>Breaking news headlines</strong> about Migrant Crisis...</a></p>
                    <p><a href="#" target="_blank" class="external-link"><strong>The proposal</strong> involves resettling one refugee in Europe...</a></p>
                    <div><a href="24-tv-radio.html" target="_blank"><span class="read-more">24 TV Radio</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img src="{{ asset('website/img/news_800x400-image20.jpg') }} " alt="" class="img-responsive img-full"></a><span><a class="label-2" href="#">Politics</a></span></div>
                  <div class="entry-content">
                    <h3><a href="#">International Women's Day Celebrating </a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link"><strong>"On International Women’s Day</strong>, we celebrate mothers, daughters, grandmothers, teachers...</a></p>
                    <div><a href="politics.html" target="_blank"><span class="read-more">Politics</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img src="{{ asset('website/img/news_800x400-image21.jpg') }} " alt="" class="img-responsive img-full"></a><span><a class="label-5" href="#">Science</a></span></div>
                  <div class="entry-content">
                    <h3><a href="#">Total eclipse: Sun is blocked by the Moon</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link">Millions of people across Indonesia have experienced a total solar eclipse, with parts...</a></p>
                    <div><a href="tech-science.html" target="_blank"><span class="read-more">Tech-Science</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-1">National News</span></h3>
                <h3 class="subtitle">Watch the latest news</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image22.jpg') }} " alt=""></a> <span><a class="label-1" href="#">Breaking News</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">9 Firefighters injured in Seattle explosion.</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link">At least nine firefighters were injured when a massive natural gas explosion rocked Seattle...</a></p>
                    <div><a href="watch-live.html" target="_blank"><span class="read-more">Watch Live</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image23.jpg') }} " alt=""></a><span><a class="label-3" href="#">Travel</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">Browns Canyon, industrial town among monuments.</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link">Protection of public lands such as offer extensive recreational value...</a></p>
                    <div><a href="national-parks.html" target="_blank"><span class="read-more">National Parks</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image24.jpg') }} " alt=""></a> <span><a class="label-4" href="#">Sport</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">Bleacher Report's Ultimate Guide to Spring Football.</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link">The official source for american football news, video highlights, schedules, stats and more...</a></p>
                    <div><a href="americanfootball.html" target="_blank"><span class="read-more">American Football</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
            <div class="container">
              <div class="module-title">
                <h3 class="title"><span class="bg-1">Local News</span></h3>
                <h3 class="subtitle">Watch the latest news</h3>
              </div>
              <!--========== BEGIN .ARTICLE ==========-->
              <div class="article">
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image25.jpg') }} " alt=""></a><span><a class="label-2" href="#">Politics</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">Two arrested after shots fired on 118 Freeway...</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link"><strong>A man and a woman</strong> were arrested late Tuesday after they allegedly fired off from a moving car...</a></p>
                    <div><a href="web-shows.html" target="_blank"><span class="read-more">Web Shows</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image26.jpg') }} " alt=""></a> <span><a class="label-1" href="#">News</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">3 Years After Man's Death</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link"><strong>A $20,000</strong> reward was being renewed for information...</a></p>
                    <p><a href="#" target="_blank" class="external-link">Mother hopes renewed reward will help find her son’s killer...</a></p>
                    <div><a href="24-news-store.html" target="_blank"><span class="read-more">24 News Store</span></a> </div>
                  </div>
                </div>
                <div class="entry-block-small">
                  <div class="entry-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/news_800x400-image27.jpg') }} " alt=""></a> <span><a class="label-5" href="#">Economy</a></span> </div>
                  <div class="entry-content">
                    <h3><a href="#">How Do Non-Profits Affect The Economy?</a></h3>
                    <br>
                    <div class="post-meta-elements">
                      <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                    </div>
                    <p><a href="#" target="_blank" class="external-link"><strong>The labor force</strong> is projected to grow over the next 10 years...</a></p>
                    <p><a href="#" target="_blank" class="external-link">The population of the USA is growing more slowly than...</a></p>
                    <div><a href="lifestyle.html" target="_blank"><span class="read-more">Lifestyle</span></a> </div>
                  </div>
                </div>
              </div>
              <!--========== END .ARTICLE ==========--> 
            </div>
            <!--========== BEGIN .NEWS ==========--> 
            <!-- Begin .title-style01 -->
            <div class="title-style01">
              <h3><strong>Check out the latest Tweets</strong> from our Correspondents</h3>
            </div>
            <!-- End .title-style01 -->
            <div class="news-block">
              <div class="item-block">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/tweets_800x400-image01.jpg') }} " alt=""></a><a class="label-13" href="#">
                    <p class="twitter">@WThornton</p></a></div>
              </div>
              <div class="item-block">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/tweets_800x400-image02.jpg') }} " alt=""></a><a class="label-13" href="#">
                    <p class="twitter">@Stacy Parks</p></a></div>
              </div>
              <div class="item-block">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/tweets_800x400-image03.jpg') }} " alt=""></a><a class="label-13" href="#">
                    <p class="twitter">@WThornton</p></a></div>
              </div>
              <div class="item-block">
                <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/tweets_800x400-image04.jpg') }} " alt=""></a><a class="label-13" href="#">
                    <p class="twitter">@Deborah King</p></a></div>
              </div>
            </div>
            <!--========== END .NEWS ==========--> 
          </div>
          <!--========== END .COL-MD-8 ==========--> 
          <!--========== BEGIN .COL-MD-4 ==========-->
          <div class="col-md-4">
            <div class="container"> 
              <!-- Begin .title-style02 -->
        
              <!--========== BEGIN .TABS ==========-->
              <div class="sidebar-tabs">
                <div class="panel">
                  <div class="panel-body">
                    <div class="tabbable"> 
                      <!-- Begin .nav nav-tabs -->
                      <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                        <li class="active"><a href="#solid-justified-tab1" data-toggle="tab">Popular</a></li>
                        <li><a href="#solid-justified-tab2" data-toggle="tab">Recent</a></li>
                        <li><a href="#solid-justified-tab3" data-toggle="tab">Comments</a></li>
                      </ul>
                      <!-- End .nav nav-tabs -->
                      <div class="tab-content"> 
                        <!-- Begin #tab1 -->
                        <div class="tab-pane active" id="solid-justified-tab1">
                          <ul>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab1-image01.jpg') }} " alt=""></div>
                              <p>Y&amp;R star reveals his summer plans, favorite vacation.</p>
                              <span>Monday 28 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab1-image02.jpg') }} " alt=""></div>
                              <p>Prominent activist arrested in Louisiana protest.</p>
                              <span>Sunday 27 Dec 2016 </span> </a> </li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab1-image03.jpg') }} " alt=""></div>
                              <p>Gunfire reported outside San Antonio police HQ.</p>
                              <span>Saturday 26 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab1-image04.jpg') }} " alt=""></div>
                              <p>Lawyer: Cop reacted to black motorist's gun.</p>
                              <span>Friday 25 Dec 2016</span> </a></li>
                          </ul>
                        </div>
                        <!-- End #tab1 --> 
                        <!-- Begin #tab2 -->
                        <div class="tab-pane" id="solid-justified-tab2">
                          <ul>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab2-image01.jpg') }} " alt=""></div>
                              <p>Sheriff's deputy wounded, suspect dead after standoff.</p>
                              <span>Monday 28 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab2-image02.jpg') }} " alt=""></div>
                              <p>Suspect shooting spree allegedly angered by African-American deaths.</p>
                              <span>Sunday 27 Dec 2016 </span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab2-image03.jpg') }} " alt=""></div>
                              <p>Mass shootings send ripple through Capitol Hill.</p>
                              <span>Saturday 26 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab2-image04.jpg') }} " alt=""></div>
                              <p>Homeland Security secretary says Dallas gunman acted alone.</p>
                              <span>Friday 25 Dec 2016</span> </a></li>
                          </ul>
                        </div>
                        <!-- End #tab2 --> 
                        <!-- Begin #tab3 -->
                        <div class="tab-pane" id="solid-justified-tab3">
                          <ul>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab3-image01.jpg') }} " alt=""></div>
                              <p>Dallas sniper reportedly was readying larger attack.</p>
                              <span>Monday 28 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab3-image02.jpg') }} " alt=""></div>
                              <p>Cops across US on high alert after threats.</p>
                              <span>Sunday 27 Dec 2016 </span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab3-image03.jpg') }} " alt=""></div>
                              <p>Dallas police officers killed by sniper fire during protest.</p>
                              <span>Saturday 26 Dec 2016</span> </a></li>
                            <li><a href="#">
                              <div class="img-responsive"><img src="{{ asset('website/img/tab3-image04.jpg') }} " alt=""></div>
                              <p>Deadly fighting breaks out in South Sudan's capital.</p>
                              <span>Friday 25 Dec 2016</span> </a></li>
                          </ul>
                        </div>
                        <!-- End #tab3 --> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--========== END .TABS ==========--> 
              <!--========== BEGIN .CALENDAR ==========-->
              <div id="calendar" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">16</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
              <!--========== END .CALENDAR ==========--> 
              <!--========== BEGIN .SIDEBAR-SOCIAL-BUTTONS ==========-->
              <div class="sidebar-social-icons"> 
                <!-- Begin .title-style01 -->
                <div class="title-style01">
                  <h3><strong>Stay</strong> Connected</h3>
                </div>
                <!-- End .title-style01 -->
                <ul>
                  <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> </li>
                  <li> <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> </li>
                  <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                  <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
                  <li> <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a> </li>
                  <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
                  <li> <a href="#" class="rss"><i class="fa fa-rss"></i></a> </li>
                  <li> <a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a> </li>
                </ul>
              </div>
              <!--========== END .SIDEBAR-SOCIAL-BUTTONS ==========--> 
            </div>
          </div>
          <!--========== END .COL-MD-4 ==========--> 
        </div>
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
      <div class="container"> 
        <!--========== BEGIN BIG-GALLERY ==========--> 
        <!-- Begin .carousel-title -->
        <h3 class="carousel-title">News Gallery</h3>
        <!-- End .carousel-title --> 
        <!-- Begin .gallery-slider owl-carousel -->
        <div id="big-gallery-slider-3" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
          <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3000px; left: 0px; display: block;"><div class="owl-item" style="width: 250px;"><div class="big-gallery"> <img src="{{ asset('website/img/news_slider-large-image01.jpg') }} " alt=""> <a href="video.html"><span class="play-icon"></span></a> </div></div><div class="owl-item" style="width: 250px;"><div class="big-gallery"><img src="{{ asset('website/img/news_slider-large-image02.jpg') }} " alt=""> <a href="video.html"><span class="play-icon"></span></a> </div></div><div class="owl-item" style="width: 250px;"><div class="big-gallery"> <img src="{{ asset('website/img/news_slider-large-image03.jpg') }} " alt=""><a href="video.html"><span class="play-icon"></span></a> </div></div><div class="owl-item" style="width: 250px;"><div class="big-gallery"><img src="{{ asset('website/img/news_slider-large-image04.jpg') }} " alt=""><a href="video.html"><span class="play-icon"></span></a> </div></div><div class="owl-item" style="width: 250px;"><div class="big-gallery"> <img src="{{ asset('website/img/news_slider-large-image05.jpg') }} " alt=""><a href="video.html"><span class="play-icon"></span></a> </div></div><div class="owl-item" style="width: 250px;"><div class="big-gallery"> <img src="{{ asset('website/img/news_slider-large-image06.jpg') }} " alt=""><a href="video.html"><span class="play-icon"></span></a> </div></div></div></div>
          
          
          
          
          
        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa-angle-left"></i></div><div class="owl-next"><i class="fa-angle-right"></i></div></div></div></div>
        <!-- End .gallery-slider owl-carousel --> 
        <!--========== END BIG-GALLERY ==========--> 
        <!-- Begin .bottom-add-place -->
        <div class="bottom-add-place"> <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank"><img src="{{ asset('website/img/banner_1248x100.jpg') }} " alt=""></a> </div>
        <!-- End .bottom-add-place --> 
      </div>
    </section>
    <!--========== END .MODULE ==========--> 
  </section>
@include('website.partials.footer')