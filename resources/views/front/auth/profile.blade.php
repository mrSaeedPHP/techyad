<body dir="rtl">
@extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
            </ol>
        </nav>
        @include('front.messages')
        <div class="d-flex justify-content-center">

            <form action="{{route('profileupdate',$user->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">نام و نام خانوادگی</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{$user->name}}">
                    @error('name')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">ایمیل</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{$user->email}}">
                    @error('email')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">تلفن همراه</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                           value="{{$user->phone}}">
                    @error('phone')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">رمز ورود</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">تکرار رمز ورود</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                           name="password_confirmation">
                    @error('password_confirmation')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="active"></label>
                    <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
                </div>
            </form>

        </div>
        {{--<nav aria-label="breadcrumb ">--}}
        {{--<ol class="breadcrumb bgcolor">--}}
        {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
        {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
        {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
        {{--</ol>--}}
        {{--</nav>--}}
    </main>
@endsection
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script src="{{url('/front/js/app.js')}}"></script>
</body>
</html>