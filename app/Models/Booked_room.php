<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Booked_room extends Model
{
    use HasFactory;
    public function rooms(){
        return $this->belongsTo(Room::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
