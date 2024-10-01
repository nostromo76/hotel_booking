<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_cat', 'checkin', 'checkout', 'name', 'phone', 'book'];
        
        protected $table = 'rooms';
        protected $primaryKey = 'room_id';
        
        public $timestamps = false; // Or true if you're using timestamps
    
    
}
