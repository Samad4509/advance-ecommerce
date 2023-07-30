@extends('admin.master')
@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Brand Edit</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Brand  Edit</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{session('message')}}</p>
                            <form class="needs-validation" novalidate action="{{route('brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Brand name</label>
                                        <input type="text" class="form-control" name="barnd_name" id="validationCustom011" value="{{$brand->barnd_name}}" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Image</label>
                                        <input type="file"  accept="image/*" class="form-control" name="brand_image" id="validationCustom011" required>
                                        <img src="{{asset($brand->brand_image)}}" alt="" height="100" width="80"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Description</label>
                                        <textarea name="brand_description" class="form-control" placeholder="Unit Description" cols="30" rows="10">{{$brand->brand_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="1"{{$brand->status==1? 'selected':''}}>Active</option>
                                            <option value="0"{{$brand->status==0? 'selected':''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
