<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use Image;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        return view('admin.room.index',compact('rooms'));
    }
    public function add_room()
    {
        return view('admin.room.add');
    }
    public function edit_room($id)
    {
        $room = Rooms::find($id);
        return view('admin.room.edit',compact('room'));
    }
    public function save_room(Request $request)
    {
        $folderName = date("Ym");
        $folder = "documents/room/$folderName/";
        $directory = $_SERVER["DOCUMENT_ROOT"] . "/" . ($folder);

        if ($request->id) {
            $room = Rooms::find($request->id);
            $room->name = $request->name;
            $room->room_type = $request->room_type;
            $room->floor = $request->floor;
            $room->usd_price = $request->usd_price;
            $room->bdt_price = $request->bdt_price;
            $room->is_active = $request->is_active;

            $features=[];
            foreach($request->features as $item){
                if($item){
                    $features[]=ucfirst(trim($item));
                }                
            }
            $room->features = $features ? implode(",", $features) : '';
            
            $event_image = $request->file('image1');
            $event_image2 = $request->file('image2');
            $event_image3 = $request->file('image3');
            $event_image4 = $request->file('image4');
            $event_image5 = $request->file('image5');
            $thumbnail = $request->file('thumbnail');

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
            if ($event_image) {
                $img = Image::make($event_image);
                $fileName = time() . '_1.' . $event_image->getClientOriginalExtension();
                $img->save($directory .    $fileName ); 
                if($room->image1){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->image1))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->image1));
					}
                }
                $room->image1 = $folder . $fileName;
            }
            if ($event_image2) {
                $img = Image::make($event_image2);
                $fileName = time() . '_2.' . $event_image2->getClientOriginalExtension();
                $img->save($directory . $fileName );
                if($room->image2){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->image2))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->image2));
					}
                }
                $room->image2 = $folder . $fileName ;
            }
            if ($event_image3) {
                $img = Image::make($event_image3);
                $fileName = time() . '_3.' . $event_image3->getClientOriginalExtension();
                $img->save($directory . $fileName );
                if($room->image3){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->image3))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->image3));
					}
                }
                $room->image3 = $folder . $fileName ;
            }
            if ($event_image4) {
                $img = Image::make($event_image4);
                $fileName = time() . '_4.' . $event_image4->getClientOriginalExtension();
                $img->save($directory . $event_image4->getClientOriginalName());
                if($room->image4){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->image4))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->image4));
					}
                }
                $room->image4 = $folder . $event_image4->getClientOriginalName();
            }
            if ($event_image5) {
                $img = Image::make($event_image5);
                $fileName = time() . '_5.' . $event_image5->getClientOriginalExtension();
                $img->save($directory . $fileName );
                if($room->image5){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->image5))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->image5));
					}
                }
                $room->image5 = $folder . $fileName ;
            }

            if ($thumbnail) {
                $img = Image::make($thumbnail);
                $fileName = time() . '_thum.' . $thumbnail->getClientOriginalExtension();
                $img->save($directory . $fileName );
                if($room->thumbnail){                
					if(file_exists($_SERVER["DOCUMENT_ROOT"]."/".($room->thumbnail))){                       
						unlink($_SERVER["DOCUMENT_ROOT"]."/".($room->thumbnail));
					}
                }
                $room->thumbnail = $folder . $fileName ;
            }
            if ($room->save()) {
                return back()->with(["success"=>"Successfully saved."]);
            }else{
                return back()->with(["error"=>"Failed to saved! Try again."]);
            }
        } else {
            $room = new Rooms();
            $room->name = $request->name;
            $room->room_type = $request->room_type;
            $room->floor = $request->floor;
            $room->usd_price = $request->usd_price;
            $room->bdt_price = $request->bdt_price;
            $room->is_active = $request->is_active;
            $features=[];
            foreach($request->features as $item){
                if($item){
                    $features[]=ucfirst(trim($item));
                }                
            }
            $room->features = $features ? implode(",", $features) : '';
            $folder = "documents/room/$folderName/";
            $event_image = $request->file('image1');
            $event_image2 = $request->file('image2');
            $event_image3 = $request->file('image3');
            $event_image4 = $request->file('image4');
            $event_image5 = $request->file('image5');
            $thumbnail = $request->file('thumbnail');

            $directory = $_SERVER["DOCUMENT_ROOT"] . "/" . ($folder);
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
            if ($event_image) {
                $img = Image::make($event_image);
                $fileName = time() . '_1.' . $event_image5->getClientOriginalExtension();
                $img->save($directory . $fileName);
                $room->image1 = $folder . $fileName;
            }
            if ($event_image2) {
                $img = Image::make($event_image2);
                $fileName = time() . '_2.' . $event_image5->getClientOriginalExtension();
                $img->save($directory .$fileName);
                $room->image2 = $folder . $fileName;
            }
            if ($event_image3) {
                $img = Image::make($event_image3);
                $img->save($directory . $event_image3->getClientOriginalName());
                $fileName = time() . '_3.' . $fileName;
                $room->image3 = $folder . $fileName;
            }
            if ($event_image4) {
                $img = Image::make($event_image4);
                $img->save($directory . $event_image4->getClientOriginalName());
                $fileName = time() . '_4.' .$fileName;
                $room->image4 = $folder . $fileName;
            }
            if ($event_image5) {
                $img = Image::make($event_image5);
                $fileName = time() . '_5.' . $event_image5->getClientOriginalExtension();
                $img->save($directory . $fileName);
                $room->image5 = $folder . $fileName;
            }

            if ($thumbnail) {
                $img = Image::make($thumbnail);
                $fileName = time() . '_thum.' . $thumbnail->getClientOriginalExtension();
                $img->save($directory .  $fileName);
                $room->thumbnail = $folder . $fileName;
            }
            if ($room->save()) {
                return back()->with(["success"=>"Successfully saved."]);
            }else{
                return back()->with(["error"=>"Failed to saved! Try again."]);
            }
        }
       
    }
}
