<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity'
    ];

    public function products() {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
