@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-2">
            <a href="{{ route('post.index', app()->getLocale()) }}"><b>{{ __('Go back') }}</b></a>
        </div>
        <div class="col-2 offset-8 col-md-1 offset-md-9">
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
    
    
    <div class="row justify-content-center mb-2">
        <div class="col-md-10">
            <h1 class="text-primary">{{ __('New post') }}</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('post.store', app()->getLocale()) }}" method="post">
                @csrf
                
                <label for="title">{{ __('Title') }}:</label>
                <input type="text" class="form-control mb-3" id="title" name="title">
                
                <label for="content">{{ __('Content') }}:</label>
                <textarea name="content" id="summernote"></textarea>
                <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
