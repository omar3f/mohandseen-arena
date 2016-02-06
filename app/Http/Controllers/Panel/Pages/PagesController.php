<?php

namespace App\Http\Controllers\Panel\Pages;

use App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = (new \App\Page)->all();
        return view('panel.pages.all', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = (new \App\Page)->all();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.pages.create', compact('dropdown_pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreFile $storeFile)
    {
        $image_path = $storeFile->move($request->file('image'), 'images/pages/', 16);
        $modified_request = array_merge($request->all(), ['image' => $image_path]);
        (new \App\Page)->create($modified_request);
        return redirect()->action('Panel\Pages\PagesController@index');
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
        $page = (new \App\Page)->find($id);
        $pages = (new \App\Page)->all();
        $dropdown_pages = dropdown_generator($pages, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.pages.edit', compact('dropdown_pages', 'page'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, StoreFile $storeFile)
    {
        if ($request->hasFile('image')) {
            $image_path = $storeFile->move($request->file('image'), 'images/pages/', 16);
            $modified_request = array_merge($request->all(), ['image' => $image_path]);
        } else {
            $modified_request = $request->except('image');
        }
        (new \App\Page)->findOrFail($id)->update($modified_request);
        return redirect()->action('Panel\Pages\PagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Page)->destroy($id);
        return redirect()->action('Panel\Pages\PagesController@index');

    }
}
