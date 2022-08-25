@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="container">
    <div class="col-left">
        <div class="login-text">
            <h2>Welcome Back</h2>
            <p>Create your account.<br>It's totally free.</p>
            <a href="" class="btn">Sign Up</a>
        </div>
    </div>

    <div class="col-right">
        <div class="login-form">
            <h2>Login</h2>

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-info">{{ $error }}</div>
            @endforeach
            @endif

            {!! Form::open(['url' => 'login','method'=> 'POST','class' => 'form-control']) !!}
            <p>
                <label>Username <span>*</span></label>
                <input type="text" name="username" placeholder="Username or Email" value="{{ old('username') }}"
                    required>
            </p>
            <p>
                <label>Password<span>*</span></label>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <p>
                <input type="submit" value="Sign In">
            </p>
            <p>
                <a href="">Forget password?</a>
            </p>

            {!! Form::close() !!}
        </div>
    </div>

</div>
@endsection