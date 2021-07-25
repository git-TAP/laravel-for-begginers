@extends('layouts.frontend')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Add Employee</h1>
            <a href="{{ url('employee') }}" class="btn btn-primary float-end"> Back</a>

        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <form action="{{ url('store-employee') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" class="form-control">
                        </div>
                        <div class="form-group mb-3">

                           <button type="submit" class="btn btn-primary">Submit</button>
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
