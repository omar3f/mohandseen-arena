<?php

namespace App\Http\Controllers\Panel\Configs;

use App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShortDescriptionImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = (new \App\ShortDescriptionImage)->all();

        return view('panel.configs.short-desc-images.all', compact('images'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.configs.short-desc-images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ShortDescriptionImage\CreateShortDescriptionImagesRequest $request, StoreFile $storeFile)
    {
        $image_path = $storeFile->move($request->file('image'), 'images/short-desc-images/', 16);
        $modified_request = array_merge($request->except('image'), ['image' => $image_path]);
        (new \App\ShortDescriptionImage)->create($modified_request);
        return redirect()->action('Panel\Configs\ShortDescriptionImagesController@index');

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
        $image = (new \App\ShortDescriptionImage)->findOrFail($id);
        return view('panel.configs.short-desc-images.edit', compact('image'));
    }

    /**
     * @param Requests\CreateEditShortDescriptionImagesRequest $request
     * @param $id
     * @param StoreFile $storeFile
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\ShortDescriptionImage\EditShortDescriptionImagesRequest $request, $id, StoreFile $storeFile)
    {
        if ($request->hasFile('image')) {
            $image_path = $storeFile->move($request->file('image'), 'images/short-desc-images/', 16);
            $modified_request = array_merge($request->all(), ['image' => $image_path]);

        } else {
            $modified_request = $request->except('image');

        }

        (new \App\ShortDescriptionImage)->findOrFail($id)->update($modified_request);
        return redirect()->action('Panel\Configs\ShortDescriptionImagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\ShortDescriptionImage)->destroy($id);
        return redirect()->action('Panel\Configs\ShortDescriptionImagesController@index');
    }
}
