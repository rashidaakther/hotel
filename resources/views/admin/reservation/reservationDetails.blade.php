@extends('admin.layouts.app')
@section('title', 'Details Reservation')

@section('contents')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    @if (Session::has('msg'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="card-action coin-tabs mb-2">
                                <h4 class="card-title">Reservation Details</h4>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h3>Personal Information</h3>
                                    <div class="group">
                                        <label for="" >Full Name</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->full_name}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Contact Number</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->contact_number}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Email</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->email}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Address</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->address}}</p>
                                    </div>
                                </div>
                                <div class="col-4 card card-body text-center text-capitalize">
                                    @if ($data->status=="pending")
                                    <p class="h2 text-danger">{{$data->status}}</p>
                                    <a href="{{ route('update_reserve_status',[$data->id]) }}" class="btn btn-light mt-3">update status</a>
                                    @else
                                    <p class="h2 text-success">{{$data->status}}</p>
                                    @endif
                                   
                                </div>
                            </div>
                            <div class="row">
                                <h3>Reservation Details</h3>
                                <div class="col-6">

                                    <div class="group">
                                        <label for="" >Check-in Date</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->check_in_date}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Room/Suite Type</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->room_type}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Number of person</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->number_of_person}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Special Comments </label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->special_comments}}</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="group">
                                        <label for="" >Check-out Date </label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->check_out_date}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Number of room/suite</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->number_of_room}}</p>
                                    </div>
                                    <div class="group">
                                        <label for="" >Number of children</label>
                                        <p class="py-2 px-3 border border-light rounded-pill">{{$data->number_of_children}}</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')


@endsection
@section('script')

@endsection
