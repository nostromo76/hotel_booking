<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;

    protected $fillable = ['roomname', 'room_qnty', 'available', 'booked', 'no_bed', 'facility', 'bedtype', 'price'];
        
    protected $table = 'room_category';
    protected $primaryKey = 'roomname';
        
    public $timestamps = false; 
}
