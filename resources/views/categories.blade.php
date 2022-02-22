<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>{{$pagetitle}}</title>
</head>
<body dir="rtl" style="text-align: right">

@include('layouts.topmenu')
<div class="container">
    @include('layouts.messages')
    <div class="d-flex justify-content-center">
        <table class="table table-bordered">
            <thead>
            <tr class="table-active">
                <th>شناسه</th>
                <th>عنوان</th>
                <th>توضیحات</th>
                <th>وضعیت</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <body>
            @foreach($Categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('show',$category->id)}}">{{$category->title}}</a></td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->active}}</td>
                    <td><a href="{{route('edit',$category->id)}}">ویرایش</a></td>
                    <td><a href="{{route('destroy',$category->id)}}" onclick="return confirm('از حذف آیتم مطمئنید؟')" >حذف</a></td>

                </tr>
            @endforeach
            </body>
        </table>
    </div>


</div>

</body>
</html>