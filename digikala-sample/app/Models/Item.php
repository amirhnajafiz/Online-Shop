<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item for each shop item.
 *
 * @package App\Models
 */
class Item extends Model
{
    // Traits
    use HasFactory;

    /**
     * Item fillable parts.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'view',
        'sell',
        'favorite',
        'price',
        'number',
        'score',
        'brand_id',
        'properties'
    ];
}
