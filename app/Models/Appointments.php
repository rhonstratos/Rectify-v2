<?php

namespace App\Models;

use App\Traits\Models as Traits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory, Traits\StringIdGenerator;

    const TYPES = [
        'pending' => 0,
        'accepted' => 1,
        'rejected' => 2,
        'expired' => 3,
    ];

    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [];
}
