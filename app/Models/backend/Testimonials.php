<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'title',
        'content',
        'image',
        'status'
    ];
}
