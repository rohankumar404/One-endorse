<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function celebrity()
    {
        return $this->hasOne(Celebrity::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
