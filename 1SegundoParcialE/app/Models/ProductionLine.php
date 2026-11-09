<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionLine extends Model
{
    
    /** @var array */
    protected $fillable = [
        'name',
        'location',
        'status'
    ];

    /** @var array */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
