@extends('template')
@section('content')

<div class="container">
  <div class="container-user-data">
    <div>
      <div class="user-data-header">
        <h3 name="name" id="name">{{$provider->user['name']}}</h3>
        <div class="user-data-header-image">
          <img src="\usersImgs\{{$provider['Profile_pic']}}" />
        </div>
      </div>
      <div class="user-data-content">
        <p>Phone number : <span name="phone" id="phone">0{{$provider['phone']}}</span></p>
        <p>Email : <span name="email" id="email">{{$provider->user['email']}}</span></p>
      </div>
    </div>
  </div>
</div>
@endsection
