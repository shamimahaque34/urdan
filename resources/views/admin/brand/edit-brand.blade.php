@extends('admin.master')
@section('title')
    Edit Brand || Admin
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @if($message = Session::get('message'))
                        <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                    @endif
                    <div class="card shadow border-dark">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-warning">Edit Brand</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-brand') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="name" class="font-weight-bolder text-dark">Brand Name :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="name" id="name" value="{{ $brand->name }}" class="form-control border-dark">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="description" class="font-weight-bolder text-dark">Brand Description :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="description" id="description" class="form-control border-dark">{{ $brand->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="image" class="font-weight-bolder text-dark">Brand Image :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <img src="{{ asset($brand->image) }}" alt="" height="100px" width="100px" class="d-block mb-4">
                                            <input type="file" name="image" id="image" class="form-control-file border-dark">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="font-weight-bolder text-dark">Brand Status :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check mr-5">
                                                    <input class="form-check-input" type="radio" name="status" id="p" value="1">
                                                    <label class="form-check-label" for="p">
                                                        Published
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="u" value="0">
                                                    <label class="form-check-label" for="u">
                                                        Unpublished
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <input type="submit" value="Update Brand" class="btn btn-dark text-warning btn-block" style="cursor: pointer;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
