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
                        <h1 class="page-title">Category Update</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Category Update</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="needs-validation" novalidate
                                      action="{{route('category.update',[$category->id])}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Category name</label>
                                            <input type="text" class="form-control" name="name" id="validationCustom011"
                                                   value="{{$category->name}}" required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Status</label>
                                            <select name="status" class="form-control" id="">
                                                <option value="1"{{$category->status==1? 'selected':''}}>Active</option>
                                                <option value="0"{{$category->status==0? 'selected':''}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update form</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
