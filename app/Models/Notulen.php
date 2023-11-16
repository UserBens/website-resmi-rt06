<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Notulen extends Model
{
    use HasFactory;

    protected $table = 'notulen';
    protected $guarded = ['id'];

    protected $appends = ['tgl_mulai'];

    public function getTglMulaiIndoAttribute()
    {
        return Carbon::parse($this->attributes['tgl_mulai'])->translatedFormat('d F Y');
    }
}
