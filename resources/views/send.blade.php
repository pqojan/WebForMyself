@extends('layouts.layout')

@section('title')
  @parent::
   send
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form method="post" action="/send">
            @csrf
            <div class="form-group">
              <label for="name">Your name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="name">Your email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
              </div>
            <div class="form-group">
              <label for="text">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"> Send</button>
          </form>
    </div>
@endsection

