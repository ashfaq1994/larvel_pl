@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="row">
                      <div class="col-lg-4">
                          <div class="card" style="width: 18rem;">
                              <img src="..." class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">{{ $room->name }}</h5>
                              </div>
                              <ul class="list-group list-group-flush">

                             <li class="list-group-item">Capacity: {{ $room->roomType->capacity }}</li>

                                <li class="list-group-item">Price: ₨ {{ $room->price }}</li>

                              </ul>
                            </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
        <form action="#" method="get" id="bookingform">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="my-input">Check in</label>
                        <input id="my-input"
                        @if (session()->has('key'))
                            value="{{ Session::get('key')['check_in'] }}"
                        @endif
                        class="form-control" type="date" name="check_in">
                    </div>
                    <div class="form-group col-4">
                        <label for="my-input">Checkout</label>
                        <input id="my-input"
                        @if (session()->has('key'))
                        value="{{ Session::get('key')['check_out'] }}"
                        @endif
                        class="form-control" type="date" name="check_out">
                    </div>
                    <div class="form-group col-4">
                        <h5>Room</h5>
                       <select onchange="selectRoom(event)" name="room_id" id="room_id" class="form-control">
                         @for ($i = 1; $i <= $room->roomType->no_room ; $i++)
                            <option value="{{ $i }}">{{ $i  }}</option>
                         @endfor
                       </select>
                    </div>
                </div>

                <div id="append" class="animated fadeIn">
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="my-input">Adult</label>
                        <input id="my-input"
                        @if (session()->has('key'))
                            value="{{ Session::get('key')['adult'] }}"
                        @endif
                        class="form-control" type="number" name="adult">
                    </div>
                    <div class="form-group col-4">
                        <label for="my-input">Child</label>
                        <input id="my-input"
                        @if (session()->has('key'))
                        value="{{ Session::get('key')['child'] }}"
                        @endif
                        class="form-control" type="number" name="child">
                    </div>
                    <div class="form-group col-4">
                        <label for="my-input">Price</label>
                        <input readonly disabled id="my-input"
                        value="{{ $room->price }}"
                        class="form-control" type="number" name="price">
                    </div>
                  </div>
                </div>
                <div id="addmsg">
                </div>
                <hr>
                 <span>TOtal</span><h4 id="cart" ></h4>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>
    </div>
</div>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@endsection
@section('js')
<script>
    var i = 1;

    var cartTotoal;
    const caclTotal = () => {

        return this.caclTotal = 100;
    }
    document.getElementById('cart').innerHTML = cartTotoal;
 function selectRoom(event)
 {
    var selectElement = event.target;
    var value = selectElement.value;
    // console.log(`Select value ${value} and ${i++}`);
	var num = value;
    num--;
    if(Math.floor(num) == num && $.isNumeric(num))
    {
         $("#addmsg").text('');
        for(var i = 1; i <= num; i++)
        {
            $("#append").clone().appendTo("#addmsg");
            // $("#addmsg").append('<div class="form-group"><label for="my-input">Adult</label><input id="my-input" class="form-control" type="number" name="adult"></div>');
        }
    }
 }
</script>
@endsection
