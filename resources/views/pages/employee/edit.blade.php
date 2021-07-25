@extends('layouts.frontend')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Employee Data</h1>
            <a href="{{ url('employee') }}" class="btn btn-primary float-end"> Back</a>

        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <form action="{{ url('update-employee/'.$employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $employee->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{ $employee->status ==1 ? 'checked':'' }} > Unactive-1/ Active-0
                        </div>
                        <div class="form-group mb-3">

                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-3">

                </div>
            </div>



        </div>
    </div>

</div>


@endsection
