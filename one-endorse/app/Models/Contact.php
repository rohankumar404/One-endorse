<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'contact';

    // Define fillable fields
    protected $fillable = ['full_name', 'email', 'message', 'terms_accepted'];
}
