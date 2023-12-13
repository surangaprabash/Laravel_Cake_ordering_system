<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'cake_orders';
    protected $fillable = [
        'user_id',
        'cake_id',
        'description',
        'quantity',
        'address',
        'phone',
        'payment',
        'total',
        'status',
        'r_date',
    ];

    public function cake()
    {
        return $this->belongsTo(Cake::class, 'cake_id');
    }
}
