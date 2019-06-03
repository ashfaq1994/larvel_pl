@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('room.update', $room->slug) }}" method="post">  
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="name">Room Name</label>
                      <input id="name" value="{{ old('name',$room->name) }}" class="form-control" type="text" name="name">
                      </div>
                      <div class="form-group">
                          <label for="adult">Max Adult</label>
                          <input id="adult" value="{{ old('no_adults',$room->no_adults) }}" class="form-control" type="number" name="no_adults">
                      </div>
                      <div class="form-group">
                          <label for="child">Max Child</label>
                          <input id="child" value="{{ old('no_childs',$room->no_childs) }}" class="form-control" type="number" name="no_childs">
                      </div>
                      <div class="form-group">
                          <label for="feature">Feature Image</label>
                          <input id="feature" value="{{$room->feature_img }}" class="form-control" type="text" name="feature_img">
                      </div>
                      <div class="form-group">
                          <label for="price">Price of Room</label>
                          <input id="price" value="{{ old('price', $room->price) }}" class="form-control" type="number" name="price">
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Update" class="btn btn-info">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
