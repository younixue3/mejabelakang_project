<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallery;
use App\Models\News;

class DashboardController extends Controller
{
    public function get_data()
    {
        $data = News::latest()->first();
        
        return $data;
    }

    public function get_second_data()
    {
        $data = News::latest()->skip(1)->take(3)->get();
        
        return $data;
    }

    public function get_total_gallery()
    {
        $data = Gallery::count();
        
        return $data;
    }
    
    public function get_total_news()
    {
        $data = News::count();
        
        return $data;
    }
    
    public function get_total_content()
    {
        if (News::count() == null ) {
            # code...
        } else {
            # code...
        }
        
        $data = News::count() + Gallery::count();
        
        return $data;
    }
}
