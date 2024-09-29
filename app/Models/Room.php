<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_cat', 'checkin', 'checkout', 'name','phone']; // Define fillable fields


    protected $table = 'rooms'; // Ensure this matches your database table name
    protected $primaryKey = 'room_id'; // Set your primary key

    // If you're using timestamps, you can set these properties
    public $timestamps = false; // Set to true if you want Laravel to manage created_at and updated_at
}
