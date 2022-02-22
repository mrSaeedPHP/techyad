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
        </ol>
    </nav>
    <div class="d-flex justify-content-center">

        <div class="row">
            @foreach($articles as $article)
                <div class="col-sm-3">
                    <img src="<?php echo '/photos/1/thumbs/' . basename($article->image) ?>" alt="">
                    <h3><a href="{{route('article',$article->slug)}}">{{$article->name}}</a></h3>
                    <div>
                        <ul>
                            <li>نویسنده:{{$article->user->name}}</li>
                            <li>تاریخ:{!! jdate($article->created_at)->format('%d-%B-%Y') !!}</li>
                            <li>بازدید:{{$article->hit}}</li>
                        </ul>

                    </div>
                    <p><?php echo mb_substr(strip_tags($article->description), 0, 200,'UTF8').'...'?></p>
                </div>
            @endforeach

        </div>
    </div>

</div>
{{$articles->links()}}
</body>
</html>