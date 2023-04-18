<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
    <a class="large_logo" ><img src="{{ asset('website/assets/img/logo/PHONE STORE_free-file (3).png') }}" alt=""></a>
    <a class="small_logo" ><img src="{{ asset('style/img/mini_logo.png') }}" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('style/img/menu-icon/4.svg') }}" alt="">
                </div>
                <div class="nav_title">
                    <span>Hello </span>
                </div>
            </a>
        </li>
    <li class="">
    <a class="has-arrow"  aria-expanded="false">
    <div class="nav_icon_small">
    <img src="{{ asset('style/img/menu-icon/dashboard.svg') }}" alt="">
    </div>
    <div class="nav_title">
    <span>Page</span>
    </div>
    </a>
    <ul>
    <li><a href="" target="__blank">Trang chủ</a></li>
    </ul>
    </li>
    <li class="">
        <a aria-expanded="false" href="{{route('admin.categories.index')}}">
            <div class="nav_icon_small">
                <img src="{{ asset('style/img/menu-icon/4.svg') }}" alt="">
            </div>
            <div class="nav_title">
                <span>Category </span>
            </div>
        </a>
    </li>
    <li class="">
        <a aria-expanded="false" href="{{route('admin.news.index')}}">
            <div class="nav_icon_small">
                <img src="{{ asset('style/img/menu-icon/4.svg') }}" alt="">
            </div>
            <div class="nav_title">
                <span>News</span>
            </div>
        </a>
    </li>
    <li class="">
        <a aria-expanded="false" href="{{route('admin.users.index')}}" >
            <div class="nav_icon_small">
                <img src="{{ asset('style/img/menu-icon/4.svg') }}" alt="">
            </div>
            <div class="nav_title">
                <span>User</span>
            </div>
        </a>
    </li>
    <li class="">
        <a aria-expanded="false" href="{{route('logout')}}" >
            <div class="nav_icon_small">
                <img src="{{ asset('style/img/menu-icon/4.svg') }}" alt="">
            </div>
            <div class="nav_title">
                <span>Logout</span>
            </div>
        </a>
    </li>
   
  
    
    
    
   
    
    
    
    
    
    
    </ul>
    </nav>