@extends('back.index')
@section('title')
    ویرایش نمونه کار
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">ویرایش نمونه کار</h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.portfolios.update',$portfolio->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام نمونه کار</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{$portfolio->name}}">
                                @error('name')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">لینک</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                       name="link"
                                       value="{{$portfolio->link}}">
                                @error('link')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">تگ</label>
                                <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                       name="tag"
                                       value="{{$portfolio->tag}}">
                                @error('tag')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                          name="description"
                                >{{$portfolio->description}}</textarea>
                                @error('description')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> انتخاب
     </a>
   </span>
                                <input id="image" class="form-control" type="text" name="image" value="{{$portfolio->image}}">
                            </div>

                            <div class="form-group">
                                <label for="active"></label>
                                <button type="submit" class="btn btn-success">ویرایش</button>
                                <a href="{{route('admin.portfolios')}}" class="btn btn-warning">انصراف</a>
                            </div>
                        </form>
                        <div class="table-responsive">

                        </div>

                    </div>

                </div>
                {{--@include('back.footer')--}}
            </div>
        </div>
    </div>

@endsection