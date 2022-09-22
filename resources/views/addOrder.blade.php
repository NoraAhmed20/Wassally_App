@extends('template')
@section('content')
    @Auth()
        <form action="{{ route('storeOrder') }}" method="POST">
            @csrf

            <div class="container-service-page">
                <div class="service-form">
                    <div class="service-logo">
                        <img src="{{ url('/imgs/logo.png') }}" />
                    </div>
                    <div class="container-inputs">
                        <h3>Add Your Data</h3>
                        <input type="text" name="user_id" value="{{ Auth::id() }}" hidden>
                        <input type="text" placeholder="from" name="from" id="from" />
                        @error('from')
                            {{ $message }}
                        @enderror
                        <input type="text" placeholder="to" name="to" id="to" />
                        @error('to')
                            {{ $message }}
                        @enderror
                        <input type="datetime-local" placeholder="hey" name="date" id="date" />
                        @error('date')
                            {{ $message }}
                        @enderror
                        <input type="text" placeholder="weight" name="weight" id="weight" />
                        @error('weight')
                            {{ $message }}
                        @enderror
                        <textarea rows="4" placeholder="information about order" name="information" id="information"></textarea>
                        @error('information')
                            {{ $message }}
                        @enderror
                    </div>
                    <button name="submit" id="submit"><a>Submit</a></button>
                </div>
            </div>
        </form>
    @endauth
@endsection
