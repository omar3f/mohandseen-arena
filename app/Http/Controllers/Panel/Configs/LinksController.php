<?php

namespace App\Http\Controllers\Panel\Configs;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = (new \App\Link)->all();
        dd(r_link((new \App\Link)->where('parent_id', '0')->get()));
        return view('panel.configs.links.all', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = (new \App\Link)->all();
        $dropdown_links = dropdown_generator($links, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.configs.links.create', compact('dropdown_links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        (new \App\Link)->create($request->all());
        return redirect()->action('Panel\Configs\LinksController@index');
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
        $link = (new \App\Link)->findOrFail($id);
        $links = (new \App\Link)->all();
        $dropdown_links = dropdown_generator($links, ['id' => 'title'], ['0' => 'No Parent']);
        return view('panel.configs.links.edit', compact('links', 'link', 'dropdown_links'));

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
        (new \App\Link)->findOrFail($id)->update($request->all());
        return redirect()->action('Panel\Configs\LinksController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Link)->destroy($id);
        return redirect()->action('Panel\Configs\LinksController@index');

    }
    public function toggleVisibility($id) {
        $link = (new \App\Link)->findOrFail($id);
        $link->update(['visibility' => ($link->visibility -1 ) * -1]);
        return redirect()->action('Panel\Configs\LinksController@index');
    }
}
