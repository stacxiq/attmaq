<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessiongroup extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'teacher_id',
        'title',
        'content',
        'url',
        'start-date',
        'start-time'
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    protected $casts = [
        'start-date' => 'datetime',
        'start-time' => TimeCast::class
    ];
}
