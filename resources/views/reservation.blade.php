@extends('layouts.app')
@section('title', 'Reservation')


@section('contents')

<div id="gdlr-header-substitute">
</div>
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">RESERVATION</h1>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="gdlr-content">

        <div class="container my-5">
            <div class="row">
                <style>
                    .form-control{
                        border: none;
                    }
                    .form-control:focus{
                        background-color: #212121 !important;
                        color: aliceblue !important;
                    }
                </style>
                <div class="col-lg-4 col-md-12 col-12 text-light  py-4">
                    <h5>SEND REQUEST FOR RESERVATION</h5>
                   <form method="POST" class="" action="{{ route('reservation_save') }}">
                    @csrf
                        <div class="form-group">
                            <label for="">Full Name  <sup>*</sup> </label>
                            <input type="text" class="form-control wpcf7-form-control wpcf7-text" name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number <sup>*</sup> </label>
                            <input type="Number" class="form-control wpcf7-form-control wpcf7-text" name="contact_number">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control wpcf7-form-control wpcf7-text" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea class="form-control wpcf7-form-control wpcf7-textarea" rows="3" name="address"></textarea>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-light py-4 ">
                    <h5>RESERVATION DETAILS</h5>
                   
                        <div class="form-group ">
                            <label for="">Check-in Date:</label>
                            <input type="date" class="form-control wpcf7-form-control wpcf7-text text-light" style="color-scheme: dark;" name="check_in_date">
                        </div>
                        <div class="form-group gdlr-hotel-availability">
                            <label for="exampleFormControlSelect1">Room/Suite Type <sup>*</sup></label>
                            <select class="form-control wpcf7-form-control wpcf7-text text-light" id="" name="room_type">
                                <option selected>Chose room</option>
                                @foreach($rooms as $room)
                                <option class="" value="{{$room->name}}">{{$room->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Number of person <sup>*</sup></label>
                            <select class="form-control wpcf7-form-control text-light" id="" name="number_of_person" >
                              <option class="" value="1">1</option>
                              <option class="" value="2">2</option>
                              <option class="" value="3">3</option>
                              <option class="" value="4">4</option>
                              <option class="" value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Special Comments  <sup>*</sup></label>
                            <textarea class="form-control wpcf7-form-control wpcf7-textarea" rows="3" name="special_comments"></textarea>
                        </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-light py-4 pt-5">
                  
                        <div class="form-group pt-2">
                            <label for="">Check-out Date:</label>
                            <input type="date" class="form-control wpcf7-form-control wpcf7-text text-light" style="color-scheme: dark;" name="check_out_date">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Number of room/suite <sup>*</sup></label>
                            <select class="form-control wpcf7-form-control wpcf7-text text-light" id="" name="number_of_room">
                              <option class="" value="1">1</option>
                              <option class="" value="2">2</option>
                              <option class="" value="3">3</option>
                              <option class="" value="4">4</option>
                              <option class="" value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Number of children <sup>*</sup></label>
                            <select class="form-control wpcf7-form-control wpcf7-text text-light" id="" name="number_of_children">
                              <option class="" value="1">1</option>
                              <option class="" value="2">2</option>
                              <option class="" value="3">3</option>
                              <option class="" value="4">4</option>
                              <option class="" value="5">5</option>
                            </select>
                        </div>
                        <button class="btn border-secondary text-light mt-4 w-100">Submit Request</button>
                    </form>
                </div>
            </div>
    
            <div class="row mt-4">
                <div class="col-lg-8 col-md-6 col-12 ">
                    <img src="{{ asset('images/contact.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-md-0 mt-3">
                   
                    <h2 class="bg-dark mb-3 text-light p-2">Tariff</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless table-hover text-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="border-right border-secondary">
                                        Room Type</th>
                                    <th scope="col">BDT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $room)
                                <tr>
                                    <td class="border-right border-secondary">{{$room->name}}</td>
                                    <td>BDT {{$room->bdt_price}}/ ${{$room->usd_price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
    <!-- gdlr-content -->
    <div class="clear"></div>
</div>
<!-- content wrapper -->

   
@endsection
@section('style')
   

@endsection
@section('script')
    

@endsection
