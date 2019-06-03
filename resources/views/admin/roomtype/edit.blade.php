@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('roomtype.update', $roomTypee->slug) }}" method="post">  
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="name">Roomtype Name</label>
                      <input id="name" value="{{ old('name',$roomTypee->name) }}" class="form-control" type="text" name="name">
                      </div>
                      <div class="form-group">
                          <label for="adult">Capacity</label>
                          <input id="adult" value="{{ old('capacity',$roomType->capacity) }}" class="form-control" type="number" name="capacity">
                      </div>
                      <div class="form-group">
                          <label for="child">No Rooms</label>
                          <input id="child" value="{{ old('no_room',$roomType->no_room) }}" class="form-control" type="number" name="no_room">
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
