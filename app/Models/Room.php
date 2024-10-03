<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'category_id']; // Add other fields as needed
    protected $table = 'rooms';

    public function category()
    {
        return $this->belongsTo(RoomCategory::class, 'category_id'); // Adjust the foreign key if needed
    }
}

