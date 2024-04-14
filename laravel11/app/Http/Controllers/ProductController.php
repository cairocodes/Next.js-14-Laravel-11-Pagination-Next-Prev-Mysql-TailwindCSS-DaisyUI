<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage; //php artisan storage:link = php artisan storage:link = http://127.0.0.1:8000/storage/1.jpg

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::all(); // All Product

        $products = Product::paginate(3);

        // Return Json Response
        return response()->json([
            'results' => $products
        ], 200);
    }
}
