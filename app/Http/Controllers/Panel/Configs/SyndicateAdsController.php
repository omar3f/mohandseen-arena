<?php

namespace App\Http\Controllers\Panel\Configs;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SyndicateAdsController extends Controller
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
        $ads = (new \App\SyndicateAds)->all();
        return view('panel.configs.syndicate-ads.all', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.configs.syndicate-ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\SyndicateAds\CreateSyndicateAdRequest $request)
    {
        (new \App\SyndicateAds)->create($request->all());
        return redirect()->action('Panel\Configs\SyndicateAdsController@index');
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
        $ad = (new \App\SyndicateAds)->findOrFail($id);

        return view('panel.configs.syndicate-ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\SyndicateAds\EditSyndicateAdRequest $request, $id)
    {
        (new \App\SyndicateAds)->findOrFail($id)->update($request->all());
        return redirect()->action('Panel\Configs\SyndicateAdsController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\SyndicateAds)->destroy($id);
        return redirect()->action('Configs\SyndicateAdsController@index');

    }
}
