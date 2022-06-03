<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booked_room;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;
    public function bookedRooms(){
        return $this->hasMany(Booked_room::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function rooms(){
        return $this->belongsToMany(Room::class, 'booked_rooms');
    }
}
