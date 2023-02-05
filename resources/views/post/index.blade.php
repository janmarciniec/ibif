@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center mb-4">
        <div class="col-12">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-lg">Create new post</a>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-12">
            @if($posts->count() == 0)
                <b>There is no posts.</b>
            @else
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <div class="card-header">{{ $post->title }}</div>
                        <div class="card-body">
                            {!! $post->content !!}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
