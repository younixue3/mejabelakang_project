<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Auth, Str, Storage;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function get_data()
    {
        $data = Gallery::latest()->paginate(6);
        
        return $data;
    }

    public function get_edit_data($id)
    {
        $data = Gallery::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'img' => 'mimes:jpeg,jpg,png,svg|dimensions: max_width = 2464, max_height = 2464|max:2500',
        ]);
        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->sub_content = $request->sub_content;
        $gallery->content = $request->content;
        $gallery->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $gallery->image_content = $filename;
        };

        return $gallery->save();
    }

    public function update_data(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        $gallery->sub_content = $request->sub_content;
        $gallery->content = $request->content;
        $gallery->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $gallery->image_content = $filename;
        };
        return $gallery->save();
    }

    public function destroy_data($request)
    {
        // dd($request);
        $gallery = Gallery::findOrFail($request->id)->delete();
        return $gallery;
    }
}
