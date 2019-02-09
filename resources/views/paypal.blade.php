@extends('layouts.app')

@section('content')
 <div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2">

    @if (Session::has('message'))
     <div class="alert alert-{{ Session::get('code') }}">
      <p>{{ Session::get('message') }}</p>
     </div>
    @endif

    <h1>Hello</h1>

   </div>
  </div>
 </div>
@endsection