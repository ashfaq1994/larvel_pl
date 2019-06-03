@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <table class="table table-light">
                      <table class="table table-light">
                          <thead class="thead-light">
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Capacity</th>
                                  <th>Number of Room</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($roomtypes as $key => $roomtype)
                                <tr>
                                    <td>{{ $roomtypes->firstItem() + $key }}</td>
                                    <td>{{ $roomtype->name }}</td>
                                    <td>{{ $roomtype->capacity }}</td>
                                    <td>{{ $roomtype->no_room }}</td>
                                    <td><a href="{{ route('room-type.edit', $roomtype->slug) }}" class="btn btn-info">Edit</a></td>
                                    <td> 
                                            <form action=" {{ route('room-type.destroy',$roomtype->slug ) }} " method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                     onclick=" return confirm('Are you sure you want to Delete')" 
                                                     class="btn btn-danger"> <i class="fa fa-close text-danger"></i>Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </table>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $roomtypes->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
