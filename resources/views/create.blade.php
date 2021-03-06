@extends('layouts.layout')

@section('title') {{$title}} @endsection
  

@section('header')
        @parent
@endsection

@section('content')
 {{-- @include('layouts.errors') --}}
 <div class="container">
    <form method="POST" action="{{ route('post.store') }}  ">
        @csrf
        <div class="form-group">
          <label for="title" >title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title" value="{{ old('title') }}">
           @error('title')
               <div class="invalid-feedback">{{$message}}</div>
           @enderror
        </div>
        <div class="form-group">
            <label for="content">Example textarea</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5" value="{{ old('content') }}"></textarea>
             @error('content')
                <div class="invalid-feedback">{{$message}}</div>
             @enderror
          </div>
        <div class="form-group">
          <label for="rubric_id">Rubric Select</label>
          <select  class="form-control" id="rubric_id" name="rubric_id">
              <option>Select rubric</option>
              @foreach ($rubric as $key => $value)
                  <option value="{{ $key }}" 
                  @if (old('rubric_id') == $key) selected
                      
                  @endif
                  >{{ $value }}</option>
              @endforeach
          </select>
        </div>
        <button class="btn btn-danger">Sumbit</button>
      </form>  
</div>   

@endsection