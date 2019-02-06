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

    <div class="card">
     <div class="card-header">Express checkout</div>
     <div class="card-body">
      Pay $20 via:
      <a href="{{ route('paypal.express-checkout') }}" class='btn-info btn'>PayPal</a>
     </div>
    </div>
   
    <div class="card">
     <div class="card-header">Recurring payments</div>
     <div class="card-body">
      Pay $20/month:
      <a href="{{ route('paypal.express-checkout', ['recurring' => true]) }}" class='btn-info btn'>PayPal</a>
     </div>
    </div>

   </div>
  </div>
 </div>
@endsection