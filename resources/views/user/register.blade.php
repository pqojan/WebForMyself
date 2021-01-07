@extends('layouts.layout')

@section('title')
  @parent::
   Register
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif
        <form method="post" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
              <label for="name">Your name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="name">Your email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password">
              </div>
              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" placeholder="" name="password_confirmation">
              </div>
            <button type="submit" class="btn btn-primary"> Send</button>
          </form>
    </div>
@endsection

