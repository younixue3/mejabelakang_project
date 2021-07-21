<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Auth, Str, Storage;
use App\Models\Hero;

class HeroController extends Controller
{
    public function get_data()
    {
        $data = Hero::latest()->first();
        
        return $data;
    }
    public function store_data(Request $request)
    {
        $this->validate($request, [
            'img' => 'mimes:png|dimensions: max_width = 2464, max_height = 2464|max:2500',
        ]);
        $hero = new Hero;
        $hero->desc = $request->desc;
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $hero->image_content = $filename;
        };

        return $hero->save();
    }
}
