<?php

namespace App\Models\blog\newslatter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = ['email'];

    protected $table = 'newsletters';
}