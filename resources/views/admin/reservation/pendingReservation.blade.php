@extends('admin.layouts.app')
@section('title', 'Reservation')

@section('contents')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-action coin-tabs mb-2">
                               
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="AllRooms">
                                    <div class="table-responsive">
                                        <table class="table card-table display mb-4 shadow-hover table-responsive-lg"
                                            id="guestTable-all3">
                                            <thead>
                                                <tr>
                                                    <th  class="text-center">SL No</th>
                                                    <th>Name</th>
                                                    <th>Phone_Number</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $reservation)
                                                <tr>
                                                    <td class="text-center">{{$reservation->id}}</td>
                                                    <td>
                                                        <div class="room-list-bx d-flex align-items-center">  
                                                            <div>
                                                                <span class=" fs-16 font-w500 text-nowrap">{{$reservation->full_name}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <span class="fs-16 font-w500 text-nowrap">{{$reservation->contact_number}}</span>
                                                    </td>
                                                    <td class="">
                                                        <div>
                                                            <span class="fs-16 comments">{{$reservation->email}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div>
                                                            <span class="fs-16 comments">{{$reservation->address}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <a href="{{ route('reservation_Details',[$reservation->id]) }}" class="btn btn-outline-light"><i class="bi bi-pencil-square"></i></a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
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
