@extends('layouts.auth')

@section('meta-title', 'Admin Site')

@section('title', 'Administrator Area')


@section('content')

    @section('form-open')
        <form class="form-signin" method="POST" action="{{ route('admin.login') }}">
    @endsection

    @if ($errors->has('username'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('username') }}
        </div>
    @endif

    {{ csrf_field() }}

    <div class="input-group">
        <label for="username" class="sr-only">Username</label>

        <input 
            type="text" 
            id="username" name="username" 
            value="{{ old('username') }}" 
            class="form-control" 
            placeholder="Username" 
            required autofocus
        >
    </div>

    <div class="input-group">
        <label for="password" class="sr-only">Password</label>

        <input 
            type="password" 
            id="password" name="password" 
            class="form-control" 
            placeholder="Password" 
            required
        >
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    @section('form-open')
        </form>
    @endsection

@endsection
