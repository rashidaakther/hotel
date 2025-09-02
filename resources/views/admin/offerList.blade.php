@extends('admin.layouts.app')
@section('title', 'Offer List')

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
                                <a href="{{ route('add-room') }}" class="btn btn-secondary">+ New Offer</a>
                                
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
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Percent</th>
                                                    <th>Details</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr>
                                                    <td class="text-center">{{$item->id}}</td>
                                                    <td>
                                                        <div class="room-list-bx d-flex align-items-center">  
                                                            <div>
                                                                <span class=" fs-16 font-w500 text-nowrap">{{$item->thumbnail}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <span class="fs-16 font-w500 text-nowrap">{{$item->Offer_Title}}</span>
                                                    </td>
                                                    <td class="">
                                                        <div>
                                                            <span class="fs-16 comments">{{$item->Offer_percent}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div>
                                                            <span class="fs-16 comments">{{$item->details}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('edit_offer',[$item->id]) }}" class="btn btn-outline-light"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="{{ route('delete_offer',[$item->id]) }}" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></a>
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
