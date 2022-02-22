<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>{{$pagetitle}}</title>
</head>
<body dir="rtl" style="text-align: right">

@include('layouts.topmenu')
<div class="container">
    <div class="d-flex justify-content-center">
        عنوان:{{$category->title}}<br>
        توضیح:{{$category->description}}<br>
        تاریخ ایجاد:{{$category->created_at}}<br>
        تاریخ بروزرسانی:{{$category->updated_at}}<br>

    </div>


</div>

</body>
</html>