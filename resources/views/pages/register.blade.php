@extends('layouts.default')

@section('content')


<section class="registeration-area">
    <h3 class="text-center pt-4">Register for anonymous messages</h3>
    <form class="container w-50 py-4" action="{{ route('register') }}" method="POST">
    {{ csrf_field() }}
        <label for="username"><strong>Username:</strong></label>
        <input type="text" class="form-control p-3" id="username" name="username" placeholder="username">
        <br/>
        <label for="Email"><strong>Email:</strong></label>
        <input type="email" class="form-control p-3" id="email" name="email" placeholder="youremail@mail.com">
        <br/>
        <label for="Password"><strong>Password:</strong></label>
        <input type="password" class="form-control p-3" id="password" name="password">
        <br/>
        <button type="submit" class="btn btn-dark form-control p-3">Register</button>
    </form>

    <p class="text-center">Already have an account? <a href="{{ route('login') }}" style="text-decoration: none;">Login here</a></p>
</section>

@stop