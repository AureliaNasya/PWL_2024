<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
        }
    
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Aurelia Nasya (2241760084)';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}