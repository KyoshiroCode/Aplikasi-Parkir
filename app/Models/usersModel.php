<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'unicode_code',
        'name',
        'username',
        'password',
        'role',
        'status',
    ];


}
