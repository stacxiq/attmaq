<?php

namespace App\Models;

use App\Casts\TimeCast;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Concerns\HasUuids;
=======
>>>>>>> b71d6a1 (add notifications)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessiongroup extends Model
{
<<<<<<< HEAD
    use HasFactory, HasUuids;
=======
    use HasFactory;
>>>>>>> b71d6a1 (add notifications)

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
