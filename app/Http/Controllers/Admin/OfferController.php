<?php

namespace App\Http\Controllers\Admin;
use App\Models\Offers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function addOffer()
    {
      
        return view('admin.addOffer');
    }
    public function storeOffer(Request $request){
        $title = $request->input('Offer_Title');
        $percent = $request->input('Offer_percent');
        $detail = $request->input('details');
        

        $data = Offers::create([
            'Offer_Title'=>$title,
            'Offer_percent'=>$percent,
            'details'=>$detail
        ]);

        if($data)
        {
            return back()->with('msg', 'successfully saved');
        }
        else{
            return back()->with('msg', 'failed! please try again');
        }

    }
    public function OfferList(){
        $data = Offers::all();
        return view('admin.offerList', compact('data'));
    }

    public function edit_offer($id){
        $data = Offers::findOrFail($id);
        return view('admin.editOffer', compact('data'));
    }
    public function update_offer(Request $request){
        $id = $request->input('id');

        $data = Offers::findOrFail($id);

        $data->Offer_Title = $request->input('Offer_Title');
        $data->Offer_percent = $request->input('Offer_percent');
        $data->details = $request->input('details');

        $data->save();

        return redirect('OfferList');
    }

    public function delete_offer($id){
        Offers::destroy($id);

        return back();
    }
}
