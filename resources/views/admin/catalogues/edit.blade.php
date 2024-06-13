@extends('admin.layouts.master')
@section('title')
    Cập nhật danh mục sản phẩm:  {{ $model->name }}
@endsection
@section('content')
    <form action="{{route('admin.catalogues.update',$model->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="mb-3 col-md-6">
                <div class="mb-3 mt-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                           placeholder="Enter name" value="{{$model->name}}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="exampleInputPassword1" class="form-label">File</label>
                    <input type="file" class="form-control" id="cover" name="cover" >
                    <img src="{{ \Storage::url($model->cover) }}" width="50px" height="50px" alt="">
                </div>
            </div>
            <div class="mt-3 mb-3 col-md-6">
                <div class="mb-3 form-check">

                    <label class="form-check-label" for="exampleCheck1">
                        <input type="checkbox"  value="1" name="is_active" class="form-check-input"
                               @if($model->is_active) checked @endif
                               id="is_active">Is Active
                    </label>
                </div>
            </div>

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
