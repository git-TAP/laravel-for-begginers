@extends('layouts.frontend')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Fetch data</h1>
            <a href="{{ url('add-employee') }}" class="btn btn-primary float-end"> Add Employee</a>
            @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                   @foreach ($employee as $empdata )
                   <tr>
                       <th>{{ $empdata->id }}</th>
                       <td>{{ $empdata->name }}</td>
                       <td>{{ $empdata->phone }}</td>
                       <td>{{ $empdata->email }}</td>
                       <td>{{ $empdata->designation }}</td>
                       <td>{{ $empdata->status }}</td>
                       <td>
                           <a href="{{ url('edit-employee/'.$empdata->id) }}" class="btn btn-primary"> Edit</a>
                       </td>
                       <td>
                           <form action="{{ url('delete-employee/'.$empdata->id) }}" method="POST">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger"> Delete</button>
                           </form>

                    </td>
                   </tr>

                   @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>


@endsection
