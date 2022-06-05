<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'id' => 'required|integer|unique:rooms,id|between:101,599',
            'location' => 'required',
            'rate' => 'required|numeric',
            'type' => 'required',
            'size' => 'required',
        ]);
        $newRoom = new Room();
        $newRoom->id = $request->id;
        $newRoom->location = $request->location;
        $newRoom->type = $request->type;
        $newRoom->rate = $request->rate;
        $newRoom->size = $request->size;
        $newRoom->booked = $request->booked;
        if ($newRoom->save())
            return redirect()->route('admin.panel');
        else
            return view('add_room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $id = $request->input('id');
        $room = Room::find($id);
        $users = User::all();
        $types = array('Standard','Deluxe','Suite');
        $locs = array('First Floor','Second Floor','Third Floor','Fourth Floor','Fifth Floor');
        return view('edit_room',compact('room','users','types','locs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'id' => 'required|integer|unique:rooms,id|between:101,599',
            'location' => 'required',
            'rate' => 'required|numeric',
            'type' => 'required',
            'size' => 'required',
        ]);
        $room = Room::find($id);
        $room->id = $request->id;
        $room->location = $request->location;
        $room->type = $request->type;
        $room->rate = $request->rate;
        $room->size = $request->size;
        $room->booked = $request->booked;
        $room->save();
        return redirect()->route('admin.panel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('admin.panel');
    }
    public function roomBookings(Request $request){
        $rooms = Room::find($request->id);
        return view('room_bookings',compact('rooms'));
    }
    public function standardView(){
        return view('room1');
    }
}
