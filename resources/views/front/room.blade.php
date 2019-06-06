@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="row">
                  @foreach ($rooms as $room)
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
                              <div class="card-body">
                                <a href="{{ route('room.show', ['slug' => $room->slug]) }}" class="card-link">Book Now</a>
                                <a href="{{ route('room.show', ['slug' => $room->slug]) }}" class="card-link">View Details</a>
                              </div>
                            </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
