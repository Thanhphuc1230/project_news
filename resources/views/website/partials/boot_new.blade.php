<section class="module highlight">
    <div class="container">
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-8 ==========-->
            <div class="col-md-8">
                <div class="container">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-1">Thời sự</span></h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($boot_new['local_news'] as $local)
                        <div class="entry-block-small">
                            <div class="entry-image"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $local->uuid]) }}"><img @php if
                                        (substr($local->avatar, 0, 8) === "https://") {
                                    echo 'src="'. $local->avatar.'"';
                                    } else {
                                    echo 'src="' . asset('images/news/'.$local->avatar) . '" ';
                                    } @endphp
                                    alt="" class="img-responsive img-full"></a><span><a class="label-1"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($local['category']->name_cate)->slug('-'), 'uuid' => $local['category']->uuid]) }}">{{
                                        $local['category']->name_cate }}</a></span>
                            </div>
                            <div class="entry-content">
                                <h3><a href="{{ route('website.detailNew', ['uuid' => $local->uuid]) }}">{{
                                        Str::words($local->title, 10) }}</a>
                                </h3>
                                <br>
                                <div class="post-meta-elements">
                                    <div class="post-meta-date"> <i class="fa fa-calendar"></i>{{ date('d-m-Y ',
                                        strtotime($local['category']->created_at)) }}
                                    </div>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $local->uuid]) }}" target="_blank"
                                        class="external-link">{{ Str::words($local->intro, 15) }}</a>
                                </p>

                                <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($local['category']->name_cate)->slug('-'), 'uuid' => $local['category']->uuid]) }}"
                                        target="_blank"><span class="read-more">{{ $local['category']->name_cate
                                            }}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
                <div class="container">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-1">Công nghệ</span></h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($boot_new['law_news'] as $law)
                        <div class="entry-block-small">
                            <div class="entry-image"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}"><img @php if
                                        (substr($law->avatar, 0, 8) === "https://") {
                                    echo 'src="'. $law->avatar.'"';
                                    } else {
                                    echo 'src="' . asset('images/news/'.$law->avatar) . '" ';
                                    } @endphp
                                    alt="" class="img-responsive img-full"></a><span><a class="label-1"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($law['category']->name_cate)->slug('-'), 'uuid' => $local['category']->uuid]) }}">{{
                                        $law['category']->name_cate }}</a></span>
                            </div>
                            <div class="entry-content">
                                <h3><a href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}">{{
                                        Str::words($law->title, 10) }}</a>
                                </h3>
                                <br>
                                <div class="post-meta-elements">
                                    <div class="post-meta-date"> <i class="fa fa-calendar"></i>{{ date('d-m-Y ',
                                        strtotime($law->created_at)) }}
                                    </div>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $law->uuid]) }}" target="_blank"
                                        class="external-link">{{ Str::words($law->intro, 15) }}</a>
                                </p>

                                <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($law['category']->name_cate)->slug('-'), 'uuid' => $local['category']->uuid]) }}"
                                        target="_blank"><span class="read-more">{{ $law['category']->name_cate
                                            }}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
                <div class="container">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-1">Sức khỏe</span></h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        @foreach ($boot_new['health_news'] as $health)
                        <div class="entry-block-small">
                            <div class="entry-image"><a class="img-link"
                                    href="{{ route('website.detailNew', ['uuid' => $health->uuid]) }}"><img @php if
                                        (substr($health->avatar, 0, 8) === "https://") {
                                    echo 'src="'. $health->avatar.'"';
                                    } else {
                                    echo 'src="' . asset('images/news/'.$health->avatar) . '" ';
                                    } @endphp
                                    alt="" class="img-responsive img-full"></a><span><a class="label-1"
                                        href="{{ route('website.category_news', ['name_cate' => Str::of($health['category']->name_cate)->slug('-'), 'uuid' => $health['category']->uuid]) }}">{{
                                        $health['category']->name_cate }}</a></span>
                            </div>
                            <div class="entry-content">
                                <h3><a href="{{ route('website.detailNew', ['uuid' => $health->uuid]) }}">{{
                                        Str::words($health->title, 10) }}</a>
                                </h3>
                                <br>
                                <div class="post-meta-elements">
                                    <div class="post-meta-date"> <i class="fa fa-calendar"></i>{{ date('d-m-Y ',
                                        strtotime($health->created_at)) }}
                                    </div>
                                </div>
                                <p><a href="{{ route('website.detailNew', ['uuid' => $health->uuid]) }}" target="_blank"
                                        class="external-link">{{ Str::words($health->intro, 15) }}</a>
                                </p>

                                <div><a href="{{ route('website.category_news', ['name_cate' => Str::of($health['category']->name_cate)->slug('-'), 'uuid' => $health['category']->uuid]) }}"
                                        target="_blank"><span class="read-more">{{ $health['category']->name_cate
                                            }}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--========== END .ARTICLE ==========-->
                </div>
            </div>
            <!--========== END .COL-MD-8 ==========-->
            <!--========== BEGIN .COL-MD-4 ==========-->
            <div class="col-md-4">
                <!-- Begin .title-style02 -->
                <div class="title-style02">
                    <h3><strong>Du lịch</strong></h3>
                </div>
                <!-- End .title-style02 -->
                <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->
                <div class="sidebar-newsfeed">
                    <!-- Begin .newsfeed -->
                    <div class="newsfeed-3" style="position: relative; height: 525px; overflow: hidden;">
                        <ul style="margin: 0px; position: absolute; top: 0px;">
                            @foreach ($boot_new['travel_news'] as $travel)
                            <li style="margin: 0px;">
                                <div class="item">
                                    <div class="item-image"><a class="img-link"
                                            href="{{ route('website.detailNew', ['uuid' => $travel->uuid]) }}"><img
                                                class="img-responsive img-full" @php if (substr($travel->avatar, 0, 8)
                                            === "https://") {
                                            echo 'src="'. $travel->avatar.'"';
                                            } else {
                                            echo 'src="' . asset('images/news/'.$travel->avatar) . '" ';
                                            } @endphp
                                            alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a
                                                href="{{ route('website.detailNew', ['uuid' => $travel->uuid]) }}">{{
                                                Str::words($travel->title, 15) }}</a>
                                        </h4>
                                        <p class="ellipsis"><a
                                                href="{{ route('website.detailNew', ['uuid' => $travel->uuid]) }}">{{
                                                Str::words($travel->intro, 15) }}</a>
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