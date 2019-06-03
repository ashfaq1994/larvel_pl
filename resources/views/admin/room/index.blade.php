@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                        <table class="table table-bordered" id="users-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Name</th>
                                        <th>No Adults</th>
                                        <th>No Childs</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                            </table>
                    <hr>
                  {{-- <table class="table table-light">
                      <table class="table table-light">
                          <thead class="thead-light">
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Feature</th>
                                  <th>Adult</th>
                                  <th>Child</th>
                                  <th>Price</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($rooms as $key => $room)
                                <tr>
                                    <td>{{$rooms->firstItem() + $key }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td> <img src="{{ $room->feature_img }}" class="w-25" alt=""> </td>
                                    <td>{{ $room->no_adults }}</td>
                                    <td>{{ $room->no_childs }}</td>
                                    <td>{{ $room->price }}</td>
                                    <td><a href="{{ route('room.edit', $room->slug) }}" class="btn btn-info">Edit</a></td>
                                    <td> 
                                            <form action=" {{ route('room.destroy',$room->slug ) }} " method="POST">
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
                      </table> --}}
                </div>
            </div>
            {{-- <div class="d-flex justify-content-center mt-4">
                {{ $rooms->links() }}
            </div> --}}
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection


@section('js')
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery.js"></script>
      <!-- DataTables -->
      <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
      <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('room.index') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        { data: 'name', name: 'name' },
                        { data: 'feature', name: 'feature' },
                        { data: 'no_adults', name: 'no_adults' },
                        { data: 'no_childs', name: 'no_childs' },
                        { data: 'edit', name: 'edit', orderable: false, searchable: false },
                        { data: 'delete', name: 'delete' , orderable: false, searchable: false},
                    ]
                });
            });
            </script>
@endsection
