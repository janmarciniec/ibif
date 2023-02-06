@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 offset-10 col-md-1 offset-md-11">
            <a id="navbarDropdown" class="dropdown-toggle btn btn-primary" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @if(app()->getLocale() == 'en')
                    <span class="text-white">EN</span>
                @else
                    <span class="text-white">PL</span>
                @endif
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'en') }}" class="nav-link">English</a>
                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'pl') }}" class="nav-link">Polski</a>
            </div>
        </div>
    </div>
    
    
    <div class="row justify-content-center mb-4">
        <div class="col-12">
            <a href="{{ route('post.create', app()->getLocale()) }}" class="btn btn-primary btn-lg">{{ __('Create new post') }}</a>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-12">
            @if($posts->count() == 0)
                <b>{{ __('There is no posts') }}.</b>
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
