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
                <div class="card-header">Create Post
                    <a href="{{ url('posts') }}" class="btn btn-danger float-end">Back</a>
                </div>


                <div class="card-body">
                    <form action="{{ url('posts') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Image Upload</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Description</label>
                            <textarea type="text" class="form-control" name="description" required>

                            </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Status</label>
                            <input type="checkbox" name="status">0-show, 1-hide
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Status</label>
                            <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
