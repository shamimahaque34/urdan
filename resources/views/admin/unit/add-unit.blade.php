@extends('admin.master')
@section('title')
    Add Unit || Admin
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
                            <h3 class="text-center text-warning">Add Unit</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-unit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="name" class="font-weight-bolder text-dark">Unit Name :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="name" id="name" class="form-control border-dark">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="description" class="font-weight-bolder text-dark">Unit Description :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="description" id="description" class="form-control border-dark"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="font-weight-bolder text-dark">Unit Status :</label>
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
                                            <input type="submit" value="Create New Unit" class="btn btn-dark text-warning btn-block" style="cursor: pointer;">
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
