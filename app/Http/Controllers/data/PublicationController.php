<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Auth, Str, Storage;
use App\Models\Publication;
use App\Models\Hero;

class PublicationController extends Controller
{
    public function get_hero_data()
    {
        $data = Hero::latest()->first();
        
        return $data;
    }

    public function get_data()
    {
        $data = Publication::latest()->paginate(6);
        
        return $data;
    }

    public function get_edit_data($id)
    {
        $data = Publication::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        // dd($request->file('image_content'));
        $this->validate($request, [
            'img' => 'mimes:jpeg,jpg,png,svg|dimensions: max_width = 2464, max_height = 2464|max:2500',
        ]);
        $publication = new Publication;
        $publication->title = $request->title;
        $publication->sub_content = $request->sub_content;
        $publication->content = $request->content;
        $publication->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $publication->image_content = $filename;
        };

        return $publication->save();
    }

    public function update_data(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);
        $publication->title = $request->title;
        $publication->sub_content = $request->sub_content;
        $publication->content = $request->content;
        $publication->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $publication->image_content = $filename;
        };
        return $publication->save();
    }

    public function destroy_data(Request $request)
    {
        $publication = Publication::findOrFail($request->id)->delete();
        return $publication;
    }
}
