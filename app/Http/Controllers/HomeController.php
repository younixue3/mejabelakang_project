<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\data\HomeController as DataController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hero = $this->data->get_hero();
        $news = $this->data->get_data();
        $publication = $this->data->get_publication();
        $gallery = $this->data->get_gallery_data();
        $gallery2nd = $this->data->get_gallery2nd_data();

        $data = compact('news', 'gallery', 'gallery2nd', 'hero', 'publication');

        return view('welcome', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->data->get_show_data($id);

        $data = compact('data');

        return view('page', $data);
    }

    public function showgallery($id)
    {
        $data = $this->data->get_showgallery_data($id);

        $data = compact('data');

        return view('page', $data);
    }

    public function showpublication($id)
    {
        $data = $this->data->get_showpublication_data($id);

        $data = compact('data');

        return view('page', $data);
    }
}
