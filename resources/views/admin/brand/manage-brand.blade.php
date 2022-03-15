@extends('admin.master')
@section('title')
    Manage Brand || Admin
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if($message = Session::get('message'))
                        <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                    @endif
                    <div class="card shadow border-dark">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-warning">Manage Brand</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover mb-0">
                                <thead>
                                <tr>
                                    <th class="text-center text-warning fs-5">SN</th>
                                    <th class="text-center text-warning fs-5">Brand Name</th>
                                    <th class="text-center text-warning fs-5">Brand Description</th>
                                    <th class="text-center text-warning fs-5">Brand Image</th>
                                    <th class="text-center text-warning fs-5">Brand Status</th>
                                    <th class="text-center text-warning fs-5">Take Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td class="text-dark">{{ $loop->iteration }}</td>
                                        <td class="text-dark">{{ $brand->name }}</td>
                                        <td class="text-dark">{{ $brand->description }}</td>
                                        <td class="text-center">
                                            <img src="{{ isset($brand->image) ? asset($brand->image) : '' }}" alt="" height="100px" width="100px" style="object-fit: cover;">
                                        </td>
                                        <td class="text-dark">{{ $brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('edit-brand', ['id'=>$brand->id]) }}" class="btn btn-success btn-sm fw-bold">Edit</a>
                                            <a href="{{ route('delete-brand', ['id'=>$brand->id]) }}" onclick="return confirm('Delete This Item?')" class="btn btn-danger btn-sm fw-bold">Delete</a>
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
    </section>
@endsection
