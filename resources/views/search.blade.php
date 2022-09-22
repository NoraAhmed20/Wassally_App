@extends('template')
@section('content')
@foreach ($order as $item)
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
      <span class="line"></span>
      <button  ><a href="{{route('offer',['order'=>$item])}}">Add Offer</a></button>
    </div>
  </div>
</div>
@endforeach
@endsection