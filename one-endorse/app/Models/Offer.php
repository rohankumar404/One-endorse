<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'celebrity_id',
        'brand_id',
        'price',
        'status', // 'pending', 'accepted', 'rejected'
    ];

    public function celebrity()
    {
        return $this->belongsTo(Celebrity::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
