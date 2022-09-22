@extends('template')
@section('content')
<div class="container-login-page">
    <div class="service-form">
      <div class="service-logo">
        <img src="{{url('/imgs/logo.png')}}" />
      </div>
      <form action="{{route('myLogin')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="container-inputs">
        <h3>Login</h3>
        <input type="text" placeholder="Email" name="email"/>
        <input type="password" placeholder="Password" name="password"/>
        <a href="{{route('registration')}}">Need to register ?</a>
      </div>
      <button type="submit" name="submit"><a >Login</a></button>
    </div>
  </form>
  </div>
  @endsection