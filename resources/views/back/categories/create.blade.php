@extends('back.index')
@section('title')
    دسته بندی جدید
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row page-title-header">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h4 class="page-title">دسته بندی جدید</h4>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.categories.store')}}" method="POST">
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
                                <label for="title">slug - نام مستعار</label>
                                <input type="slug" class="form-control @error('slug') is-invalid @enderror"
                                       name="slug"
                                       value="{{old('slug')}}">
                                @error('slug')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="active"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{route('admin.categories')}}" class="btn btn-warning">انصراف</a>
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