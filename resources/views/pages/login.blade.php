@extends('layouts.default')

@section('content')


<section class="registeration-area">
    <h3 class="text-center pt-4">Login</h3>
    <form class="container w-50 py-4" action="{{ route('register') }}" method="POST">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ csrf_field() }}
        <label for="Email"><strong>Email:</strong></label>
        <input type="email" class="form-control p-3" id="email" name="email" placeholder="youremail@mail.com">
        <br/>
        <label for="Password"><strong>Password:</strong></label>
        <input type="password" class="form-control p-3" id="password" name="password">
        <br/>
        <button type="submit" class="btn btn-dark form-control p-3">Login</button>
    </form>

    <p class="text-center">Don't have an account? <a href="{{ route('register') }}" style="text-decoration: none;">Register here</a></p>
</section>

@stop