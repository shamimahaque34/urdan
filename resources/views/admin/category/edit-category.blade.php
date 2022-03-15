@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Edit Category</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Image :</label>
                                    <div class="col-md-8">
                                        <img src="{{ asset($category->image) }}" style="height: 100px; width: 100px;" alt="">
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $category->status == 1 ? 'checked' : '' }} value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }} value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Category" class="btn btn-outline-success" />
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