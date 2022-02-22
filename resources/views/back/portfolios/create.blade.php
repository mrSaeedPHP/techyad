@extends('back.index')
@section('title')
    نمونه کار جدید
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">نمونه کار جدید</h4>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.portfolios.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام دسته بندی</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{old('name')}}">
                                @error('name')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">لینک</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                       name="link"
                                       value="{{old('link')}}">
                                @error('link')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">تگ</label>
                                <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                       name="tag"
                                       value="{{old('tag')}}">
                                @error('tag')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                          name="description"
                                >{{old('tag')}}</textarea>
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
                                <input id="image" class="form-control" type="text" name="image">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                            <div class="form-group">
                                <label for="active"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
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