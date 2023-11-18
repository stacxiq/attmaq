<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $guard = 'teacher';


    protected $fillable = [
        'name',
        'title',
        'phone',
        'email',
        'gender',
        'age',
        'image',
        'password'
    ];

    protected $hidden = [
        'password',
    ];


}
