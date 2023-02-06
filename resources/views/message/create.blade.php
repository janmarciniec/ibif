@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('home') }}"><b>{{ __('Go back') }}</b></a>
        </div>
    </div>
    
    <div class="row justify-content-center mb-2">
        <div class="col-md-10 col-lg-6">
            <h1 class="text-primary">New message</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
            <form action="{{ route('message.store') }}" method="post">
                @csrf
                
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-2 col-form-label">To:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                </div>
                
                <div class="form-group mb-4">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-lg btn-primary w-100">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
