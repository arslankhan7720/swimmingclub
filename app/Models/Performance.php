<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $table = 'swimmer_performance';

    protected $fillable = [
        'swimmer_id',
        'event_id',
        'p_date',
        'time',
        'report'
    ];


    public function swimmer()
    {
        return $this->belongsTo(User::class, 'swimmer_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

}
