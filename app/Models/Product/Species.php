<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;
    protected $table = "species";
    protected $primaryKey = "id";
    public $fillable = [

        'name',
        'slug',
        'describe',
        'properties_id',
    ];
}