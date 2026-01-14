<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'category',
        'brand',
        'sku',
        'stock_quantity',
        'material',
        'fit',
        'care',
        'description',
        'metadata',
    ];

    // vital: cast metadata to array so it's not a string
    protected $casts = [
        'metadata' => 'array',
    ];
}