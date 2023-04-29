@include('website.partials.head')
@include('website.partials.header')
<div id="main-section">
    <div class="container header_category">
        <!-- Begin .breadcrumb-line -->
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>
                    <h5><a
                            href="{{ route('website.category_news', ['name_cate' => Str::of($category_header['category']->name_cate)->slug('-'), 'id' => $category_header['category']->id_category]) }}">{{ $category_header['category']->name_cate }}</a>
                    </h5>
                </li>
                <li class="active">{{ $category_header['category_child']->name_cate }}</li>
            </ul>
        </div>
        <!-- End .breadcrumb-line -->
    </div>
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">

        <div class="container">
            <!--========== BEGIN .ROW ==========-->
            <div class="row no-gutter">
                <!--========== BEGIN .COL-MD-8 ==========-->
                <div class="col-md-8">
                    <!--========== BEGIN .POST ==========-->
                    <div class="post post-full clearfix title_new">
                        @foreach ($detail_new as $item)
                            <div class="entry-title">
                                <h2 class="entry-title">{{ $item->title }}</h2>
                            </div>
                            <div class="entry-main">

                                <div class="post-meta-elements">
                                    <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By
                                            {{ $item->author }}</a> </div>
                                    <div class="post-meta-date"> <i
                                            class="fa fa-calendar"></i>{{ date('d-m-Y h:i A', strtotime($item->created_at)) }}
                                    </div>
                                    <div class="post-meta-comments"><i class="fa fa-eye" aria-hidden="true"></i>23
                                        Comments
                                    </div>
                                    <div class="post-meta-comments"> <i class="fas fa-eye"></i>
                                        {{ $item->new_view }} views
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <div class="entry-content">
                                    <p><h3 >{{ $item->intro }}</h3> </p>
                                    <p>{!! $item->content !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--  End .post -->

                    <!--  Begin .comment-section -->
                    <div class="comment-section">
                        <!-- Begin .title-style01 -->
                        <div class="comment-title title-style01">
                            <h4>{{ $count_comments }} Comments</h4>
                        </div>
                        <!-- End .title-style01 -->
                        <ul class="comments-list">
                            @foreach ($comments_user as $comment)
                                <li>
                                    <div class="comment clearfix">
                                        @php
                                            $avatar = !empty($comment->avatar) ? $user->avatar : 'default_user.png';
                                        @endphp
                                        <div class="avatar"><img src="{{ asset('images/users/' . $avatar) }}"
                                                alt="avatar" class="img-responsive"></div>
                                        <div class="comment-content">
                                            <div class="comment-title">
                                                <h5 class="comment-author">{{ $comment->fullname }}</h5>
                                                <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                        class="day">{{ date('d-m-Y h:i A', strtotime($comment->created_at)) }}</span>
                                                </div>
                                            </div>
                                            <p>{{ $comment->comment }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  End .comment-section -->
                    <!--  Begin .form-reply-section -->

                    <div class="form-reply-section">
                        <div class="comment-title title-style01">
                            <h4>leave a reply</h4>
                        </div>
                        <form class="form-reply ui-form"
                            action="{{ route('website.postComment', ['uuidOfNew' => $item->uuid]) }}" method="post">
                            @csrf
                            <div class="row no-gutter">
                                <div class="col-md-12">
                                    <textarea rows="5" placeholder="Comment" class="form-control" name="comments" title="Comment"></textarea>
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col-md-12">
                                    @if (Auth::user())
                                        <button class="btn btn-primary btn-black" type="submit">Post Comment</button>
                                    @endif
                                    @if (!Auth::user())
                                        <div class="cart_button">
                                            <a class="btn btn-primary btn-black" type="button"
                                                href="{{ route('website.checkUser') }}">Post
                                                Comment</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  End .form-reply-section -->
                </div>
                <!--========== END .COL-MD-8 ==========-->
                <!--========== BEGIN .COL-MD-4==========-->
                <div class="col-md-4">
                    <div class="title-style02">
                        <h3><strong>Tin tức nổi bật</strong> </h3>
                    </div>
                    <!-- End .title-style02 -->
                    <div class="sidebar-post">
                        <ul>
                            @foreach ($news_updated as $item)
                                <li>
                                    <div class="item">
                                        <div class="item-image"><a class="img-link"
                                                href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                                    class="img-responsive img-full"
                                                    src="{{ asset('images/news/' . $item->avatar) }}"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h3>{{ $loop->iteration }}</h3>
                                            <p><a
                                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}">{{ $item->title }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--========== END .SIDEBAR-POST ==========-->
                    <!--========== BEGIN .SIDEBAR-CATEGORIES ==========-->
                    <!-- Begin .block-title-1 -->
                    <div class="block-title-1 center">
                        <h3>Chủ đề tin tức</h3>
                    </div>
                    <!-- End .block-title-1 -->
                    <div class="sidebar-categories">
                        <ul class="list list-mark-1">
                            @foreach ($new_header as $item)
                                <li><a
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item->name_cate)->slug('-'), 'id' => $item->id_category]) }}">{{ $item->name_cate }}</a>
                                </li>
                            @endforeach
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
                                            href="#">Comments</a>
                                    </div>
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
                                            href="#">Comments</a>
                                    </div>
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
                                            href="#">Comments</a>
                                    </div>
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
                                            href="#">Comments</a>
                                    </div>
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
                        <h3 class="subtitle">Các tin tức liên quan</h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($featured_posts as $item)
                            <div class="entry-block">
                                <div class="entry-image"><a class="img-link"
                                        href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                            class="img-responsive img-full"
                                            src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a>
                                </div>
                                <div class="entry-content">
                                    <div class="title-left title-style04 underline04">
                                        <h3><a
                                                href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ Str::words($item->title, 15) }}</strong></a>
                                        </h3>
                                        <i
                                            class="fa fa-clock-o"></i>{{ date('d-m-Y ', strtotime($item->created_at)) }}<span
                                            class="hour">{{ date('h:i A', strtotime($item->created_at)) }}</span>
                                    </div>

                                    <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                            class="external-link">{{ Str::words($item->intro, 30) }}</a></p>
                                    <div> <a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><span
                                                class="read-more">Continue reading</span></a> </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
                <!--========== END .COL-MD-12 ==========-->
            </div>
        </div>
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
                        <h3 class="subtitle">Các tin tức mới nhất</h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($featured_posts_bot as $item)
                            <div class="entry-block">
                                <div class="entry-image"><a class="img-link"
                                        href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                            class="img-responsive img-full"
                                            src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a>
                                </div>
                                <div class="entry-content">
                                    <div class="title-left title-style04 underline04">
                                        <h3><a
                                                href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ Str::words($item->title, 15) }}</strong></a>
                                        </h3>
                                        <i
                                            class="fa fa-clock-o"></i>{{ date('d-m-Y ', strtotime($item->created_at)) }}<span
                                            class="hour">{{ date('h:i A', strtotime($item->created_at)) }}</span>
                                    </div>

                                    <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                            class="external-link">{{ Str::words($item->intro, 30) }}</a></p>
                                    <div> <a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><span
                                                class="read-more">Continue reading</span></a> </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
                <!--========== END .COL-MD-12 ==========-->
            </div>
        </div>
    </section>
    <!--========== END .MODULE ==========-->
</div>

@include('website.partials.footer')
