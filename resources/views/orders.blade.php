<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>{{$pagetitle}}</title>
</head>
<body dir="rtl">
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>شناسه مشتری</th>
            <th>کالا</th>
            <th>قیمت کالا</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tablevalues as $tablevalue)
        <tr class="success">
            <td>{{$tablevalue->user_id}}</td>
            <td>{{$tablevalue->title}}</td>
            <td>{{$tablevalue->amount}}</td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>

</body>
</html>