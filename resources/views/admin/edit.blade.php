@extends('layouts.app')
@section('title','Edit')
@section('content')
<div class="container">
    <div class="col-left">
        <div class="login-text">
            <h2>Welcome Back</h2>
            <p>Create your account.<br>It's totally free.</p>
        </div>
    </div>
    <div class="col-right">
        <div class="login-form">
            <h2>Update</h2>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-info">{{ $error }}</div>
            @endforeach
            @endif
            {!! Form::open(['url' => 'admin/student/update','method'=> 'POST','class' => 'form-control']) !!}
            <input type="hidden" name="id" value="{{ $student->id }}" />
            <p>
                <label>Name <span>*</span></label>
                <input type="text" name="student-name" value="{{$student->name}}" />
            </p>
            <p>
                <label>City <span>*</span></label>
                <input type="text" name="city-name" value="{{$student->city}}" required />
            </p>

            <p>
                <label>Distance <span>*</span></label>
                <input type="text" name="distance" value="{{$student->distance}}" required />
            </p>
            <p>
                <label>Moons <span>*</span></label>
                <input type="text" name="moons" value="{{$student->moons}}" required />
            </p>
            <p>
                <input type="submit" value="Update">
            </p>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection