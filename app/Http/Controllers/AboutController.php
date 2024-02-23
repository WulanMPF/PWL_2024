<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return 'Nama: Wulan Maulidya' . "<br>" . 'NIM: 2241720174';
    }
}
