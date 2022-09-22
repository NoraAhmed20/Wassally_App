@extends('template')
@section('content')
@foreach ($data as $item)

<div class="container">
      <div class="container-services">
        <div>
          <div class="services-header">
            <div class="header-title">
              <h4>
                From :
                <span name="from" id="from">{{$item['from']}}</span>
              </h4>
              <h4>
                To :
                <span name="to" id="to">{{$item['to']}}</span>
              </h4>
            </div>
            <div class="header-date">
              <p>Date</p>
              <p class="date" name="date" id="date">{{$item['date']}}</p>
            </div>
            <div class="header-weight" >
                <p>Weight</p>
              <p class="weight" name="weight" id="weight">{{$item['weight']}}</p>
              <p>Information</p>
              <p class="information" name="information" id="information">{{$item['information']}}</p>
            </div>
            <a href="{{route('delete',['id'=>$item['id']])}}">Delete</a>
            <br>
            <a href="{{route('edit',['order'=>$item])}}">Edit</a>
            <br>
            <a href="{{route('offer',['order'=>$item])}}">Offers</a>

          </div>
        </div>
      </div>

          </div>
          @endforeach
          
@endsection