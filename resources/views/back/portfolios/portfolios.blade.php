@extends('back.index')
@section('title')
    پنل مدیریت - مدیریت نمونه کارها
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">مدیریت نمونه کارها</h4>
                    </div>
                </div>

            </div>
            @include('front.messages')
            <div class="container">
                <a href="{{route('admin.portfolios.create')}}" class="badge badge-danger">نمونه کار جدید</a>

                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-stretched">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>تگ</th>
                                    <th>لینک</th>
                                    <th>توضیحات</th>
                                    <th>مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{$portfolio->name}}</td>
                                        <td>{{$portfolio->tag}}</td>
                                        <td>{{$portfolio->link}}</td>
                                        <td>{{$portfolio->description}}</td>
                                        <td><a href="{{route('admin.portfolios.edit',$portfolio->id)}}"><label
                                                        class="badge badge-success">ویرایش</label></a></td>
                                        <td><a href="{{route('admin.portfolios.destroy',$portfolio->id)}}"
                                               onclick="return confirm('آیا آیتم مورد نظر حذف شود؟')"><label
                                                        class="badge badge-danger">حذف</label></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$portfolios->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection