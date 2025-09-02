@extends('admin.layouts.app')
@section('title', 'Home Banners')

@section('contents')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">                        
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="AllRooms">
                                    <div class="table-responsive">
                                        <table class="table card-table display mb-4 shadow-hover table-responsive-lg"
                                            id="guestTable-all3">
                                            <thead>
                                                <tr>
                                                    <th  class="text-center">#</th>
                                                    <th>Banner</th>
                                                    <th>Title</th>
                                                    <th>Sub Title</th>                                                   
                                                    <th class="bg-none"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rooms as $key=>$row)
                                                <tr>
                                                    <td class="text-center"> {{ $key+1 }}</td>
                                                    <td>
                                                        <div class="room-list-bx d-flex align-items-center">
                                                            @if($row->image)
                                                            <img class="me-3 rounded" src="{{ asset($row->image) }}"
                                                                alt="">
                                                                @endif
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <span class="fs-16 font-w500 text-nowrap">{{ $row->title }}</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="fs-16 font-w500">{{ $row->sub_title }}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit-banner',[$row->id]) }}">Edit</a>
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
