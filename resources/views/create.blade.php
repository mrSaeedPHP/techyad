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
    @include('layouts.messages')
    <div class="d-flex justify-content-center">

        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                @error('title')
                <div class="alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">شرح دسته بندی</label>
                <textarea class="form-control @error('description') is-invalid @enderror"
                          name="description"></textarea>
                @error('description')
                <div class="alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="active">وضعیت</label>
                <select name="active">
                    <option value="1">منتشر شده</option>
                    <option value="0">منتشر نشده</option>
                </select>
            </div>
            <div class="form-group">
                <label for="active">ذخیره</label>
                <button type="submit" class="btn btn-success">ذخیره</button>
            </div>
        </form>

    </div>


</div>

</body>
</html>