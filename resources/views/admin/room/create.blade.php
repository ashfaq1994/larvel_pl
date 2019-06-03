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
                        <form action="{{ route('room.store') }}" method="post" enctype="multipart/form-data">  
                            @csrf
                        <div class="form-group">
                            <label for="name">Room Name</label>
                        <input id="name" value="{{ old('name') }}" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            <strong> {{ $errors->first('name') }} </strong>
                        </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="adult">Max Adult</label>
                            <input id="adult" value="{{ old('no_adults') }}" class="form-control {{$errors->has('no_adults') ? 'is-invalid' : '' }}" type="number" name="no_adults">
                            @if($errors->has('no_adults'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('no_adults') }} </strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="child">Max Child</label>
                            <input id="child" value="{{ old('no_childs') }}" class="form-control {{$errors->has('no_childs') ? 'is-invalid' : '' }}" type="number" name="no_childs">
                            @if($errors->has('no_childs'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('no_childs') }} </strong>
                            </div>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label for="feature">Feature Image</label>
                            <input id="feature" class="form-control {{$errors->has('feature_img') ? 'is-invalid' : '' }}" type="file" name="feature_img">
                            @if($errors->has('feature_img'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('feature_img') }} </strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price">Price of Room</label>
                            <input id="price" value="{{ old('price') }}" class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price">
                            @if($errors->has('price'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('price') }} </strong>
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
