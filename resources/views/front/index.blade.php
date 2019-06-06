@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <form action="{{ route('check') }}" method="get">
                      <div class="form-group">
                          <label for="my-input">Check in</label>
                          <input id="my-input" class="form-control" type="date" name="check_in">
                      </div>
                      <div class="form-group">
                          <label for="my-input">Checkout</label>
                          <input id="my-input" class="form-control" type="date" name="check_out">
                      </div>
                      <div class="form-group">
                          <label for="my-input">Adult</label>
                          <input id="my-input" class="form-control" type="number" name="adult">
                      </div>
                      <div class="form-group">
                          <label for="my-input">Text</label>
                          <input id="my-input" class="form-control" type="number" name="child">
                      </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
