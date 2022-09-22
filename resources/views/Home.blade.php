@extends('template')
@section('content')
    <!-- Start Center Content Section  -->
    <div class="container-center">
        <div class="center-content">
            <!-- <h1>ITI Team</h1> -->
            <img src="{{ url('/imgs/logo.png') }}" />

            <p>A site that helps you facilitate your needs and requests and deliver them to the desired place by staying away from shipping companies and communicating with travelers
<br><br>
                CLICK TRY US TO START WITH US !! </p>
            <button class="primary-button"><a href="{{ route('registration') }}">Try Us</a></button>
        </div>
    </div>
    <div class="section-header">
        <h1>Solutions</h1>
    </div>
    <div class="container container-about-academy">
        <div class="collage-of-cards">
            <div class="container-card">
                <h4>Time</h4>
                <p>Because we know that your time is precious, we are here to save your time</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container-card">
                <h4>Offers</h4>
                <p>  We give you the best offers and you can choose</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container-card">
                <h4>Security</h4>
                <p>When dealing with one of our employees, we provide you with safety</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container-card">
                <h4>Easy to Use</h4>
               <p>The design of the site is easy and simple, anyone can easily deal with it</p>               
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="section-header">
        <h1>Our Team</h1>
    </div>
    <div class="container-group-member">
        <div>
            <img src="{{ url('/imgs/mohamed.jpeg') }}" />
            <h4>Mohamed Oweis</h4>
            <p>Software Developer</p>
        </div>
        <div>
            <img src="{{ url('/imgs/nora.jpeg') }}" />
            <h4>Nora Ahmed</h4>
            <p>Software Developer</p>
        </div>
        <div>
            <img src="{{ url('/imgs/doha.jpeg') }}" />
            <h4>Doha Ibraheem</h4>
            <p>Software Developer</p>
        </div>
        <div>
            <img src="{{ url('/imgs/nada.jpeg') }}" />
            <h4>Nada Kamal</h4>
            <p>Software Developer</p>
        </div>
        <div>
            <img src="{{ url('/imgs/mohsen.jpeg') }}" />
            <h4>Mohsen Mohamed</h4>
            <p>Software Developer</p>
        </div>
    </div>
@endsection
