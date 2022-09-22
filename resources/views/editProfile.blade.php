@extends('template')
@section('content')
<form method="POST" action="{{route('updateProfile', compact('provider'))}}">
    @csrf
    @method('put')
    <div class="container container-profile">
        <div class="container-inputs">
          <h3>Edit Profile</h3>
          <input type="text" name="name" placeholder="Full Name" value="{{$provider->user['name']}}" />
          <input type="text" placeholder="Email" value="{{$provider->user['email']}}" name="email" />
          <input type="text" name="phone" placeholder="Phone number" value="{{$provider->user['phone']}}" />
          <input type="text" name="adress"  value="{{$provider->user['adress']}}" placeholder="Adress" />
          <span class="line" style="margin-bottom: 20px;"></span>
          {{-- <input type="password" placeholder="Old Password" /> --}}
          <input type="password" name="password" placeholder="New Password" />
          <button name="submit" id="submit">Edit</button>
        </div>
</form>
@endsection