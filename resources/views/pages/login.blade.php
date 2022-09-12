@extends('layouts.default')

@section('content')


<section class="registeration-area">
    <h3 class="text-center pt-4">Login</h3>
    <form class="container w-50 py-4" action="{{ route('login') }}" method="POST">
    @if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    {{ csrf_field() }}
        <label for="Email"><strong>Email:</strong></label>
        @if ( $errors->has('email') )
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <input type="email" class="form-control p-3" id="email" name="email" placeholder="youremail@mail.com" value="{{ old('email') }}">
        <br/>
        <label for="Password"><strong>Password:</strong></label>
        @if ( $errors->has('password') )
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        <input type="password" class="form-control p-3" id="password" name="password" value="{{ old('password') }}">
        <br/>
        <button type="submit" class="btn btn-dark form-control p-3">Login</button>
    </form>

    <p class="text-center">Don't have an account? <a href="{{ route('register') }}" style="text-decoration: none;">Register here</a></p>
</section>

@stop