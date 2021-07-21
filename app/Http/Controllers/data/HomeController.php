<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Publication;
use App\Models\Hero;

class HomeController extends Controller
{
    public function get_hero()
    {
        $data = Hero::latest()->first();

        return $data;
    }

    public function get_publication()
    {
        $data = Publication::latest()->paginate(3);

        return $data;
    }

    public function get_data()
    {
        $data = News::latest()->paginate(4);
        
        return $data;
    }

    public function get_gallery_data()
    {
        $data = Gallery::latest()->take(5)->get();
        
        return $data;
    }

    public function get_gallery2nd_data()
    {
        $data = gallery::latest()->skip(5)->take(10)->get();
        
        return $data;
    }

    public function get_second_data()
    {
        $data = News::latest()->skip(1)->take(3)->get();
        
        return $data;
    }

    public function get_show_data($id)
    {
        $data = News::findOrFail($id);
        return $data;
    }
    
    public function get_showgallery_data($id)
    {
        $data = Gallery::findOrFail($id);
        return $data;
    }
    
    public function get_showpublication_data($id)
    {
        $data = Publication::findOrFail($id);
        return $data;
    }
}
