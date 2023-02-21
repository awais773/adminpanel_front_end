<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'store_name',
        'kosher_status',
        'barcode',
        'description',
        'manufacturer',
        'distributer_id',
        'category_id',
        'product_family',
        'packing',
        'diet',
        'supervisor',
        'ingredients',
        'product_image',
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['product_image'] = json_encode($value);
    }


    public function category() {
        return $this->hasOne('App\Models\Api\Category', 'id', 'category_id');
    }
    public function distributer() {
        return $this->hasMany('App\Models\Api\Distributer', 'id', 'distributer_id');
    }
}
