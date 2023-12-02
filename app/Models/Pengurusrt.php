<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurusrt extends Model
{
    use HasFactory;

    protected $table = 'pengurusrt';
    
    protected $guarded = ['id'];
}
