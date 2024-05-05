<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CoachSwimmer extends Authenticatable {
    use HasFactory, Notifiable;
    protected $table = 'coach_swimmer';
    protected $fillable = [
        'coach_id',
        'swimmer_id',
    ];

    public function swimmer()
    {
        return $this->belongsTo(User::class, 'swimmer_id');
    }
}
