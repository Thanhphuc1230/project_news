@include('website.partials.head')
@include('website.partials.header')
<!-- Begin .breadcrumb-line -->
<div class="container">
    <!-- Begin .breadcrumb-line -->
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li>
                <h5><a href="{{ route('website.index') }}">Home</a></h5>
            </li>
            <li class="active">{{ $new_category['data']['new_category']->name_cate }}</li>
        </ul>
    </div>
    <!-- End .breadcrumb-line -->
</div>
<!-- End .breadcrumb-line -->
<section class="module highlight" style="margin-top: -40px">
    <div class="container">
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-8 ==========-->
            <div class="col-md-8">
                <div class="module-title">
                    <h3 class="title"><span
                            class="bg-12">{{ $new_category['data']['new_category']->name_cate }}</span></h3>
                </div>
                <!--========== BEGIN .ARTICLE ==========-->
                <div class="article">
                    @foreach ($new_top as $item)
                        <div class="entry-block-small">
                            <div class="entry-image"><a class="img-link" href="#"><img
                                        class="img-responsive img-full"
                                        src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a></div>
                            <div class="entry-content">
                                <h3><a href="#">{{ Str::words($item->title, 12) }}</a></h3>
                                <br>
                                <div class="post-meta-elements">
                                    <div class="post-meta-date"> <i
                                            class="fa fa-calendar"></i>{{ date('d-m-Y ', strtotime($item->created_at)) }}
                                    </div>
                                </div>
                                <p><a href="#" target="_blank"
                                        class="external-link">{{ Str::words($item->intro, 15) }}</a></p>
                                <div> <a href="#"><span class="read-more">Continue reading</span></a> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--========== END ARTICLE ==========-->
            </div>
            <!--========== END.COL-MD-8 ==========-->
            <!--========== BEGIN .COL-MD-4 ==========-->
            <div class="col-md-4">
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
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image01.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Africa</a></h4>
                                        <p class="ellipsis"><a href="#">The Hybrid Airship can take off and land
                                                without a runway.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image02.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from America</a></h4>
                                        <p class="ellipsis"><a href="#">The bear Ajayu, after it was beaten with
                                                sticks and stones.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image03.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Middle East</a></h4>
                                        <p class="ellipsis"><a href="#">It wasn't clear how many people don't get
                                                service.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image07.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Africa</a></h4>
                                        <p class="ellipsis"><a href="#">The Hybrid Airship can take off and land
                                                without a runway.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image08.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from America</a></h4>
                                        <p class="ellipsis"><a href="#">The bear Ajayu, after it was beaten with
                                                sticks and stones.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image09.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Middle East</a></h4>
                                        <p class="ellipsis"><a href="#">It wasn't clear how many people don't
                                                get service.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image10.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Asia</a></h4>
                                        <p class="ellipsis"><a href="#">South Asian workers in Gulf fear rising
                                                temperature.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image11.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Europe</a></h4>
                                        <p class="ellipsis"><a href="#">Pripyat, the abandoned city near the
                                                Chernobyl Nuclear Power Station.</a></p>
                                    </div>
                                </div>
                            </li>
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img
                                                class="img-responsive img-full" src="img/world_370x185-image12.jpg"
                                                alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">More from Antarctica</a></h4>
                                        <p class="ellipsis"><a href="#">It's the coldest desert of the world,
                                                but the tourists are making their...</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End .newsfeed -->
                </div>
                <!--========== END .SIDEBAR-NEWSFEED =========-->
            </div>
            <!--========== END.COL-MD-4 ==========-->
        </div>
    </div>
</section>


<!--========== BEGIN .MODULE ==========-->
<section class="module highlight">
    <div class="container">
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-6 ==========-->

            <div class="col-sm-6 col-md-6">
                <!--========== BEGIN .NEWS ==========-->
                <div class="news">
                    <!-- Begin .item -->
                    @foreach ($new_mid_left as $item)
                        <div class="item">
                            <div class="item-image-1"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                        class="img-responsive img-full"
                                        src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a><span><a
                                        class="label-1"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'id' => $item['category']->id_category]) }}">{{ $item['category']->name_cate }}</a></span>
                            </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ Str::words($item->title, 12) }}</strong>
                                        </a></h3>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                        class="external-link">{{ Str::words($item->intro, 12) }}</a>
                                </p>

                                <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'id' => $item['category']->id_category]) }}"
                                        target="_blank"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End .item -->

                </div>
                <!--========== END .NEWS ==========-->
            </div>
            <!--========== END .COL-MD-6 ==========-->
            <!--========== BEGIN .COL-MD-6 ==========-->
            <div class="col-sm-6 col-md-6">
                <!--========== BEGIN .NEWS==========-->
                <div class="news">
                    <!-- Begin .item-->
                    @foreach ($new_mid_right as $item)
                        <div class="item">
                            <div class="item-image-1"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                        class="img-responsive img-full"
                                        src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a><span><a
                                        class="label-1"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'id' => $item['category']->id_category]) }}">{{ $item['category']->name_cate }}</a></span>
                            </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ Str::words($item->title, 12) }}</strong>
                                        </a></h3>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                        class="external-link">{{ Str::words($item->intro, 12) }}</a>
                                </p>

                                <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'id' => $item['category']->id_category]) }}"
                                        target="_blank"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- End .item-->
                    @endforeach
                </div>
                <!--========== END .NEWS ==========-->
            </div>
            <!--========== END .COL-MD-6 ==========-->
        </div>
    </div>
</section>
<!--========== END .MODULE ==========-->
<!--========== BEGIN .MODULE ==========-->
<section class="module">
    <div class="container">
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-8 ==========-->
            <div class="col-md-8">
                <!--========== BEGIN .NEWS ==========-->
                <div class="news">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-11">Tin cùng chuyên đề</span></h3>
                    </div>
                    @foreach ($new_mid as $item)
                        <!-- Begin .item-->
                        <div class="item">
                            <div class="item-image-2"><a class="img-link" href="#"><img
                                        class="img-responsive img-full"
                                        src="{{ asset('images/news/' . $item->avatar) }}" alt=""></a><span><a
                                        class="label-2" href="politics.html">{{ $item['category']->name_cate }}</a></span> </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="#"><strong>{{ $item->title }}</strong></a></h3>
                                </div>
                                <p><a href="#">{{ $item->intro }}</a></p>

                                <div> <a href="politics.html" target="_blank"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a> </div>
                            </div>
                        </div>
                        <!-- End .item-->
                    @endforeach

                </div>
                <!--========== End .NEWS ==========-->
            </div>
            <!--========== End .COL-MD-8 ==========-->
            <!--========== BEGIN .COL-MD-4 ==========-->
            <div class="col-md-4">
                <!-- Begin .block-title-1 -->
                <div class="block-title-1">
                    <h3><a href="#"><strong>24h News</strong> Feed</a></h3>
                </div>
                <!-- End .block-title-1 -->
                <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->
                <div class="sidebar-newsfeed">
                    <!-- Begin .newsfeed -->
                    <div class="newsfeed-3">
                        <ul>
                            @for ($i = 1; $i <= 6; $i++)
                                <li>
                                    <div class="item">
                                        <div class="item-image"><a class="img-link" href="#"><img
                                                    class="img-responsive img-full"
                                                    src="{{ asset('website/img/index_370x185-image01.jpg ') }}"
                                                    alt=""></a></div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a href="#">From propaganda to pop artist</a>
                                            </h4>
                                            <p class="ellipsis"><a href="#">A gift for drawing led to a
                                                    prestigious career as artist...</a></p>
                                        </div>
                                    </div>
                                </li>
                            @endfor

                        </ul>
                    </div>
                    <!-- End .newsfeed -->
                </div>
                <!--========== END .SIDEBAR-NEWSFEED ==========-->
            </div>
            <!--========== END .COL-MD-4 ==========-->
        </div>
    </div>
</section>
@include('website.partials.boot_new')
@include('website.partials.footer')
