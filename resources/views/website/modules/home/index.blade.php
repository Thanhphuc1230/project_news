@extends('website.master')
@section('module','Trang chủ')
@section('content')
@include('website.partials.search')
<section class="module highlight">
    <div class="container">
        <div class="module-title">
            <h3 class="title"><span class="bg-1">Hot news</span></h3>
            <h3 class="subtitle">Tin tức mới nhất</h3>
        </div>
        <!--========== BEGIN .ROW ==========-->
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-6 ==========-->
            <div class="col-sm-6 col-md-6">
                <!--========== BEGIN .NEWS ==========-->
                <div class="news">
                    <!-- Begin .item -->
                    @foreach ($breaking_news_left as $item)
                        <div class="item">
                            <div class="item-image-1"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                        class="img-responsive img-full"
                                        @php if (substr($item->avatar, 0, 8) === "https://")
                                {
                                echo 'src="'. $item->avatar.'"';
                                } else {
                                echo 'src="' . asset('images/news/'.$item->avatar) . '" ';
                                } @endphp
                                        alt=""></a><span><a class="label-5"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}">{{ $item['category']->name_cate }}</a></span>
                            </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ html_entity_decode(Str::words($item->title, 15)) }}
                                            </strong></a>
                                    </h3>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                        class="external-link">{{ Str::words($item->intro, 15) }}</a>
                                </p>
                                <div><a
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a></div>
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
                    @foreach ($breaking_news_right as $item)
                        <div class="item">
                            <div class="item-image-1"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                        class="img-responsive img-full" loading="lazy"
                                        @php if (substr($item->avatar, 0, 8) === "https://")
                                {
                                echo 'src="'. $item->avatar.'"';
                                } else {
                                echo 'src="' . asset('images/news/'.$item->avatar) . '" ';
                                } @endphp
                                        alt=""></a><span><a class="label-5"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}">{{ $item['category']->name_cate }}</a></span>
                            </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ html_entity_decode(Str::words($item->title, 15)) }}
                                            </strong></a>
                                    </h3>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"
                                        class="external-link">{{ Str::words($item->intro, 15) }}</a>
                                </p>
                                <div><a
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a></div>
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
                        <h3 class="title"><span class="bg-11">Thế Giới</span></h3>
                        <h3 class="subtitle">Tin tức mới nhất</h3>
                    </div>
                    @foreach ($nation_news as $item)
                        <!-- Begin .item-->
                        <div class="item">
                            <div class="item-image-2"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                        class="img-responsive img-full" loading="lazy"
                                        @php if (substr($item->avatar, 0, 8) === "https://")
                                {
                                echo 'src="'. $item->avatar.'"';
                                } else {
                                echo 'src="' . asset('images/news/'.$item->avatar) . '" ';
                                } @endphp
                                        alt=""></a><span><a class="label-2"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}">{{ $item['category']->name_cate }}</a></span>
                            </div>
                            <div class="item-content">
                                <div class="title-left title-style04 underline04">
                                    <h3><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><strong>{{ html_entity_decode(Str::words($item->title, 15)) }}</strong>
                                        </a></h3>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}">
                                        {{ $item->intro }}</a></p>

                                <div> <a href="{{ route('website.category_news', ['name_cate' => Str::of($item['category']->name_cate)->slug('-'), 'uuid' => $item['category']->uuid]) }}"
                                        target="_blank"><span
                                            class="read-more">{{ $item['category']->name_cate }}</span></a>
                                </div>
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
                    <h3><strong>Top tin tức</strong></h3>
                </div>
                <!-- End .block-title-1 -->
                <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->
                <div class="sidebar-newsfeed">
                    <!-- Begin .newsfeed -->
                    <div class="newsfeed-3">
                        <ul>
                            @foreach ($boot_new['most_views'] as $item)
                                <li>
                                    <div class="item">
                                        <div class="item-image"><a class="img-link"
                                                href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}"><img
                                                    class="img-responsive img-full" loading="lazy"
                                                    @php if (substr($item->avatar, 0, 8) ===
                                            "https://") {
                                            echo 'src="'. $item->avatar.'"';
                                            } else {
                                            echo 'src="' . asset('images/news/'.$item->avatar) . '" ';
                                            } @endphp
                                                    alt=""></a>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="ellipsis"><a
                                                    href="{{ route('website.detailNew', ['uuid' => $item->uuid]) }}">{{ html_entity_decode($item->title) }}</a>
                                            </h4>
                                            <p class="ellipsis"><i class="fas fa-eye"></i> {{ $item->new_view }} views
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

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
<section class="module">
    <div class="container">
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-8 ==========-->
            <div class="col-md-12">
                <div class="container">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-4">Pháp luật</span></h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($law_news as $law)
                            <div class="entry-block-small">
                                <div class="entry-image"><a class="img-link"
                                        href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}"><img
                                            @php if
                                        (substr($law->avatar, 0, 8) === "https://") {
                                    echo 'src="'. $law->avatar.'"';
                                    } else {
                                    echo 'src="' . asset('images/news/'.$law->avatar) . '" ';
                                    } @endphp
                                            alt="" class="img-responsive img-full"
                                            loading="lazy"></a><span><a class="label-1"
                                            href="{{ route('website.category_news', ['name_cate' => Str::of($law['category']->name_cate)->slug('-'), 'uuid' => $law['category']->uuid]) }}">{{ $law['category']->name_cate }}</a></span>
                                </div>
                                <div class="entry-content">
                                    <h3><a
                                            href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}">{{ html_entity_decode(Str::words($law->title, 10)) }}</a>
                                    </h3>
                                    <br>
                                    <div class="post-meta-elements">
                                        <div class="post-meta-date"> <i
                                                class="fa fa-calendar"></i>{{ date('d-m-Y ', strtotime($law->created_at)) }}
                                        </div>
                                    </div>
                                    <p><a href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}"
                                            target="_blank"
                                            class="external-link">{{ Str::words($law->intro, 15) }}</a>
                                    </p>

                                    <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($law['category']->name_cate)->slug('-'), 'uuid' => $law['category']->uuid]) }}"
                                            target="_blank"><span
                                                class="read-more">{{ $law['category']->name_cate }}</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="module-title">
                        <h3 class="title"><span class="bg-11">Kinh doanh</span></h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                </div>
                <div class="container">
                    <div class="article">
                        @foreach ($business_news as $business)
                            <div class="entry-block-small">
                                <div class="entry-image"><a class="img-link"
                                        href="{{ route('website.detailNew', ['uuid' => $business->uuid]) }}"><img
                                            @php if
                                    (substr($business->avatar, 0, 8) === "https://") {
                                echo 'src="'. $business->avatar.'"';
                                } else {
                                echo 'src="' . asset('images/news/'.$business->avatar) . '" ';
                                } @endphp
                                            alt="" class="img-responsive img-full"
                                            loading="lazy"></a><span><a class="label-1"
                                            href="{{ route('website.category_news', ['name_cate' => Str::of($business['category']->name_cate)->slug('-'), 'uuid' => $business['category']->uuid]) }}">{{ $business['category']->name_cate }}</a></span>
                                </div>
                                <div class="entry-content">
                                    <h3><a
                                            href="{{ route('website.detailNew', ['uuid' => $business->uuid]) }}">{{ html_entity_decode(Str::words($business->title, 10)) }}</a>
                                    </h3>
                                    <br>
                                    <div class="post-meta-elements">
                                        <div class="post-meta-date"> <i
                                                class="fa fa-calendar"></i>{{ date('d-m-Y ', strtotime($business->created_at)) }}
                                        </div>
                                    </div>
                                    <p><a href="{{ route('website.detailNew', ['uuid' => $business->uuid]) }}"
                                            target="_blank"
                                            class="external-link">{{ Str::words($business->intro, 15) }}</a>
                                    </p>

                                    <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($business['category']->name_cate)->slug('-'), 'uuid' => $business['category']->uuid]) }}"
                                            target="_blank"><span
                                                class="read-more">{{ $business['category']->name_cate }}</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
            </div>
            <!--========== END .COL-MD-8 ==========-->

        </div>
    </div>
</section>
@include('website.partials.boot_new')
@endsection
