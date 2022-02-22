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
            <li class="breadcrumb-item"><a href="#">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">مطالب</li>
            <li class="breadcrumb-item active" aria-current="page">{{$article->name}}</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-center">
        <div class="container">
            <div>
                <h1>{{$article->name}}</h1>
            </div>

            <div>
                <ul>
                    <li>نویسنده:{{$article->user->name}}</li>
                    <li>تاریخ:{!! jdate($article->created_at)->format('%d-%B-%Y') !!}</li>
                    <li>بازدید:{{$article->hit}}</li>
                </ul>

            </div>
            <p>{!!$article->description!!}</p>
        </div>

    </div>
</div>
<div>
    @include('front.messages')
    <hr>
    <form action="{{route('comment.store',$article->slug)}}" method="post" class="form-group">
        @csrf
        <div class="form-row">
            @auth
            <div class="form-group col-md-6">
                <label for="name">نام:</label>
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="name">ایمیل:</label>
                <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}" readonly>
            </div>
            @else
                <div class="form-group col-md-6">
                    <label for="name">نام:</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">ایمیل:</label>
                    <input class="form-control" type="text" name="email">
                </div>
                @endauth

        </div>
        <div class="form-group">
            <label for="body">متن نظر شما</label>
            <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">ارسال نظر</button>
    </form>
</div>
<div>
    @foreach($comments as $comment)
        <div>
            <ul>
                <li>{{$comment->name}}</li>
                <li>{{$comment->email}}</li>
                <li>{{$comment->body}}</li>
            </ul>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>