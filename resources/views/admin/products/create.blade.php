@extends('admin.layouts.master')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Thêm mới sản phẩm</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <form action="{{route('admin.products.store')}}" class="form-control" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thông tin</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="mt-4">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" name="sku" id="sku"
                                               value="{{strtoupper(\Str::random(8))}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="price_regular" class="form-label">Price Regular</label>
                                        <input type="number" value="0" class="form-control" name="price_regular"
                                               id="price_regular">
                                    </div>
                                    <div class="mt-4">
                                        <label for="price_sale" class="form-label">Price Sale</label>
                                        <input type="number" value="0" class="form-control" name="price_sale"
                                               id="price_sale">
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label">Catelogues</label>
                                        <select class="form-select" name="catelogue_id" id="catelogue_id">
                                            @foreach($catelogues as $id=>$name)
                                                <option value="{{$id}}">{{$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <label for="img_thumbnail" class="form-label">Img Thumbnail</label>
                                        <input type="file" class="form-control" name="img_thumbnail" id="img_thumbnail">
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-primary">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="is_active"
                                                       id="is_active"
                                                       checked>
                                                <label class="form-check-label" for="is_active">Is Active</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-danger">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="is_hot_deal"
                                                       id="is_hot_deal"
                                                       checked>
                                                <label class="form-check-label" for="is_hot_deal">Is Hot Deal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-switch form-switch-success">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="is_good_deal" id="is_good_deal"
                                                       checked>
                                                <label class="form-check-label" for="is_good_deal">Is Good Deal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-switch-warning">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="is_new"
                                                       id="is_new"
                                                       checked>
                                                <label class="form-check-label" for="is_new">Is New</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-switch form-switch-info">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="is_show_home" id="is_show_home"
                                                       checked>
                                                <label class="form-check-label" for="is_show_home">Is Show Home</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="material" class="form-label">Material</label>
                                            <textarea class="form-control" name="material" id="material"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="user_manual" class="form-label">User Manual</label>
                                            <textarea class="form-control" name="user_manual" id="user_manual"
                                                      rows="2"></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="content" class="form-label">Content</label>
                                            <textarea class="form-control" name="content" id="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <div class="row" style="height: 300px; overflow: scroll">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Biến thể</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <table>
                                    <tr>
                                        <th class="text-center">Size</th>
                                        <th>Color</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Image</th>
                                    </tr>
                                    @foreach($sizes as $sizeId=>$sizeName)
                                        @foreach($colors as  $colorId=>$colorName)
                                            <tr>
                                                <td class="text-center">{{$sizeName}}</td>
                                                <td>
                                                    <div
                                                        style="width: 35px; height: 35px; background: {{$colorName}}"></div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           name="product_variants[{{$sizeId . '-' . $colorId}}][quantity]"
                                                           id="quantity">
                                                </td>
                                                <td>
                                                    <input type="file" class="form-control"
                                                           name="product_variants[{{$sizeId . '-' . $colorId}}][image]"
                                                           id="image">

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </table>

                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Gallery</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Gallery 1</label>
                                        <input type="file" class="form-control" name="product_galleries[]"
                                               id="gallery_1">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Gallery 2</label>
                                        <input type="file" class="form-control" name="product_galleries[]"
                                               id="gallery_2">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Tags</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div>
                                        <label for="name" class="form-label">Tags</label>
                                        <select class="form-control" name="tags[]" id="tags" multiple>
                                            @foreach($tags as $id=>$name)
                                                <option value="{{$id}}">
                                                    {{$name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div><!-- end card header -->
            </div>
            <!--end col-->
        </div>
    </form>

@endsection

@section('script-libs')
    <script src="https:////cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

