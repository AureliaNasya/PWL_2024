<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($kategori) {
        return view('produk.index', ['kategori' => $kategori]);
    }
}
