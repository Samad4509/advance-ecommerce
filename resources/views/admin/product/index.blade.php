@extends('admin.master')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product Add</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Product Add</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{session('message')}}</p>

                                <form class="needs-validation"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Category name</label>
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">Select Category</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Sub Category name</label>
                                            <select name="sub_category_id" id="" class="form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Brand</label>
                                            <select name="brand_id" id="" class="form-control">
                                                <option value="">Select Brand</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Unit</label>
                                            <select name="unit_id" id="" class="form-control">
                                                <option value="">Select Unit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Product Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Product Code</label>
                                            <input type="text" name="code" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Product Price</label>

                                            <div class="input-group">
                                                <input type="number" name="regular_price" placeholder="Regular Price" class="form-control">
                                                <input type="number" name="selling_price" placeholder="Selling Price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Stock Status</label>
                                            <div class="input-group">
                                                <input type="number" name="stock_amount" placeholder="Stock Amount" class="form-control">
                                                <input type="number" name="reorder_label" placeholder="Reorder Label" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="image" id="validationCustom011" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Others Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="others_image" id="validationCustom011" multiple>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Short Description</label>
                                            <textarea name="short_description" class="form-control" placeholder="Unit Description" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Long Description</label>

                                            <textarea name="long_description" id="summernote" class="form-control" placeholder="Unit Description" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection