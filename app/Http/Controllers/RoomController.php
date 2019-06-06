<?php

namespace App\Http\Controllers;


use App\Room;
use App\User;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Requests\RoomStore;
use App\RoomType;
use App\Gallery;

class RoomController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Room::query())
            ->addColumn('feature', '<img class="img-fluid w-100" src="{{asset("$feature_img")}}">')
            ->addColumn('edit', '<a class="btn btn-info" href="{{route("room.edit",$slug)}}">Edit</a>')
            ->addColumn('delete', '<a class="btn btn-danger" href="{{route("room.destroy",$slug)}}">Delete</a>')
            ->rawColumns(['feature','edit','delete'])
            ->make(true);
        }

        return view('admin.room.index');
        // $rooms = Room::latest()->paginate(10);
        // return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $roomstypes = RoomType::all();

       return view('admin.room.create', compact('roomstypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
       $room = Room::create([
            'name' => request('name'),
            'feature_img' => request('feature_img')->store('room'),
            'no_adults' => request('no_adults'),
            'no_childs' => request('no_childs'),
            'price' => request('price'),
            'room_type_id' => request('room_typeid'),
        ]);

        foreach ($request->gallery as $key => $value) {
            $tab = Gallery::create($value);

               $room->gallery()->attach($tab);
       }

        // $gallery = Gallery::create(['name' => $request->image,]);   

        //  $room->gallery()->attach(request($gallery));

         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('front.book', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin.room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
      $room->delete();

      return back();
    }


}
