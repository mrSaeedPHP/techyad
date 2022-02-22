@extends('back.index')
@section('title')
    پنل مدیریت - مدیریت کاربران
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">مدیریت کاربران</h4>
                    </div>
                </div>

            </div>
            @include('front.messages')
            <div class="container">


                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-stretched">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>تلفن</th>
                                    <th>نقش</th>
                                    <th>وضعیت</th>
                                    <th>مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    @switch($user->role)
                                    @case(1) @php $role='مدیر' @endphp
                                    @break
                                    @case(2) @php $role='کاربر' @endphp
                                    @default
                                    @endswitch
                                    @switch($user->status)

                                    @case(1)
                                    @php $url=route('admin.user.status',$user->id);
                                    $status='<a href="'.$url.'" class="badge badge-success">فعال</a>' @endphp
                                    @break
                                    @case(0)
                                    @php $url=route('admin.user.status',$user->id);
                                    $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>' @endphp
                                    @default
                                    @endswitch
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$role}}</td>
                                        <td>{!!$status!!}</td>
                                        <td><a href="{{route('admin.profile',$user->id)}}"><label
                                                        class="badge badge-success">ویرایش</label></a></td>
                                        <td><a href="#"><label class="badge badge-danger">حذف</label></a></td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        {{$users->links()}}
                    </div>

                </div>
                {{--@include('back.footer')--}}
            </div>
        </div>
    </div>

@endsection