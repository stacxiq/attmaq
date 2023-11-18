<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Concerns\HasUuids;
=======
>>>>>>> b71d6a1 (add notifications)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens, HasFactory, Notifiable, HasUuids;
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> b71d6a1 (add notifications)

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
