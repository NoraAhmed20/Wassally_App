@extends('template')
@section('content')
{{-- {{dd($errors)}} --}}
    <div class="container-login-page">
        <div class="service-form">
            <div class="service-logo">
                <img src="{{ url('/imgs/logo.png') }}" />
            </div>
            <form action="{{ route('store_provider') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container-inputs">
                    <h3>Create account </h3>
                    <input type="text" placeholder="Full Name" name="name" />
                    @error('name')
                        {{ $message }}
                    @enderror
                    <input type="text" placeholder="Email" name="email" />
                    @error('email')
                        {{ $message }}
                    @enderror
                    <input type="password" placeholder="Password" name="password" />
                    @error('password')
                        {{ $message }}
                    @enderror
                    <input type="Adress" placeholder="Adress" name="adress" />
                    @error('adress')
                        {{ $message }}
                    @enderror
                   
                    <div>
                        <div>
                            <label for="employee">Employee</label>
                            <input type="radio" name="role" id="employee" value="employee"
                                onclick="checkIfEmployee(this);" checked="true" />
                        </div>
                        <div>
                            <label for="client">Client</label>
                            <input type="radio" name="role" id="client" value="client"
                                onclick="checkIfEmployee(this);" />
                            @error('role')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <input type="text" placeholder="Phone Number" name="phone" />
                    @error('phone')
                        {{ $message }}
                    @enderror
                    <div class="container-employee">
                        <div class="container-inputs-employee">
                            <label for="client">Profile picture</label>
                            <input type="file" name="pic" />
                        </div>
                        @error('pic')
                            {{ $message }}
                        @enderror
                        <div class="container-inputs-employee">
                            <label for="client">ID picture</label>
                            <input type="file" name="pic2" />
                        </div>
                        @error('pic2')
                            {{ $message }}
                        @enderror
                    </div>
                    <a href="{{ route('sign_in') }}">I have an account , login please</a>
                    <button type="submit" name="submit"><a>Submit</a> </button>
                </div>
            </form>
        </div>
    </div>
@endsection
