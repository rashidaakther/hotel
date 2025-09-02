<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Rooms;
use App\Models\SiteInfos;
use App\Models\Facilities;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $rooms = Rooms::query()->where("is_active",1)->get();
        $banners = Banners::query()->where("is_active",1)->get();
        $SiteInfos = SiteInfos::query()->where("id",1)->get();
        $Facilities = Facilities::all();

        return view("home", compact('rooms','banners', 'SiteInfos', 'Facilities'));
    }
    public function accommodation(){
        $rooms = Rooms::query()->where("is_active",1)->get();
        return view("accommodation",compact('rooms'));
    }
    public function accommodation_details($id){
        $room = Rooms::findOrFail($id);
        return view("accommodation_details",compact('room'));
    }
    public function suite(){
        return view("suite");
    }
    public function contact(){
        return view("contact");
    }
    public function dining(){
        return view("dining");
    }
    public function meeting(){
        return view("meeting");
    }
    public function facilities(){

        $Facilities = Facilities::all();
        return view("facilities", compact('Facilities'));

       
    }
    public function offers(){
        return view("offer");
    }
    public function reservation(){
        $rooms = Rooms::query()->where("is_active",1)->get();
        return view("reservation", compact('rooms'));
    }
    public function tariff(){
        $rooms = Rooms::query()->where("is_active",1)->get();
        return view("tariff",compact('rooms'));
    }
}
