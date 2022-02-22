@extends('back.index')
@section('title')
    پنل مدیریت - مدیریت مطالب
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">مدیریت مطالب</h4>
                    </div>
                </div>

            </div>
            @include('front.messages')
            <div class="container">
                <a href="{{route('admin.articles.create')}}" class="badge badge-danger">مطلب جدید</a>

                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-stretched">
                                <thead>
                                <tr>
                                    <th>نام</th>
                                    <th>نام مستعار - slug</th>
                                    <th>نویسنده</th>
                                    <th>دسته بندی</th>
                                    <th>بازدید</th>
                                    <th>مدیریت</th>
                                    <th>وضعیت</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($articles as $article)
                                    @switch($article->status)

                                    @case(1)
                                    @php $url=route('admin.articles.status',$article->id);
                                    $status='<a href="'.$url.'" class="badge badge-success">فعال</a>' @endphp
                                    @break
                                    @case(0)
                                    @php $url=route('admin.articles.status',$article->id);
                                    $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>' @endphp
                                    @default
                                    @endswitch
                                    <tr>
                                        <td>{{$article->name}}</td>
                                        <td>{{$article->slug}}</td>
                                        <td>{{$article->user->name}}</td>
                                        <td>
                                            @foreach($article->categories()->pluck('name') as $category)
                                                <span class="badge badge-warning">{{$category}}</span>
                                            @endforeach
                                        </td>
                                        <td>{{$article->hit}}</td>
                                        <td>{!! $status !!}</td>
                                        <td><a href="{{route('admin.articles.edit',$article->id)}}"><label
                                                        class="badge badge-success">ویرایش</label></a></td>
                                        <td><a href="{{route('admin.articles.destroy',$article->id)}}"
                                               onclick="return confirm('آیا آیتم مورد نظر حذف شود؟')"><label
                                                        class="badge badge-danger">حذف</label></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$articles->links()}}
                    </div>

                </div>
                {{--@include('back.footer')--}}
            </div>
        </div>
    </div>

@endsection