@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Categories</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($categories as $category)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->description }}</td>
                                                        <td>
                                                            <img src="{{ asset($category->image) }}" style="height: 100px; width: 100px;" alt="">
                                                        </td>
                                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                        <td>
                                                            <a href="{{ route('edit-category', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                                                            <a href="{{ route('delete-category', ['id' => $category->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                                        <div class="wrap-1">
                                            <div class="wrap-2">
                                                <div>
                                                    <img src="./assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                                </div>
                                                <div class="color-white" style="margin-left:40px;">
                                                    <h1 class="font-bold">ADMINCA</h1>
                                                    <p class="font-16">Save your time, choose the best</p>
                                                    <ul class="list-unstyled">
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div class="d-flex justify-content-end wrap-3">
                                                    <div class="adminca-banner-b m-r-20">
                                                        <img src="./assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                                    <div class="adminca-banner-b m-r-10">
                                                        <img src="./assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                                </div>
                                                <div class="dev-img">
                                                    <img src="./assets/img/adminca-banner/sprite.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection