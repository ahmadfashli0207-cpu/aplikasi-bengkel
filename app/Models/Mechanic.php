<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'photo', 'rating', 'specialization', 'location', 'is_available', 'total_orders', 'experience_years'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
