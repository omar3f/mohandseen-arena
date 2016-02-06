<?php

namespace App\Http\Controllers\Panel\Configs;

use App\Helpers\StoreFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CouncilController extends Controller
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
        $members = (new \App\Council)->all();
        return view('panel.configs.council.all', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.configs.council.create');
    }

    /**
     * @param Requests\Council\CreateCouncilRequest $request
     * @param StoreFile $storeFile
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\Council\CreateCouncilRequest $request, StoreFile $storeFile)
    {
        $image_path = $storeFile->move($request->file('image'), 'images/council/', 16);
        $modified_request = array_merge($request->all(), ['image' => $image_path]);
        (new \App\Council)->create($modified_request);
        return redirect()->action('Panel\Configs\CouncilController@index');

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
        $member = (new \App\Council)->findOrFail($id);
        return view('panel.configs.council.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Council\EditCouncilRequest $request, $id, StoreFile $storeFile)
    {
        if ($request->hasFile('image')) {
            $image_path = $storeFile->move($request->file('image'), 'images/council/', 16);
            $modified_request = array_merge($request->all(), ['image' => $image_path]);
        } else {
            $modified_request = $request->except('image');
        }
        (new \App\Council)->findOrFail($id)->update($modified_request);
        return redirect()->action('Panel\Configs\CouncilController@index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Council)->destroy($id);
        return redirect()->action('Panel\Configs\CouncilController@index');

    }
}
