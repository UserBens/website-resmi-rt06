<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wargakontrak extends Model
{
    use HasFactory;

    protected $table = 'wargakontrak';
    protected $guarded = ['id'];
}
