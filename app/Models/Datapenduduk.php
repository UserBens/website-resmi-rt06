<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapenduduk extends Model
{
    use HasFactory;

    protected $table = 'datapenduduk';
    protected $guarded = ['id'];
}
