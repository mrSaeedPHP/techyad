<body dir="rtl">
    <!-- @extends('front.index')
@section('content') -->
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-center">

            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">نام و نام خانوادگی</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">ایمیل</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">تلفن همراه</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">رمز ورود</label>
                    <input id="pass_id" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <div class="alert-danger">{{$message}}</div>
                    @enderror
                    <div class="d-flex">
                        <!-- <script>
                            if (document.getElementById("pass_id").value == "a") {
                                document.getElementById("div1").style.background - color = "blue";
                            }
                        </script> -->
                        <div id="div1" style="width: 53px;height: 10px;border: 1px solid;border-color: lightblue;background-color: white"></div>

                        <div style="width: 53px;height: 10px;background-color: white;border: 1px solid;border-color: lightblue;"></div>
                        <div style="width: 53px;height: 10px;background-color: white;border: 1px solid;border-color: lightblue;"></div>
                        <div style="width: 53px;height: 10px;background-color: white;border: 1px solid;border-color: lightblue;"></div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="title">تکرار رمز ورود</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="form-group">
                    <label for="active"></label>
                    <button type="submit" class="btn btn-success">ثبت نام</button>
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
    <!-- @endsection -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="{{url('/front/js/app.js')}}"></script>
</body>

</html>