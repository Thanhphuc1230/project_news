@include('website.partials.head')
@include('website.partials.header')
<div id="main-section">
    <!--========== BEGIN .CONTAINER ==========-->
    <div class="container"> </div>
    <!--========== END .CONTAINER ==========-->
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
        <div class="container">
            <!--========== BEGIN .BREAKING-NEWS ==========-->
            <!-- Begin .outer -->
            <div class="outer">
                <div class="breaking-ribbon">
                    <h5>Breaking News</h5>
                </div>
                <!-- Begin .newsticker -->
                <div class="newsticker" style="position: relative; height: 46px; overflow: hidden;">
                    <ul style="margin: 0px; position: absolute;">
                        <li style="margin: 0px;">
                            <p><span class="category">News:</span><a href="#"> Extra! Extra! Rethinking the 24 h
                                    News Breaking News Experience.</a></p>
                        </li>
                        <li style="margin: 0px;">
                            <p><span class="category">Travel:</span><a href="#"> Man seriously hurt after jumping
                                    from upper level terminal while fleeing police.</a></p>
                        </li>
                        <li style="margin: 0px;">
                            <p><span class="category">Politics:</span><a href="#"> We see momentous or informative
                                    events that are relevant to a wide audience.</a></p>
                        </li>
                        <li style="margin: 0px;">
                            <p><span class="category">Health:</span><a href="#"> Evanston doctor gives up license
                                    after cancer drug probe.</a></p>
                        </li>
                        <li style="margin: 0px;">
                            <p><span class="category">World:</span><a href="#"> North Coast fest organizers plan
                                    to decrease noise, increase security.</a></p>
                        </li>
                        <li style="margin: 0px;">
                            <p><span class="category">Finance:</span><a href="#"> Credit rating hit, another big
                                    tax hike possible as clock ticks on pension overhaul.</a></p>
                        </li>
                    </ul>
                    <div class="navi" style="margin: 0px;">
                        <button class="up" style="margin: 0px;"><i class="fa fa-caret-left"></i></button>
                        <button class="down" style="margin: 0px;"><i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
                <!-- End .newsticker -->
            </div>
            <!-- End .outer -->
            <!--========== END .BREAKING-NEWS ==========-->
            <!--========== BEGIN .ROW ==========-->
            <div class="row no-gutter">
                <!--========== BEGIN .COL-MD-8 ==========-->
                <div class="col-md-8">
                    <!--========== BEGIN .POST ==========-->
                    <div class="post post-full clearfix">
                        <div class="entry-media"> <a href="#"><img
                                    src="{{ asset('website/img/news/' . $detail_new->avatar) }}" alt="Avatar News"
                                    class="img-responsive"></a> </div>
                        <div class="entry-main">
                            <div class="entry-title">
                                <h4 class="entry-title"><a href="#">{{ $detail_new->title }}</a></h4>
                            </div>
                            <div class="post-meta-elements">
                                <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By
                                        {{ $detail_new->author }}</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-calendar"></i>{{ $detail_new->created_at }}
                                </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">23
                                        Comments</a> </div>
                            </div>
                            <div class="entry-content">
                                <p>{{ $detail_new->content }}</p>
                            </div>
                            <div class="news">
                                <!-- Begin .item -->
                                <div class="item">
                                    <div class="item-image-3"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/single-post_800x400.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <div class="title-left title-style04 underline04">
                                            <h3><a href="#"><strong>Nostrud</strong> sed exercitation dolore</a>
                                            </h3>
                                        </div>
                                        <p>Tempor incididunt ut labore et dolore magna aliqu ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            dolore magna aliqua.</p>
                                        <p>Tempor incididunt ut labore et dolore magna aliqu ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            dolore magna aliqua.</p>
                                        <div class="post-tags"><span class="post-tags_title">tags :</span><a
                                                href="#" class="post-tags_link"> Movies,</a><a href="#"
                                                class="post-tags_link"> Fashion,</a><a href="#"
                                                class="post-tags_link"> Health</a></div>
                                    </div>
                                </div>
                                <!-- End .item -->
                            </div>
                        </div>
                    </div>
                    <!--  End .post -->
                    <!-- Begin .author-post -->
                    <div class="author-post clearfix">
                        <div class="author-post_img"><img src="img/author.jpg" alt="foto" class="img-responsive">
                        </div>
                        <div class="author-post_content">
                            <h5 class="author-post_title">Authoor:<span class="author-post_name"> Hugh Jackson</span>
                            </h5>
                            <div class="post-meta-elements">
                                <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">Admin</a>
                                </div>
                                <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a
                                        href="#">Politics</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a
                                        href="#">Comments</a> </div>
                            </div>
                            <div class="author-post_info">Tempor incididunt labore et dolore magna aliqua enimad min
                                veniam saquis nostru exercitation ullamco laboris onsequat lorem ipsum dolor tasit amet
                                consect elit sed eiusmod incididunt labore et dolore magna aliquipsum.</div>
                            <ul class="social-links list-inline">
                                <li><a href="#" class="social-link facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#" class="social-link youtube"><i
                                            class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="social-link twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="social-link instagram"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="social-link linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pager">
                            <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                            <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!--  End .author-post -->
                    <!--  Begin .comment-section -->
                    <div class="comment-section">
                        <!-- Begin .title-style01 -->
                        <div class="comment-title title-style01">
                            <h4>3 Comments</h4>
                        </div>
                        <!-- End .title-style01 -->
                        <ul class="comments-list">
                            <li>
                                <div class="comment clearfix">
                                    <div class="avatar"><img src="img/avatar01.jpg" alt="avatar"
                                            class="img-responsive"></div>
                                    <div class="comment-content">
                                        <div class="comment-title">
                                            <h5 class="comment-author">Denise Barrett</h5>
                                            <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                    class="day"> Dec 25, 2016</span></div>
                                        </div>
                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt
                                            labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                                        <button type="button" class="comment-btn btn btn-default">reply</button>
                                        <button type="button" class="comment-btn btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="children">
                                    <li>
                                        <div class="comment clearfix">
                                            <div class="avatar"><img src="img/avatar02.jpg" alt="avatar"
                                                    class="img-responsive"></div>
                                            <div class="comment-content">
                                                <div class="comment-title">
                                                    <h5 class="comment-author">Jesse Cole</h5>
                                                    <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                            class="day"> Dec 25, 2016</span></div>
                                                </div>
                                                <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor
                                                    incidid magna aliqu enimad min incididunt labore dolore sed.</p>
                                                <button type="button"
                                                    class="comment-btn btn btn-default">reply</button>
                                                <button type="button"
                                                    class="comment-btn btn btn-primary">edit</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment clearfix">
                                    <div class="avatar"><img src="img/avatar03.jpg" alt="avatar"
                                            class="img-responsive"></div>
                                    <div class="comment-content">
                                        <div class="comment-title">
                                            <h5 class="comment-author">Timothy Tyler</h5>
                                            <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                    class="day"> Dec 25, 2016</span></div>
                                        </div>
                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt
                                            labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                                        <button type="button" class="comment-btn btn btn-default">reply</button>
                                        <button type="button" class="comment-btn btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="comment clearfix">
                                    <div class="avatar"><img src="img/avatar01.jpg" alt="avatar"
                                            class="img-responsive"></div>
                                    <div class="comment-content">
                                        <div class="comment-title">
                                            <h5 class="comment-author">Denise Barrett</h5>
                                            <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                    class="day"> Dec 25, 2016</span></div>
                                        </div>
                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt
                                            labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                                        <button type="button" class="comment-btn btn btn-default">reply</button>
                                        <button type="button" class="comment-btn btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="children">
                                    <li>
                                        <div class="comment clearfix">
                                            <div class="avatar"><img src="img/avatar02.jpg" alt="avatar"
                                                    class="img-responsive"></div>
                                            <div class="comment-content">
                                                <div class="comment-title">
                                                    <h5 class="comment-author">Jesse Cole</h5>
                                                    <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                            class="day"> Dec 25, 2016</span></div>
                                                </div>
                                                <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor
                                                    incidid magna aliqu enimad min incididunt labore dolore sed.</p>
                                                <button type="button"
                                                    class="comment-btn btn btn-default">reply</button>
                                                <button type="button"
                                                    class="comment-btn btn btn-primary">edit</button>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="comment clearfix">
                                                    <div class="avatar"><img src="img/avatar01.jpg" alt="avatar"
                                                            class="img-responsive"></div>
                                                    <div class="comment-content">
                                                        <div class="comment-title">
                                                            <h5 class="comment-author">Denise Barrett</h5>
                                                            <div class="comment-date"><i
                                                                    class="fa fa-calendar"></i><span class="day">
                                                                    Dec 25, 2016</span></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod
                                                            tempor incididunt labore dolore magna aliqu enimad min
                                                            incididunt ut labore et dolore sed.</p>
                                                        <button type="button"
                                                            class="comment-btn btn btn-default">reply</button>
                                                        <button type="button"
                                                            class="comment-btn btn btn-primary">edit</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment clearfix">
                                    <div class="avatar"><img src="img/avatar03.jpg" alt="avatar"
                                            class="img-responsive"></div>
                                    <div class="comment-content">
                                        <div class="comment-title">
                                            <h5 class="comment-author">Timothy Tyler</h5>
                                            <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                    class="day"> Dec 25, 2016</span></div>
                                        </div>
                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt
                                            labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                                        <button type="button" class="comment-btn btn btn-default">reply</button>
                                        <button type="button" class="comment-btn btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--  End .comment-section -->
                    <!--  Begin .form-reply-section -->

                    <div class="form-reply-section">
                        <div class="comment-title title-style01">
                            <h4>leave a reply</h4>
                        </div>
                        <form class="form-reply ui-form" action="#" method="post">
                            <div class="row no-gutter">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Your Name" class="form-control" type="text"
                                            title="Reply">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input placeholder="Email" class="form-control" type="email" title="Email">
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col-md-12">
                                    <textarea rows="5" placeholder="Comment" class="form-control" title="Comment"></textarea>
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-black">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--  End .form-reply-section -->
                </div>
                <!--========== END .COL-MD-8 ==========-->
                <!--========== BEGIN .COL-MD-4==========-->
                <div class="col-md-4">
                    <!--========== BEGIN #SIDEBAR-NEWSFEED ==========-->
                    <!-- Begin .block-title-2 -->
                    <div class="block-title-2">
                        <h3>Recent Posts</h3>
                    </div>
                    <!-- End .block-title-2 -->
                    <div class="sidebar-newsfeed">
                        <!-- Begin .newsfeed -->
                        <div class="newsfeed-1" style="position: relative; height: 315px; overflow: hidden;">
                            <ul style="margin: 0px; position: absolute; top: 0px;">



                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image04.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">Global Health</a></h4>
                                            <p class="ellipsis"><a href="#">Global health has been defined as an
                                                    area of study and research...</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image05.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">Woman in Mission Hills</a></h4>
                                            <p class="ellipsis"><a href="#">A woman were arrested after he
                                                    allegedly fired off from a car...</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image06.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">3 Years After Man's Death</a></h4>
                                            <p class="ellipsis"><a href="#">Mother hopes renewed reward will
                                                    help find her son’s killer...</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image01.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">Migrant Crisis</a></h4>
                                            <p class="ellipsis"><a href="#">The proposal involves resettling one
                                                    refugee in Europe for each one...</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image02.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">Smith's Team</a></h4>
                                            <p class="ellipsis"><a href="#">US Democratic presidential candidate
                                                    speaks with supporters...</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin: 0px;">
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full" src="img/news_370x185-image03.jpg"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">Total Eclipse</a></h4>
                                            <p class="ellipsis"><a href="#">Image caption in Indonesia was the
                                                    best place to witness the total...</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End .newsfeed -->
                    </div>
                    <!--========== END #SIDEBAR-NEWSFEED ==========-->
                    <!--========== BEGIN .TV SCHEDULE ==========-->
                    <div class="sidebar-schedule">
                        <!-- Begin .block-title-2 -->
                        <div class="block-title-2">
                            <h3><strong>TV</strong> Schedule</h3>
                        </div>
                        <!-- End .block-title-2 -->
                        <div id="sidebar-schedule-slider" class="owl-carousel owl-theme"
                            style="opacity: 1; display: block;">
                            <!-- Begin .schedule-slide -->
                            <div class="owl-wrapper-outer autoHeight" style="height: 337px;">
                                <div class="owl-wrapper"
                                    style="width: 2400px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px); transform-origin: 200px center; perspective-origin: 200px center;">
                                    <div class="owl-item" style="width: 400px;">
                                        <div class="sidebar-schedule-slide">
                                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                                    <div class="content">
                                                        <h3 class="hour-tag">18:00</h3>
                                                        <h4 class="sidebar-show-title bg-1">Around the World</h4>
                                                        <p>New global rules on firms' tax disclosure urged by economists
                                                        </p>
                                                    </div>
                                                    <img src="img/sidebar-schedule_slider-image01.jpg" alt="">
                                                </a> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 400px;">
                                        <div class="sidebar-schedule-slide">
                                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                                    <div class="content">
                                                        <h3 class="hour-tag">18:45</h3>
                                                        <h4 class="sidebar-show-title bg-1">Sport Headlines</h4>
                                                        <p>All the latest sports news from around the world.</p>
                                                    </div>
                                                    <img src="img/sidebar-schedule_slider-image02.jpg" alt="">
                                                </a> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 400px;">
                                        <div class="sidebar-schedule-slide">
                                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                                    <div class="content">
                                                        <h3 class="hour-tag">22:00</h3>
                                                        <h4 class="sidebar-show-title bg-1">Happening Now</h4>
                                                        <p>Kerry Thomas will take you to news when and where it happens.
                                                        </p>
                                                    </div>
                                                    <img src="img/sidebar-schedule_slider-image03.jpg" alt="">
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .schedule-slide -->
                            <!-- Begin .schedule-slide -->

                            <!-- End .schedule-slide -->
                            <!-- Begin .schedule-slide -->

                            <!-- End .schedule-slide -->
                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--========== END .TV SCHEDULE ==========-->
                    <!--========== BEGIN .SIDEBAR-POST ==========-->
                    <!-- Begin .title-style02 -->
                    <div class="title-style02">
                        <h3><strong>Political</strong> News</h3>
                    </div>
                    <!-- End .title-style02 -->
                    <div class="sidebar-post">
                        <ul>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image07.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>01</h3>
                                        <p><a href="#">How Do Non-Profits Affect The Larger Economy?</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image08.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>02</h3>
                                        <p><a href="#">A mixed business - features, merits and demerits...</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image09.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>03</h3>
                                        <p><a href="#">At least nine firefighters were injured when a massive
                                                explosion...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image10.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>04</h3>
                                        <p><a href="#">Soccer news, scores, stats, and features...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image11.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>05</h3>
                                        <p><a href="#">Divorce negotiations have intensified sources say...</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image12.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>06</h3>
                                        <p><a href="#">Browns Canyon, industrial town among monuments...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/news_370x185-image13.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h3>07</h3>
                                        <p> <a href="#">Star power and an increasing number of web-to-TV success
                                                stories...</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--========== END .SIDEBAR-POST ==========-->
                    <!-- Begin .sidebar-add-place -->
                    <div class="sidebar-add-place">
                        <a href="#" target="_blank"><img src="img/banner_400x270.jpg" alt=""></a>
                    </div>
                    <!-- End .sidebar-add-place -->
                    <!--========== BEGIN .SIDEBAR-CATEGORIES ==========-->
                    <!-- Begin .block-title-1 -->
                    <div class="block-title-1 center">
                        <h3>Categories</h3>
                    </div>
                    <!-- End .block-title-1 -->
                    <div class="sidebar-categories">
                        <ul class="list list-mark-1">
                            <li><a href="#">News</a> <span>09</span> </li>
                            <li><a href="#">Business</a> <span>11</span> </li>
                            <li><a href="#">Politics</a> <span>15</span> </li>
                            <li><a href="#">Health</a> <span>10</span> </li>
                            <li><a href="#">Travel</a> <span>17</span> </li>
                            <li><a href="#">Other</a> <span>97</span> </li>
                        </ul>
                    </div>
                    <!--========== END .SIDEBAR-CATEGORIES ==========-->

                    <!--========== BEGIN .SIDEBAR-REVIEWS==========-->
                    <!-- Begin .block-title-3 -->
                    <div class="block-title-3">
                        <h3>Latest Reviews</h3>
                    </div>
                    <!-- End .block-title-3 -->
                    <ul class="sidebar-reviews">
                        <li>
                            <div class="reviews-content">
                                <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                                <div class="post-meta-elements">
                                    <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>,
                                        <a href="#">Politics</a>
                                    </div>
                                    <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                    <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a
                                            href="#">Comments</a> </div>
                                </div>
                            </div>
                            <ul class="ranking-star">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </li>

                        <li>
                            <div class="reviews-content">
                                <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                                <div class="post-meta-elements">
                                    <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>,
                                        <a href="#">Politics</a>
                                    </div>
                                    <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                    <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a
                                            href="#">Comments</a> </div>
                                </div>
                                <ul class="ranking-star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="reviews-content">
                                <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                                <div class="post-meta-elements">
                                    <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>,
                                        <a href="#">Politics</a>
                                    </div>
                                    <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                    <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a
                                            href="#">Comments</a> </div>
                                </div>
                            </div>
                            <ul class="ranking-star">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </li>

                        <li>
                            <div class="reviews-content">
                                <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                                <div class="post-meta-elements">
                                    <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>,
                                        <a href="#">Politics</a>
                                    </div>
                                    <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                    <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a
                                            href="#">Comments</a> </div>
                                </div>
                            </div>
                            <ul class="ranking-star">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </li>
                    </ul>
                    <!--========== END .SIDEBAR-REVIEWS ==========-->

                    <!--========== BEGIN .CALENDAR==========-->
                    <div id="calendar" class="hasDatepicker">
                        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"
                            style="display: block;">
                            <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a
                                    class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click"
                                    title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a
                                    class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click"
                                    title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
                                <div class="ui-datepicker-title"><span
                                        class="ui-datepicker-month">April</span>&nbsp;<span
                                        class="ui-datepicker-year">2023</span></div>
                            </div>
                            <table class="ui-datepicker-calendar">
                                <thead>
                                    <tr>
                                        <th scope="col" class="ui-datepicker-week-end"><span
                                                title="Sunday">Su</span></th>
                                        <th scope="col"><span title="Monday">Mo</span></th>
                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                        <th scope="col"><span title="Wednesday">We</span></th>
                                        <th scope="col"><span title="Thursday">Th</span></th>
                                        <th scope="col"><span title="Friday">Fr</span></th>
                                        <th scope="col" class="ui-datepicker-week-end"><span
                                                title="Saturday">Sa</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">1</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">2</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">3</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">4</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">5</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">6</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">7</a></td>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">8</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">9</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">10</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">11</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">12</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">13</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">14</a></td>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">15</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">16</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">17</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">18</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">19</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">20</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">21</a></td>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">22</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today"
                                            data-handler="selectDay" data-event="click" data-month="3"
                                            data-year="2023"><a
                                                class="ui-state-default ui-state-highlight ui-state-active ui-state-hover"
                                                href="#">23</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">24</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">25</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">26</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">27</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click"
                                            data-month="3" data-year="2023"><a class="ui-state-default"
                                                href="#">28</a></td>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">29</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay"
                                            data-event="click" data-month="3" data-year="2023"><a
                                                class="ui-state-default" href="#">30</a></td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                        <td
                                            class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                            &nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                            <form class="form-horizontal" action="http://24hnews.via-theme.com/include/subscribe.php"
                                id="subscribeForm" method="POST">
                                <div class="input-group">
                                    <input title="Newsletter" class="form-control" name="email" type="email"
                                        id="address" placeholder="Enter Your Email Address"
                                        data-validate="validate(required, email)" required="">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-success">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <span id="result" class="alertMsg"></span>
                        </div>
                        <!-- End .sidebar-newsletter-form -->
                    </div>
                    <!--========== END #SIDEBAR-NEWSLETTER ==========-->
                    <!--========== BEGIN #SIDEBAR-SOCIAL-BUTTONS ==========-->
                    <div id="sidebar-social-icons">
                        <ul class="sidebar-social-icons">
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
                <!--========== END .COL-MD-4 ==========-->
            </div>
            <!-- Begin .add-place -->
            <div class="add-place"> <a href="#" target="_blank"><img src="img/banner_1248x100.jpg"
                        alt=""></a> </div>
            <!-- End .add-place -->
            <h2 class="title-style05 style-02">more headlines in our <span><a href="#">related posts</a></span>
            </h2>
            <!-- Begin .title-style05-bg -->
            <div class="center-title"> <span class="title-line-left"></span>
                <h4 class="title-style05 style-01">latest # news</h4>
                <span class="title-line-right"></span>
            </div>
            <!-- End .title-style05-bg -->
        </div>
        <!--========== END .CONTAINER ==========-->
    </section>
    <!--========== END .MODULE ==========-->
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
        <div class="container">
            <div class="row no-gutter">
                <!--========== BEGIN .COL-MD-12 ==========-->
                <div class="col-md-12">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-1">24h News</span></h3>
                        <h3 class="subtitle">TV and Radio/blog</h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        <div class="entry-block">
                            <div class="entry-image"><a class="img-link" href="#"><img
                                        class="img-responsive img-full" src="img/watch_800x400-image01.jpg"
                                        alt=""></a></div>
                            <div class="entry-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="#"><strong>Tara C. and Mark S.</strong></a></h3>
                                    <i class="fa fa-clock-o"></i> 24 Nov 2016 <span class="hour">11.25 PM</span>
                                </div>
                                <p><a href="#" target="_blank" class="external-link"><strong>Inspire a
                                            life-long love</strong> of theatre by taking your children shows... for
                                        kids.</a></p>
                                <p><a href="#" target="_blank" class="external-link"><strong>Based on the
                                            acclaimed novel,</strong> tells the untold story of the Witches of Oz and
                                        how one came to be called "good" and the other...</a></p>
                                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
                            </div>
                        </div>
                        <div class="entry-block">
                            <div class="entry-image"><a class="img-link" href="#"><img
                                        class="img-responsive img-full" src="img/24-tv-radio_800x400-image01.jpg"
                                        alt=""></a></div>
                            <div class="entry-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="#"><strong>Other shows</strong></a></h3>
                                    <i class="fa fa-clock-o"></i> 20 Nov 2016 <span class="hour">14.15 PM</span>
                                </div>
                                <p><a href="#" target="_blank" class="external-link"><strong> The economy's
                                            gradual</strong> but continued improvement is good news for pretty much
                                        everybody. Unless you work for a media organization.</a></p>
                                <p><a href="#" target="_blank" class="external-link"><strong>Despite the
                                            improving jobs numbers,</strong> in fact, echo talking points by the
                                        national debt...</a></p>
                                <div> <a href="24-news-store.html" target="_blank"><span
                                            class="read-more">24-News-Store</span></a> </div>
                            </div>
                        </div>
                        <div class="entry-block">
                            <div class="entry-image"><a class="img-link" href="#"><img
                                        class="img-responsive img-full" src="img/24-tv-radio_800x400-image02.jpg"
                                        alt=""></a></div>
                            <div class="entry-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="#"><strong>Ones to Watch.</strong></a></h3>
                                    <i class="fa fa-clock-o"></i> 24 Nov 2016 <span class="hour">12.06 PM</span>
                                </div>
                                <p><a href="#" target="_blank" class="external-link"><strong> 24h News</strong>
                                        Ones to Watch shines a spotlight on the up-and-coming creative talents set to be
                                        the next big names...</a> </p>
                                <p><a href="#" target="_blank" class="external-link"><strong>Parts of 24h
                                            News</strong> coverage beyond the daily news are produced as Special
                                        Reports, which attract sponsors...</a></p>
                                <div> <a href="watch-live.html" target="_blank"><span class="read-more">Watch Live
                                            24/7</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
                <!--========== END .COL-MD-12 ==========-->
            </div>
        </div>
    </section>
    <!--========== END .MODULE ==========-->
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
        <div class="container">
            <!--========== BEGIN SMALL-GALLERY ==========-->
            <!-- Begin .carousel-title -->
            <h3 class="carousel-title">News Carousel</h3>
            <!-- End .carousel-title -->
            <!-- Begin .gallery-slider owl-carousel -->
            <div id="small-gallery-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                <!-- Begin .small-gallery -->
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 4992px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image01.jpg" alt="">
                                <div class="post-content"> <a href="watch-live.html">Watch Live 24/7</a>
                                    <p><a href="watch-live.html">What this generation's watching.</a></p>
                                    <i class="fa fa-clock-o"></i><span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image02.jpg" alt="">
                                <div class="post-content"> <a href="24-tv-radio.html">24 TV &amp; Radio </a>
                                    <p><a href="24-tv-radio.html">Sport station could follow 24h3 in going off air.</a>
                                    </p>
                                    <i class="fa fa-clock-o"></i><span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image03.jpg" alt="">
                                <div class="post-content"> <a href="web-shows.html">Web Shows </a>
                                    <p><a href="web-shows.html">Promoted Links From around the Web.</a></p>
                                    <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image04.jpg" alt="">
                                <div class="post-content"> <a href="24-news-store.html">News Store </a>
                                    <p><a href="24-news-store.html">Everything | Stories | Interactives | iReport |</a>
                                    </p>
                                    <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image05.jpg" alt="">
                                <div class="post-content"> <a href="business.html">Business </a>
                                    <p><a href="business.html">the Co.hired advisers at investment bank </a></p>
                                    <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 416px;">
                            <div class="small-gallery"> <img class="img-responsive"
                                    src="img/news_108x108_slider-image06.jpg" alt="">
                                <div class="post-content"> <a href="business.html">Tech-Science </a>
                                    <p><a href="business.html">With SkinTrack, Your Arm is the Touchpad</a></p>
                                    <i class="fa fa-clock-o"></i> <span class="day"> Fri, 20 Nov, 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="owl-controls clickable">
                    <div class="owl-pagination">
                        <div class="owl-page active"><span class=""></span></div>
                        <div class="owl-page"><span class=""></span></div>
                    </div>
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- End .gallery-slider owl-carousel -->
            <!--========== END SMALL-GALLERY ==========-->
            <!-- Begin .bottom-add-place-->
            <div class="bottom-add-place"> <a
                    href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179"
                    target="_blank"><img src="img/banner_1248x100.jpg" alt=""></a> </div>
            <!-- End .bottom-add-place -->
        </div>
        <!--========== END .CONTAINER ==========-->
    </section>
    <!--========== END .MODULE ==========-->
</div>

@include('website.partials.footer')
