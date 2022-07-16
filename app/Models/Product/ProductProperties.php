<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperties extends Model
{
    use HasFactory;
    protected $table = "product_properties";
    protected $primaryKey = "id";
    public $fillable = [
        'product_id',
        'properties_id',
    ];


    public $timestamps = false;
}