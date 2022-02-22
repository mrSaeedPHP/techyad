<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>ثبت نام کاربران</title>
</head>
<body dir="rtl" style="text-align: right">

@include('layouts.topmenu')
<div class="container">
    @include('layouts.messages')
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bgcolor">
            <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">ورود</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-center">

        <form action="{{route('login')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">ایمیل</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{old('email')}}">
                @error('email')
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
                <label for="title">من را بخاطر بسپار</label>
                <input type="checkbox" class="form-check-input" name="remember">

            </div>

            <div class="form-group">
                <label for="active"></label>
                <button type="submit" class="btn btn-success">ورود</button>
            </div>
        </form>

    </div>


</div>

</body>
</html>