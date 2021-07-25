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
                <div class="card-header">Edit Post
                    <a href="{{ url('posts') }}" class="btn btn-danger float-end">Back</a>
                </div>


                <div class="card-body">
                    <form action="{{ url('posts/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Image Upload</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Description</label>
                            <textarea type="text" class="form-control" name="description">{{$post->description}}
                            </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Status</label>
                            <input type="checkbox" name="status" {{  $post->status == 1? 'checked' :'' }}>0-show, 1-hide
                        </div>
                        <div class="form-group mb-3">
                            <label for="Title">Status</label>
                            <button type="submit" class="btn btn-primary"> Update</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
