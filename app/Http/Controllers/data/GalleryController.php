<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function get_data()
    {
        $data = 'Gallery';
        
        return $data;
    }

    public function store_data(Request $request)
    {

    }
}
