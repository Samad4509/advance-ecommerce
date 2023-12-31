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
                        <h1 class="page-title">Brand</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brand Manage</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Brand Manage</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <p class="text-center text-success">{{session('message')}}</p>
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Brand Name</th>
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-15p border-bottom-0">Description</th>
                                            <th class="wd-20p border-bottom-0">Status</th>
                                            <th class="wd-15p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$brand->barnd_name}}</td>
                                                <td>
                                                    <img src="{{asset($brand->brand_image)}}" alt="" height="100" width="120">
                                                </td>
                                                <td>{{$brand->brand_description}}</td>
                                                <td>{{$brand->status==1? 'Active':'Inactive'}}</td>

                                                <td class="d-flex">
                                                    <a href="{{route('brand.edit',[$brand->id])}}" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <form action="{{route('brand.destroy',$brand->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <div>


@endsection
