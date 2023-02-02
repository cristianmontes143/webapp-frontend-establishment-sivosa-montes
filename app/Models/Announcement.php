<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'header',
        'sub_header',
        'image',
        'description',
        'user_id',
    ];
    // use HasFactory;
}
