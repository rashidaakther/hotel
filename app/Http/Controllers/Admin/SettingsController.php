<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;
use Image;
class SettingsController extends Controller
{
    public function banners()
    {
        $rooms = Banners::all();
        return view('admin.settings.banner.index',compact('rooms'));
    }
   
    public function edit_banner($id)
    {
        $item = Banners::find($id);
        return view('admin.settings.banner.edit',compact('item'));
    }
    public function save_banner (Request $request)
    {
        $folderName = date("Ym");
        $folder = "documents/banner/";
        $directory = $_SERVER["DOCUMENT_ROOT"] . "/" . ($folder);

        if ($request->id) {
            $item = Banners::find($request->id);
            $item->title = $request->title;
            $item->sub_title = $request->sub_title;
            $item->is_active = $request->is_active;
          
            $thumbnail = $request->file('thumbnail');

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
           

            if ($thumbnail) {
                $img = Image::make($thumbnail);
                $img->save($directory . $thumbnail->getClientOriginalName());
                if($item->image){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($item->image))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($item->image));
					}
                }
                $item->image = $folder . $thumbnail->getClientOriginalName();
            }
            if ($item->save()) {
                return back()->with(["success"=>"Successfully saved."]);
            }else{
                return back()->with(["error"=>"Failed to saved! Try again."]);
            }
        } 
       
    }
}
