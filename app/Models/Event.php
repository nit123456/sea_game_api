<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'date',
        'description',
        'stadium_id',
        'ticket_number',
    ];

    public function buyTicket(){
        return $this->hasMany(Ticket::class);
    }

    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }

    public function competition(){
        return $this->hasMany(Competition::class);
    }
}
