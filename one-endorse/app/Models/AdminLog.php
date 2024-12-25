<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'action',
        'user_id',
        'details',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
