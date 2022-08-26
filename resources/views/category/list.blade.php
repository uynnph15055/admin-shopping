@extends('layout.layout')
@section('content')
<div class="container">
    <h3 class="my-3">Quản lý danh mục</h3>
    <div class="row">
        <div class="col-5">
            <h5 class="bg-dark rounded p-2 text-white">{{!isset($cate) ? 'Thêm danh mục' :  'Sửa danh mục '  }}</h5>
            @if (isset($cate))
            <form action="{{route('admin.cate.update')}}" method="POST">
                @csrf
                <input hidden name="id" value="{{$cate->id}}"  type="text">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Tên danh mục</label>
                    <input type="text" placeholder="Tên danh mục" name="name" value="{{$cate->name}}"
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Giới tính</label>
                    <select class="form-control" name="sex" aria-label="Default select example">
                        <option @if ($cate->sex == 0)
                        selected
                        @endif value="0">Nam</option>
                        <option @if ($cate->sex == 1)
                        selected
                        @endif value="1">Nữ</option>
                    </select>
                </div>
                <button class="btn btn-dark">{{!isset($cate) ? 'Thêm' :  'Sửa '  }}</button>
            </form>
            @else
            <form action="{{route('admin.cate.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Tên danh mục</label>
                    <input type="text" placeholder="Tên danh mục" name="name" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Giới tính</label>
                    <select class="form-control" name="sex" aria-label="Default select example">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
                <button class="btn btn-dark">Thêm</button>
            </form>
            @endif
        </div>
        <div class="col-7">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>Id</th>
                        <th> Tên</th>
                        <th>Giới tính</th>
                        <th> Hành động</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($cates as $item)
                    <tr>
                        <td id="id">{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <span class="">{{$item->sex == 0 ? 'Nam' : 'Nữ'}}</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{route('admin.cate.edit' , $item->id)}}"
                                        class="dropdown-item btn btn-outline-warning" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a href="{{route('admin.cate.delete' , $item->id)}}" id="showToastPlacement"
                                        onclick="return confirm('Do you want to delete this data?')"
                                        class="dropdown-item btn btn-outline-danger"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="my-4 float-end">
                {{ $cates->appends(request()->all())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection