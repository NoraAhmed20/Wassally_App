@extends('template')
@section('content')
<div class="container">
  <div class="container-user-data">
    <div>
      <div class="user-data-header">
        <h3 name="name" id="name">{{Auth::user()->name}}</h3>
        <div class="user-data-header-image">
          <img src="\usersImgs\{{Auth::user()->provider->Profile_pic}}" />
        </div>
      </div>
      <div class="user-data-content">
        <p>Phone number : <span name="phone" id="phone">0{{Auth::user()->provider->phone}}</span></p>
        <p>Email : <span name="email" id="email">{{Auth::user()->email}}</span></p>
        <a href="{{route('editProfile',['provider'=>Auth::user()->provider])}}">Edit Profile</a>
      </div>
    </div>
  </div>
</div>

@endsection
