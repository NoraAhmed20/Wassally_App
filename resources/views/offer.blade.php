@extends('template')
@section('content')
                 {{-- get order --}}
<div class="container">
      <div class="container-services">
        <div>
          <div class="services-header">
            <div class="header-title">
              <h4>
                From :
                <span name="from" id="from">{{$order['from']}}</span>
              </h4>
              <h4>
                To :
                <span name="to" id="to">{{$order['to']}}</span>
              </h4>
            </div>
            <div class="header-date">
              <p>Date</p>
              <p class="date" name="date" id="date">{{$order['date']}}</p>
            </div>
            <div class="header-weight" >
                <p>Weight</p>
              <p class="weight" name="weight" id="weight">{{$order['weight']}}</p>
              <p>Information</p>
              <p class="information" name="information" id="information">{{$order['information']}}</p>
              <span class="line"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
                          {{-- get offer --}}
                      @cannot('is_provider')
                      <h3>Offers</h3>
            @foreach ($order->offers as $item)
                <div class="container-of-offers">
                  <div class="one-offer">
                    <div class="offer-top">
                      <div class="offer-header">
                        <div class="offer-header-image">
                          <img src="\usersImgs\{{$item->provider['Profile_pic']}}" />
                        </div>
                        <div>
                          <p name="name" id="name">{{$item->provider->user['name']}}</p>
                        </div>
                      </div>
                      <div class="offer-body">
                        <p class="offer-price" name="price" >{{$item['price']}}</p>
                      </div>
                    </div>
                    <p class="offer-details" name="offer">{{$item['offer']}}</p>
                    <div class="offer-action">
                      <button class="primary"><a href="{{route('contactOffer',['provider'=>$item->provider])}}">Contact</a></button>
                      <button class="reject"><a href="{{route('delOffer',['id'=>$item['id']])}}">Reject</a></button>
                    </div>
                  </div>
                </div>
              @endforeach
              @endcannot


                            {{-- add offer --}}
            @can("is_provider")
            <div>
                <span class="line"></span>
                <form method="POST" action="{{route('addOffer')}}">
                  @csrf
                  <div class="container-services-form">
                    <img src="/storage/imgs/{{Auth::user()->provider->Profile_pic}}" hidden />
                    <p name="name" id="name" hidden>{{Auth::user()->provider->name}}</p>
                  <input type="text" name="order_id" value="{{$order['id']}}" hidden>
                <div class="services-form-inputs">
                  <input type="number" placeholder="Price" name="price" id="price"  />
                  @error('price')
                    {{ $message }}  
                  @enderror
                  <textarea rows="4" placeholder="whats on your mind?" name="offer" id="offer"></textarea>
                  @error('offer')
                    {{ $message }}  
                  @enderror
                  <button type="submit" name="add">Add Offer</button>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
          </div>
          @endcan
@endsection