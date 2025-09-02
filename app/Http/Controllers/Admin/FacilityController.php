<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addfacility()
    {
        return view('admin.facility.addfacility');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facilitylist()
    {
       $data = Facilities::all();
        return view('admin.facility.facilitylist', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefacility(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $thumbnail = $request->input('thumbnail');


        
        $data = Facilities::create([
            'title'=>$title,
            'description'=>$description,
            'thumbnail'=>$thumbnail
        ]);

        if($data)
        {
            return back()->with('msg', 'successfully saved');
        }
        else{
            return back()->with('msg', 'failed! please try again');
        }

    }

    
    
    public function editfacility($id)
    {
        $data = Facilities::findOrFail($id);
        return view('admin.facility.editfacility', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function facilityupdate(Request $request)
    {
        $id = $request->input('id');

        $data = Facilities::findOrFail($id);

      

        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->thumbnail = $request->input('thumbnail');

        $data->save();

        return redirect('facility_list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function facilitydestroy(int $id)
    {
        Facilities::destroy($id);

        return redirect()->back();
    }
    
}
