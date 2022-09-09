<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'movement_id',
        'value',
        'date'
    ];
}
