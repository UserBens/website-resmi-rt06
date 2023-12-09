<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wargatidaktetap extends Model
{
    use HasFactory;

    protected $table = 'wargatidaktetap';
    protected $guarded = ['id'];
}
