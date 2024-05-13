<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    public function lihat() {
        return view('profile.halaman1');
    }
}
