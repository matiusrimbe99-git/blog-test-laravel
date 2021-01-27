<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y, H:i');
    }

}
