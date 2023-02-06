@extends('layouts.app')

@section('content')
<div class="container">
    @can('view', App\AdminPanel::class)
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 col-lg-6">
            <a href="{{ route('adminPanel.index') }}" class="btn btn-primary btn-lg w-100">Admin Panel</a>
        </div>
    </div>
    @endcan
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 col-lg-6">
            <a href="{{ route('post.index', app()->getLocale()) }}" class="btn btn-primary btn-lg w-100">User panel</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <a href="{{ route('message.create') }}" class="btn btn-primary btn-lg w-100">Contact</a>
        </div>
    </div>
</div>
@endsection
