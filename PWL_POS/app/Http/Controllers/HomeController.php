<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Welcome';
    }
    public function Home() {
        return 'Halaman Home Point of Sales';
    }
}
