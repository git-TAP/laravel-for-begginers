@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>

            @endif
            <div class="card">
                <div class="card-header">Posts
                    <a href="{{ url('posts/create') }}" class="btn btn-primary float-end">Add Post</a>
                </div>


                <div class="card-body">
                   <table class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>User</th>
                               <th>Title</th>
                               <th>Image</th>
                               <th>Description</th>
                               <th>Status</th>
                               <th>Edit</th>
                               <th>Delete</th>
                           </tr>
                       </thead>
                       <tbody>
                            @foreach ($post as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->users->name }}</td><!--Put the name of the id foreign key-->
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/blog/'.$row->image) }}" alt="blog image" width="90px" height="100px">
                                    </td>
                                    <td>{{ $row->description }}</td>
                                    <td>
                                        @if ($row->status ==1)
                                        Hidden
                                        @else
                                        Visible
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('posts/'.$row->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a><!--Pass the id parameter in the get method-->
                                    </td>
                                    <td>
                                        <form action="{{ url('posts/'.$row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                             <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>

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
@endsection
