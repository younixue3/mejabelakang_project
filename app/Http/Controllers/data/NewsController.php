<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Auth, Str, Storage;
use App\Models\News;

class newsController extends Controller
{
    public function get_data()
    {
        $data = News::latest()->paginate(6);
        
        return $data;
    }

    public function get_edit_data($id)
    {
        $data = News::findOrFail($id);
        return $data;
    }

    public function store_data(Request $request)
    {
        // dd($request->file('image_content'));
        $this->validate($request, [
            'img' => 'mimes:jpeg,jpg,png,svg|dimensions: max_width = 2464, max_height = 2464|max:2500',
        ]);
        $news = new News;
        $news->title = $request->title;
        $news->sub_content = $request->sub_content;
        $news->content = $request->content;
        $news->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $news->image_content = $filename;
        };

        return $news->save();
    }

    public function update_data(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->sub_content = $request->sub_content;
        $news->content = $request->content;
        $news->user_id = Auth::id();
        $filename = rand('00000','99999').'.png';
        if ($request->image_content != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->image_content , $filename);

            $news->image_content = $filename;
        };
        return $news->save();
    }

    public function destroy_data(Request $request)
    {
        $news = News::findOrFail($request->id)->delete();
        return $news;
    }
}
