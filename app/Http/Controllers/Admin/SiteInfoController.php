<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfos;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    
    public function index()
    {
        $data = SiteInfos::all()->where('id', 1);
        return view('admin.siteinfo', compact('data'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteInfos  $siteInfos
     * @return \Illuminate\Http\Response
     */
    public function show(SiteInfos $siteInfos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteInfos  $siteInfos
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteInfos $siteInfos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteInfos  $siteInfos
     * @return \Illuminate\Http\Response
     */
    public function siteInfo_save(Request $request){

        $id = 1;

        $data = SiteInfos::findOrFail($id);

        $data->a_littl_about_us = $request->input('a_littl_about_us');
        $data->about_us = $request->input('about_us');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->facebook = $request->input('facebook');
        $data->twitter = $request->input('twitter');
        $data->linkdin = $request->input('linkdin');
        $data->pinterest = $request->input('pinterest');

        $data->save();

        return redirect()->back();
    }
}