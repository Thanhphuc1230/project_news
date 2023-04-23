<section class="module highlight"> 
    <!--========== BEGIN.CONTAINER ==========-->
    <div class="container"> 
      <!--========== BEGIN .ROW ==========-->
      <div class="row no-gutter"> 
        <!--========== BEGIN .C0L-MD-8 ==========-->
        <div class="col-md-8"> 
          <!-- Begin .news -->
          <div class="news">
            <div class="module-title">
              <h3 class="title"><span class="bg-1">Rethinking</span></h3>
              <h3 class="subtitle">the 24h News Experience</h3>
            </div>
            <!-- Begin .item -->
            <div class="item">
              <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image17.jpg ') }}" alt=""></a></div>
              <div class="item-content">
                <div class="title-left title-style04 underline04">
                  <h3><a href="#"><strong>Breaking</strong> News Stories</a></h3>
                </div>
                <br>
                <div class="post-meta-elements">
                  <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By Hugh Jackson</a> </div>
                  <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                </div>
                <p><a href="#" target="_blank" class="external-link">At the 24h News we see breaking news events as unexpected, momentous or informative events...</a></p>
                <p><a href="#" target="_blank" class="external-link">Our editors also consider other aspects of...</a></p>
                <p><a href="#" target="_blank" class="external-link">Is this event part of a subject the 24h News often reports on?</a></p>
                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
              </div>
            </div>
            <!-- End .item --> 
            <!-- Begin .news-block" -->
            <div class="news-block">
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image21.jpg ') }}" alt=""></a></div>
                <div class="item-content"><span class="day">Thu, Dec 12, 2016</span>
                  <p><a href="#" target="_blank" class="external-link">The energy choices</a></p>
                </div>
              </div>
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image22.jpg ') }}" alt=""></a></div>
                <div class="item-content"><span class="day">Thu, Dec 12, 2016</span>
                  <p><a href="#" target="_blank" class="external-link">Food/Agriculture</a></p>
                </div>
              </div>
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image23.jpg ') }}" alt=""></a></div>
                <div class="item-content"><span class="day">Thu, Dec 12, 2016</span>
                  <p><a href="#" target="_blank" class="external-link">Healthcare</a></p>
                </div>
              </div>
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image24.jpg ') }}" alt=""></a></div>
                <div class="item-content"><span class="day">Thu, Dec 12, 2016</span>
                  <p><a href="#" target="_blank" class="external-link">Housing/Construction</a></p>
                </div>
              </div>
            </div>
            <!-- End .news-block" -->
            <div class="module-title">
              <h3 class="title"><span class="bg-4">Sport News</span></h3>
              <h3 class="subtitle">Watch the latest sport news</h3>
            </div>
            <!-- Begin .item -->
            <div class="item">
              <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image18.jpg ') }}" alt=""></a></div>
              <div class="item-content">
                <div class="title-left title-style04 underline04">
                  <h3><a href="#"><strong>Features</strong> & Analysis</a></h3>
                </div>
                <br>
                <div class="post-meta-elements">
                  <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By Hugh Jackson</a> </div>
                  <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                </div>
                <p><a href="#" target="_blank" class="external-link">From within the sport, the obligatory defence mechanism.</a></p>
                <p><a href="#" target="_blank" class="external-link">From outside the tennis, the inevitable questions. But the broader question is this: where’s the line?</a> </p>
                <p><a href="#" target="_blank" class="external-link">The player will face scrutiny use but you also ...</a></p>
                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
              </div>
            </div>
            <!-- End .item -->
            <div class="news-block">
              @for($i = 1; $i<= 8 ; $i++)
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image25.jpg ') }}" alt=""></a></div>
                <div class="item-content"><i class="fa fa-clock-o"></i><span class="day"> 1h ago</span><a href="#">Cricket</a></div>
              </div>
              @endfor
             
            </div>
          </div>
          <!-- End .news --> 
        </div>
        <!--========== END .C0L-MD-8 ==========--> 
        <!--========== BEGIN .C0L-MD-4 ==========-->
        <div class="col-md-4"> 
          <!-- Begin .title-style02 -->
          <div class="title-style02">
            <h3><a href="#">Headlines</a></h3>
          </div>
          <!-- End .title-style02 --> 
          <!--========== BEGIN .SIDEBAR-POST ==========-->
          <div class="sidebar-post">
            <ul>
              @for($i = 1 ; $i <= 8 ; $i++)
              <li>
                <div class="item">
                  <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_370x185-image07.jpg ') }}" alt=""></a></div>
                  <div class="item-content">
                    <h3>01</h3>
                    <p class="ellipsis"><a href="#">Survivor is world's oldest man - Guinness World Records.</a></p>
                  </div>
                </div>
              </li>
              @endfor
            </ul>
          </div>
          <!--========== END .SIDEBAR-POST ==========-->
           <!--========== BEGIN #WEATHER ==========-->
          <div id='weather' class='sidebar-weather'> 
            <!-- Begin .block-title-1 -->
            <div class="block-title-1">
              <div class='weather-city-text'></div>
            </div>
            <!-- End .block-title-1 -->
            <div class='weather-card'>
              <div class="temp"> <i class="weather-icon wi"></i>
                <div class='temperature'></div>
                <button class='btn btn-primary'> <span class="switch">F</span> </button>
              </div>
              <div id='description'>
                <div id='type' class='desc-text'> </div>
                <i class="wi wi-humidity"></i>
                <div id='humidity' class='desc-text'> </div>
                <i class="wi wi-strong-wind"></i>
                <div id='wind' class='desc-text'> </div>
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
  <section class="module">
    <div class="container">
      <div class="row no-gutter"> 
        <!--========== BEGIN .COL-MD-8 ==========-->
        <div class="col-md-8">
          <div class="news">
            <div class="module-title">
              <h3 class="title"><span class="bg-2">Health News</span></h3>
              <h3 class="subtitle">Watch the latest health news</h3>
            </div>
            <!-- Begin .item -->
            <div class="item">
              <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image19.jpg ') }}" alt=""></a></div>
              <div class="item-content">
                <div class="title-left title-style04 underline04">
                  <h3><a href="#"><strong>Global</strong> Health Priorities</a></h3>
                </div>
                <br>
                <div class="post-meta-elements">
                  <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By Hugh Jackson</a> </div>
                  <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                </div>
                <p><a href="#" target="_blank" class="external-link">Health has gained importance on the global agenda.</a></p>
                <p><a href="#" target="_blank" class="external-link">In this article three issues are considered: global health policy actors, global health priorities...</a></p>
                <p><a href="#" target="_blank" class="external-link">Robot performs surgery on soft tissue better than human hands.</a></p>
                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
              </div>
            </div>
            <!-- End .item -->
            <div class="news-block">
              @for($i = 1; $i <= 4; $i++)
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image32.jpg ') }}" alt=""></a></div>
                <div class="item-content"><i class="fa fa-clock-o"></i> <span class="day"> 20 Dec</span>
                  <p><a href="#">Health Daily Politics</a></p>
                </div>
              </div>
              @endfor
           
            </div>
            <div class="module-title">
              <h3 class="title"><span class="bg-9">School Report</span></h3>
              <h3 class="subtitle">Watch the latest report news</h3>
            </div>
            <!-- Begin .item -->
            <div class="item">
              <div class="item-image-1"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image20.jpg ') }}" alt=""></a></div>
              <div class="item-content">
                <div class="title-left title-style04 underline04">
                  <h3><a href="#"><strong>Improve</strong> pupils' concentration?</a></h3>
                </div>
                <br>
                <div class="post-meta-elements">
                  <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By Hugh Jackson</a> </div>
                  <div class="post-meta-date"> <i class="fa fa-calendar"></i>December 25, 2016 </div>
                </div>
                <p><a href="#" target="_blank" class="external-link">Mindfulness is a psychological technique which is said to help combat stress.</a></p>
                <p><a href="#" target="_blank" class="external-link">According to the Mindfulness in School Project...</a></p>
                <p><a href="#" target="_blank" class="external-link"> Sometimes these types of travel experiences are funded by savings...</a></p>
                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
              </div>
            </div>
            <!-- End .item -->
            <div class="news-block">
              @for($i = 1; $i <=4 ; $i++)
              <div class="item-block">
                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="{{ asset('website/img/index_800x400-image36.jpg ') }}" alt=""></a></div>
                <div class="item-content"><i class="fa fa-clock-o"></i> <span class="day">16 Dec</span>
                  <p><a href="#">Our school bans energy</a></p>
                </div>
              </div>
              @endfor
              
            </div>
          </div>
          <!--========== BEGIN NEWS==========--> 
          <!--========== BEGIN .PAGINATION ==========-->
          <ul class="pagination">
            <li><a href="#">&lsaquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&rsaquo;</a></li>
          </ul>
          <!--========== END .PAGINATION ==========--> 
        </div>
        <!--========== END .C0L-MD-8 ==========--> 
        <!--========== BEGIN .C0L-MD-4 ==========-->
        <div class="col-md-4"> 
          <!--========== BEGIN EXCHANGE RATES==========--> 
          <!-- Begin .block-title-3 -->
          <div class="block-title-3">
            <h3>exchange rates</h3>
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
          <div class="block-title-3">
            <h3>currency converter</h3>
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
                <select class="convertFrom selectpicker show-menu-arrow form-control" data-style="btn btn-primary" title="From" id="from">
                </select>
              </div>
              <div class="conversionForm__to">
                <label for="to">To:</label>
                <select class="convertTo selectpicker show-menu-arrow form-control" data-style="btn btn-primary" title="To" id="to">
                </select>
              </div>
            </div>
            <input type="submit" value="convert" class="currencySubmit btn btn-default">
            <p class="output"></p>
          </form>
          <!--========== END CURRENCY CONVERTER ==========--> 
          <!--========== BEGIN .CALENDAR ==========-->
          <div id='calendar'></div>
          <!--========== END .CALENDAR ==========--> 
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
                  <input title="Newsletter" class="form-control" name="email" type="email" id="address" placeholder="Enter Your Email Address" data-validate="validate(required, email)" required>
                  <span class="input-group-btn">
                  <button type="submit" class="btn btn-success">Subscribe</button>
                  </span> </div>
              </form>
              <span id="result" class="alertMsg"></span> </div>
            <!-- End .sidebar-newsletter-form -->  
          </div>
          <!--========== END #SIDEBAR-NEWSLETTER ==========--> 
          <!--========== BEGIN #SIDEBAR-SOCIAL-BUTTONS ==========-->
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
          <!--========== END #SIDEBAR-SOCIAL-BUTTONS ==========--> 
        </div>
        <!--========== END .C0L-MD-4 ==========--> 
      </div>
    </div>
  </section>