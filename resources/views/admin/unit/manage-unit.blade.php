@extends('admin.master')
@section('title')
    Manage Unit || Admin
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
                            <h3 class="text-center text-warning">Manage Unit</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover mb-0">
                                <thead>
                                <tr>
                                    <th class="text-center text-warning fs-5">SN</th>
                                    <th class="text-center text-warning fs-5">Unit Name</th>
                                    <th class="text-center text-warning fs-5">Unit Description</th>
                                    <th class="text-center text-warning fs-5">Unit Status</th>
                                    <th class="text-center text-warning fs-5">Take Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($units as $unit)
                                    <tr>
                                        <td class="text-dark">{{ $loop->iteration }}</td>
                                        <td class="text-dark">{{ $unit->name }}</td>
                                        <td class="text-dark">{{ $unit->description }}</td>
                                        <td class="text-dark">{{ $unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('edit-unit', ['id'=>$unit->id]) }}" class="btn btn-success btn-sm fw-bold">Edit</a>
                                            <a href="{{ route('delete-unit', ['id'=>$unit->id]) }}" onclick="return confirm('Delete This Item?')" class="btn btn-danger btn-sm fw-bold">Delete</a>
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
