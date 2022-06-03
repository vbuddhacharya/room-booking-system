<?php

namespace App\Http\Controllers;

use App\Models\Booked_room;
use App\Models\Booking_detail;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;

class BookingController extends Controller
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
        //
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
        //dd($request);
        switch ($request->choose){
            
            case 'confirm':
                //dd($request);
                $booking = new Booking_detail();
                $booking->from_date = date('Y-m-d',strtotime($request->from));
                $booking->to_date = date('Y-m-d',strtotime($request->to));
                $booking->user_id = $request->user;
                $booking->contact = $request->contact;
                $booking->no_of_people = $request->guests;
                $booking->no_of_rooms = $request->rooms;
                //$booking->days = $request->days;
                $fdate = $request->from;
                $tdate = $request->to;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                $booking->days = $days;
               // $booking->total = $request->total;
                $booking->save();
                return $this->createRelation($request,$booking->id);
                break;
            case 'discard':
                foreach($request->roomNo as $rm){
                    $r = Room::find($rm);
                    $r->booked = 0;
                    $r->save();
                }
                return redirect('date')->withInput();
                break;
        }
    }
    public function createRelation(Request $request,$booking_id){
        
        foreach($request->roomNo as $rm){
            $relation = new Booked_room();
            $relation->booking_id = $booking_id;
            $relation->roomNo = $rm;
            $relation->save();
        }
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
    public function edit($id)
    {
        //
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
    }
    public function dateView(){
        return view('date');
    }
    public function roomView(Request $request){
        $guests = $request->guests;
        $rooms = $request->rooms;
        $values = ($request->except('_token'));
        if (($rooms*4)<$guests){
            return back()->withInput()->withErrors(['Maximum 4 guests per room']);
        }
        else{
            return view('choose_rooms',compact('values'));
        }
    }


    public function verifyRooms(Request $request){
        //dd($request);
        $values = ($request->except('_token'));
        $fdate = $request->from;
        $tdate = $request->to;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $flag=1;
        $total = 0;
        for($i=0;$i<$request->rooms;$i++){
            $condition = ['location'=>$request->location[$i],'type'=>$request->type[$i],'size'=>$request->size[$i],'booked'=>0];
            $allRooms = Room::where($condition)->get();
            $check = DB::table('rooms')
                    ->join('booked_rooms','booked_rooms.roomNo','=','rooms.id')
                    ->join()
            $count = $allRooms->count();

            if ($count<1){
                $flag = 0;
                break;
            }
            else{
                $r = $allRooms->first();
                $roomNumbers[] = $r->id;
                $r->booked = 1;
                $rate[] = $r->rate;
                $ra = $r->rate;
                $r->save();
            }
            $total = $total + $ra * $days;
        }
       if (isset($roomNumbers)){
            if ($flag ==1){
                //dd($values,$roomNumbers,$total,$rate);
                return view('confirm',compact('values','roomNumbers','total','rate','days'));
            }
            else{
                foreach($roomNumbers as $rm){
                    $r = Room::find($rm);
                    $r->booked = 0;
                    $r->save();
                }
                return back()->withInput()->withErrors(['Requested rooms unavailable. Please change some requirements and try again..']);
            }
       }
       return false;
        
    }


    public function check(Request $request){
        $flag=1;
        
        for($i=0;$i<$request->rooms;$i++){
            $condition = ['location'=>$request->location[$i],'type'=>$request->type[$i],'size'=>$request->size[$i],'booked'=>0];
            $allRooms = Room::where($condition)->get();
            $count = $allRooms->count();
            if ($count<1){
                $flag = 0;
                break;
            }
            else{
                $r = $allRooms->first();
                $roomNumbers[] = $r->roomNo;
                $r->booked = 1;
                $r->save();
            }
        }
       if (isset($roomNumbers)){
            if ($flag ==1){
                return $roomNumbers;
            }
            else{
                foreach($roomNumbers as $rm){
                    $r = Room::find($rm);
                    $r->booked = 0;
                    $r->save();
                }
                return false;
            }
       }
       return false;
        

//        if(($numbers = $this->check($request))!=false){
//         dd($values,$numbers);
//         return view('confirm',compact('values','numbers'));
// }
// else{
//     return back()->withInput()->withErrors(['Requested rooms unavailable. Please change some requirements and try again..']);
// }
    }
}

// $i = $request->rooms;
//         for ($j=0;$j<$i;$j++){
//             $booked = new Booked_room();
//             $condition = ['location'=>$request->location[$j],'type'=>$request->type[$j],'size'=>$request->size[$j],'booked'=>0];
//             $allRooms = Room::where($condition)->get();
//             $room = $allRooms->first();
//             if(isset($room)){
//                 $booked->booking_id = $booking_id;
//                 $booked->room_no = $room->roomNo;
//                 $booked->save();
//                 $room->booked = 1;
//                 $room->save();
//             }
//             else{
//                 $b = Booking_detail::find($booking_id);
//                 $b->delete();
//                 // $book = Booking_detail::;
//                 return back()->withInput()->withErrors(['Requested rooms unavailable. Please change some requirements and try again..']);
//             }
            
//         }
//         return redirect()->route('confirm');