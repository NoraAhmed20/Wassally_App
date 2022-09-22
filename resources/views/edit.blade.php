@extends('template')
@section('content')
{{-- {{dd($order)}} --}}

<form  method="POST" action="{{route('update', compact('order'))}}">
    @csrf 
    @method('put')
    <div class="container-service-page">
        <div class="service-form">
          <div class="service-logo">
            <img src="./logo.png" />
          </div>
          <div class="container-inputs">
            <h3>Add Your Data</h3>
            <input type="text"  value="{{$order['from']}}" name="from" id="from" />
            @error('from')
            {{ $message }}  
          @enderror
            <input type="text"  value="{{$order['to']}}" name="to" id="to" />
            @error('to')
            {{ $message }}  
          @enderror
            <input type="datetime-local"  value="{{$order['date']}}" name="date" id="date" />
            @error('date')
            {{ $message }}  
          @enderror
            <input type="text"  value="{{$order['weight']}}" name="weight" id="weight" />
            @error('weight')
              {{ $message }}  
            @enderror
            <textarea rows="4"  name="information" id="information">{{$order['information']}}</textarea>
            @error('information')
            {{ $message }}  
          @enderror
          </div>
          <button name="submit" id="submit">Edit</button>
        </div>
      </div>
</form>

@endsection