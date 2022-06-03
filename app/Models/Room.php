<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booked_room;

class Room extends Model
{
    use HasFactory;
    //protected $primaryKey = 'roomNo';
    public $incrementing = false;

     public function bookedRooms(){
         return $this->hasMany(Booked_room::class);
    }
    public function bookings(){
        return $this->belongsToMany(Booking::class, 'booked_rooms');
    }
}
