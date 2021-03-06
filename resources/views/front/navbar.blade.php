<header id="header">

    <!-- <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div> -->

    <div class="container">

    <header id="header">

    <!-- <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div> -->

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto"><span><img src="{{url('/front/img/techyad.png')}}"></span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-left d-none d-lg-block navbar-expand-lg navbar-light bg-light">
            <ul>
                <li class="active"><a href="{{route('home')}}">خانه</a></li>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#services">خدمات</a></li>
                <li><a href="#portfolio">نمونه کار ما</a></li>
                <li><a href="#team">تیم ما</a></li>
                <li><a href="{{route('articles')}}">مطالب</a></li>
                <li class="drop-down"><a href="">منوی کاربری</a>
                    <ul>
                        {{--@if(!auth::guest())--}}
                        {{--<li>--}}
                        {{--<form class="form-group" action="{{route('logout')}}" method="post">--}}
                        {{--@csrf--}}
                        {{--<button class="btn btn-success" type="submit">خروج</button>--}}
                        {{--</form>--}}
                        {{--</li>--}}
                        {{--@else--}}
                        {{--<li><a href="{{route('register')}}">ثبت نام</a></li>--}}
                        {{--<li><a href="{{route('login')}}">ورود</a></li>--}}
                        {{--@endif--}}
                        @auth
                        <li><a href="{{route('profile',Auth::user()->id)}}">پروفایل</a></li>
                        @if(Auth::user()->role==1)
                            <li><a href="{{route('admin.index')}}" target="_blank">پنل مدیریت</a></li>

                        @endif
                        <li>
                            <form class="form-group" action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="btn btn-success" type="submit">خروج</button>
                            </form>
                        </li>

                        @else
                            <li><a href="{{route('register')}}">ثبت نام</a></li>
                            <li><a href="{{route('login')}}">ورود</a></li>
                            @endauth
                    </ul>
                </li>


                <li><a href="#footer">تماس با ما</a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header>
</header>