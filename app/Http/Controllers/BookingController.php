<?php

namespace App\Http\Controllers;

use App\Models\Booked_room;
use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

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
                
                $booking = new Booking();
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
                foreach($request->roomNo as $rm){
                    $r = Room::find($rm);
                    $r->booked = 0;
                    $r->save();
                }
                return $this->createRelation($request,$booking->id);
                break;
            case 'discard':
                foreach($request->roomNo as $rm){
                    $r = Room::find($rm);
                    $r->booked = 0;
                    $r->save();
                }
                return redirect()->route('date')->withInput();
                break;
        }
    }
    public function createRelation(Request $request,$booking_id){
        
        foreach($request->roomNo as $rm){
            $relation = new Booked_room();
            $relation->booking_id = $booking_id;
            $relation->room_id = $rm;
            $relation->save();
        }
        $book = Booking::find($booking_id);
        return view('booked',compact('book'));
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
        $book = Booking::find($id);
        $book->delete();
        return redirect()->route('admin.panel');
    }
    public function dateView(){
        $num = Room::all()->count();
        return view('date',compact('num'));
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
        switch ($request->action){
            case 'confirm':
                $validated = $request->validate([
                    'contact' => ['required', 'regex:/^((98)|(97))[0-9]{8}/'],
                    ]);
                $values = ($request->except('_token'));
                $fdate = $request->from;
                $tdate = $request->to;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                if($days==0){
                    $days=1;
                }
                $flag=1;
                $total = 0;
                
                $arrive = date('Y-m-d',strtotime($fdate));
                $depart = date('Y-m-d',strtotime($tdate));
                for($i=0;$i<$request->rooms;$i++){
                    $ra=0;
                    if($request->location[$i]==0){
                        $condition = ['type'=>$request->type[$i],'size'=>$request->size[$i],'booked'=>0];
                    }
                    else{
                        $condition = ['location'=>$request->location[$i],'type'=>$request->type[$i],'size'=>$request->size[$i],'booked'=>0];
                    }
                    
                    $allRooms = Room::where($condition)->get();
                    $count = count($allRooms);
                    if ($count<1){
                        $flag = 0;
                        break;
                    }
                    else{
                        $flagRoom=0;
                        foreach($allRooms as $room){
                            //dd($allRooms);
                            $check = Booked_room::where('room_id','=',$room->id)->get();
                            //dd($check);
                            if (!($check)){
                                $flagRoom = 1;
                            }
                            else{
                            // dd($check);
                                $flagBooked=0;
                                foreach($check as $c){
                                    //dd($c);
                                    $book = Booking::where('id',$c->booking_id)
                                            ->where(function($query) use ($arrive, $depart){
                                                $query->where(function($query) use ($arrive, $depart){
                                                    $query->where('from_date','<=',$arrive)
                                                    ->where('to_date','>=',$arrive);
                                                })
                                                ->orWhere(function($query) use ($arrive, $depart){
                                                    $query->where('from_date','<=',$depart)
                                                    ->where('to_date','>=',$depart);
                                                });
                                            })->exists();
                                    //dd($book);
                                    if($book){
                                        $flagBooked = 1;
                                        break;
                                    }
                                }
                                if ($flagBooked==0){
                                    $flagRoom=1; 
                                }    
                            }
                            if($flagRoom == 1){
                                $roomNumbers[] = $room->id;
                                $room->booked = 1;
                                $rate[] = $room->rate;
                                $ra = $room->rate;
                                $room->save();                           
                                break;
                            }
                        }
                        if ($flagRoom==0){
                            $flag=0;
                        }
                        else{
                            $total = $total + $ra * $days;
                        }
                    }
                }
                if (isset($roomNumbers)){
                        if ($flag ==1){
                            return view('confirm',compact('values','roomNumbers','total','rate','days'));
                        }
                        else{
                            foreach($roomNumbers as $rm){
                                $r = Room::find($rm);
                                $r->booked = 0;
                                $r->save();
                            }
                        }
                }
                return back()->withInput()->withErrors(['Requested rooms unavailable. Please change some requirements and try again..']);
            break;
            case 'discard':
                return redirect()->route('date')->withInput();
                break;
        }
    }

    public function viewRooms(Request $request){
        $book = Booking::find($request->id);
        return view('view_rooms',compact('book'));
    }
    public function viewBookings(Request $request){
        $user = User::find($request->id);
        $count = count($user->bookings);
        return view('user_bookings',compact('user','count'));
    }

}

