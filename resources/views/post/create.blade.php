@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center mb-2">
        <div class="col-md-10">
            <h1 class="text-primary">New post</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                
                <label for="title">Title:</label>
                <input type="text" class="form-control mb-3" id="title" name="title">
                
                <label for="content">Content:</label>
                <textarea name="content" id="summernote"></textarea>
                <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
