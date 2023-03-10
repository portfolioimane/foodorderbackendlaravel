<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
     protected $fillable = [
        'payment_ref', 'amount', 'status', 'driver_id', 'date_delivered', 'items', 'user_id', 'address'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
