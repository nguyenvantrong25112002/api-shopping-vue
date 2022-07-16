<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = "properties";
    protected $primaryKey = "id";
    public $fillable = [
        'name',
        'slug',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_properties', 'properties_id', 'product_id');
    }
    public function species()
    {
        return $this->hasMany(Species::class,  'properties_id', 'id');
    }
}