<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'content',
        'date',
        'url',
        'image'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];
}
