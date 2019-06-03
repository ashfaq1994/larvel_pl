@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Rooms</div>
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif --}}
                <div class="card-body">
                    <form action="{{ route('room.store') }}" method="post">  
                        @csrf
                    <div class="form-group">
                        <label for="name">Roomtype Name</label>
                    <input id="name" value="{{ old('name') }}" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        <strong> {{ $errors->first('name') }} </strong>
                    </div>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="adult">Capacity</label>
                        <input id="adult" value="{{ old('capacity') }}" class="form-control {{$errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity">
                        @if($errors->has('capacity'))
                        <div class="invalid-feedback">
                            <strong> {{ $errors->first('capacity') }} </strong>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="child">No Rooms</label>
                        <input id="child" value="{{ old('no_room') }}" class="form-control {{$errors->has('no_room') ? 'is-invalid' : '' }}" type="number" name="no_room">
                        @if($errors->has('no_room'))
                        <div class="invalid-feedback">
                            <strong> {{ $errors->first('no_room') }} </strong>
                        </div>
                        @endif 
                    </div>
                    
                   
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-info">
                        <input type="reset" value="Reset" class="btn btn-danger ">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
