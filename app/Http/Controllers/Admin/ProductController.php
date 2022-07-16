<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productModel;
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }
    public function index()
    {
        $products = $this->productModel::orderBy('sale_off', 'asc')->paginate(1);
        $products->makeHidden(['view', 'token', 'description', 'details', 'image', 'quantity']);
        return response()->json([
            'status' => true,
            'payload' => $products,
        ]);
    }
}