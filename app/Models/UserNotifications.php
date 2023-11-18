<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Concerns\HasUuids;
=======
>>>>>>> b71d6a1 (add notifications)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotifications extends Model
{
<<<<<<< HEAD
    use HasFactory, HasUuids;
=======
    use HasFactory;
>>>>>>> b71d6a1 (add notifications)

    protected $fillable = [
        'title',
        'content',
    ];
}
