<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($kategori) {
        return view('products.index',['kategori' => $kategori]);
    }
}
