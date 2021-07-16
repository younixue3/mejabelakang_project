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
        $gallery = $this->data->get_data();
        $gallery2nd = $this->data->get_second_data();

        $data = compact('gallery', 'gallery2nd');

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
        $news = $this->data->get_show_data($id);

        $data = compact('news');

        return view('page', $data);
    }

}
