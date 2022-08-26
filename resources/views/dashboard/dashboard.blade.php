@extends('layout.layout')
@section('content')
<div class="container">
<div class="row mt-4">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-2">
                <h3 class="card-body text-white">Customer</h3>
                <div class="card-footer d-flex align-items-center justify-content-between" style="align-items: center;">
                    <a class="small  stretched-link" >View customer</a>
                    <i class="fas fa-address-card icon-count"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <h3 class="card-body text-white">Category</h3>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small  stretched-link text-white" href="thong-tin-hoa-don">View category</a>
                    <i class="fas fa-receipt icon-count"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <h3 class="card-body text-white">Product</h3>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small  stretched-link text-white"  href="danh-sach-admin">View product</a>
                    <i class="fas fa-users-cog icon-count"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <h3 class="card-body text-white">Staff</h3>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small stretched-link text-white" href="danh-sach-mon?trang=1">View staff</a>
                    <i class="fas fa-brush icon-count"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection