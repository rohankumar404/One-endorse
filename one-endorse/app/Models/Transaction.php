<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'amount',
        'status', // 'successful', 'failed'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
