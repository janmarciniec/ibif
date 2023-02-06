@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('home') }}"><b>{{ __('Go back') }}</b></a>
        </div>
    </div>
    
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Panel') }}</div>

                <div class="card-body">
                    This is an admin panel. Only admin (role = 1) can view this page and delete posts.
                </div>
            </div>
        </div>
    </div>   

    <div class="row">
        <div class="col-12">
            @if($posts->count() == 0)
                <b>There is no posts.</b>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-sm border text-center">
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Post title</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="align-middle">{{ $post->id }}</td>
                                    <td class="align-middle">{{ $post->title }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('post.destroy', $post) }}" method="post">
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
            @endif
        </div>
    </div>

</div>
@endsection
