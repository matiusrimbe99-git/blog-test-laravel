<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;



class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'users_id',
        'category_id',
        'content',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y, H:i');
    }
}
