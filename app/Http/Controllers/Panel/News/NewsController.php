<?php

namespace App\Http\Controllers\Panel\News;

use App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = (new \App\News)->all();
        return view('panel.news.all', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.news.create');
    }

    /**
     * @param Requests\News\CreateNewsRequest $request
     */
    public function store(Requests\News\CreateNewsRequest $request, StoreFile $storeFile)
    {
        $image_path = $storeFile->move($request->file('image'), 'images/news/', 16);
        $modified_request = array_merge($request->all(), ['image' => $image_path]);
        (new \App\News)->create($modified_request);
        return redirect()->action('Panel\News\NewsController@index');
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
        $new = (new \App\News)->findOrFail($id);
        return view('panel.news.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\News\EditNewsRequest $request, $id, StoreFile $storeFile)
    {
        if ($request->hasFile('image')) {
            $image_path = $storeFile->move($request->file('image'), 'images/news/', 16);
            $modified_request = array_merge($request->all(), ['image' => $image_path]);

        } else {
            $modified_request = $request->except('image');
        }
        (new \App\News)->findOrFail($id)->update($modified_request);
//        $news->;
        return redirect()->action('Panel\News\NewsController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\News)->destroy($id);
        return redirect()->action('Panel\News\NewsController@index');

    }
}
