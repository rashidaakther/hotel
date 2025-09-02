@extends('admin.layouts.app')
@section('title', 'Room List')

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
                            <div class="d-flex align-items-center mb-2">
                                <a href="{{ route('add-room') }}" class="btn btn-secondary">+ New Room</a>
                                
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
                                                    <th  class="text-center">#</th>
                                                    <th>Room Name</th>
                                                    <th>Room Floor</th>
                                                    <th>Rate</th>
                                                    <th>Features</th>
                                                    <th>Price</th>
                                                    <th class="bg-none"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rooms as $key=>$row)
                                                <tr>
                                                    <td class="text-center"> {{ $key+1 }}</td>
                                                    <td>
                                                        <div class="room-list-bx d-flex align-items-center">
                                                            @if($row->thumbnail)
                                                            <img class="me-3 rounded" src="{{ asset($row->thumbnail) }}"
                                                                alt="">
                                                                @endif
                                                            <div>
                                                                <span class=" fs-16 font-w500 text-nowrap">{{ $row->name}} </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <span class="fs-16 font-w500 text-nowrap">{{ $row->room_type }}</span>
                                                    </td>
                                                    <td>
                                                        <div>

                                                            <span class="fs-16 font-w500">{{ $row->floor }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="facility">
                                                        <div>
                                                            <span class="fs-16 comments">{{ $row->features }} </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <span class="font-w500">${{ $row->usd_price }}<small class="fs-14">/৳{{ $row->bdt_price }}</small></span>
                                                        </div>
                                                    </td>
                                                 
                                                    <td>
                                                        <div class="dropdown dropend">
                                                            <a href="javascript:void(0);" class="btn-link"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                                                                        stroke="#262626" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
                                                                        stroke="#262626" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
                                                                        stroke="#262626" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('edit-room',[$row->id]) }}">Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
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
