

@extends('layouts.layout')

@section('title')
  @parent::
    {{ $title }}
@endsection

@section('content')
    @section('header')
        @parent
       
    @endsection
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        {{-- @if (count($data1) > 1)
            ok
        @endif --}}
        {{-- @isset($data2)
            isset data2
        @endisset --}}
        {{-- @production
           <h1>Production</h1>    
        @endproduction --}}
        {{-- @env('local')
            local
        @endenv --}}
        
     <h1>{{ $title }}</h1> 

      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($posts as $item)
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <h5 class="cart-title">{{ $item->title }}</h5>
              <p class="card-text">{{ $item->content }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">
                  {{-- {{ $item->created_at }} --}}
                  {{-- {{ \Carbon\Carbon::createFromFormat('Y-m-d H:m:s',$item->created_at)->format('d.m.Y') }} --}}
                  {{ $item->getPostDate() }}
                </small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
@endsection