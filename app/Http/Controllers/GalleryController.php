<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\data\GalleryController as DataController;

class GalleryController extends Controller
{

    public function __construct(DataController $data)
    {
        $this->data = $data;
    }
    
    public function index()
    {
        $gallery = $this->data->get_data();

        $data = compact('gallery');

        return view('dashboard.gallery', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.data.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($this->data->store_data($request)) {
            return redirect()->route('gallery')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = $this->data->get_edit_data($id);

        $data = compact('gallery');

        return view('dashboard.data.gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->data->update_data($request, $id)) {
            return redirect()->route('gallery')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($this->data->destroy_data($request)) {
            return redirect()->route('gallery')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }
}
