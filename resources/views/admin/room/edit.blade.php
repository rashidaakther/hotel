@extends('admin.layouts.app')
@section('title', 'Update Room')

@section('contents')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-action coin-tabs mb-2">
                                <h4 class="card-title">Room Information</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="{{ route('rooms') }}" class="btn btn-secondary"><- Back To Room List</a>
                            </div>
                        </div>
                        <form method="post" action="{{ route('add-room') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $room->id }}">
                            <div class="card-body">
                                <div class="basic-form">

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif

                                    <div class="row">

                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label">Room Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" value="{{ $room->name }}" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Room Type <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="room_type" value="{{ $room->room_type }}" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Floors/Room No <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="floor" value="{{ $room->floor }}" required>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label">Price (USD) <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="usd_price" value="{{ $room->usd_price }}" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Price (BDT) <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="bdt_price" value="{{ $room->bdt_price }}" required> 
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Status</label>
                                                    <select class="form-control" name="is_active">
                                                        <option @if($room->is_active==1) selected @endif value="1">Active</option>
                                                        <option @if($room->is_active==2) selected @endif value="2">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label">Thumbnail (1500 X 800)</label>
                                                    @if($room->thumbnail)
                                                        <img style="width: 100%" src="{{ asset($room->thumbnail) }}">
                                                    @endif
                                                    <input type="file" name="thumbnail">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label">Gallery Image 1 (1500 X 800)</label>
                                                    @if($room->image1)
                                                        <img style="width: 100%" src="{{ asset($room->image1) }}">
                                                    @endif
                                                    <input type="file" name="image1">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Gallery Image 2 (1500 X 800)</label>
                                                    @if($room->image2)
                                                        <img style="width: 100%" src="{{ asset($room->image2) }}">
                                                    @endif
                                                    <input type="file" name="image2">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Gallery Image 3 (1500 X 800)</label>
                                                    @if($room->image3)
                                                        <img style="width: 100%" src="{{ asset($room->image3) }}">
                                                    @endif
                                                    <input type="file" name="image3">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label">Gallery Image 4 (1500 X 800)</label>
                                                    @if($room->image4)
                                                        <img style="width: 100%" src="{{ asset($room->image4) }}">
                                                    @endif
                                                    <input type="file" name="image4">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Gallery Image 6 (1500 X 800)</label>
                                                    @if($room->image5)
                                                        <img style="width: 100%" src="{{ asset($room->image5) }}">
                                                    @endif
                                                    <input type="file" name="image5">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label">Features</label>
                                            <div class="row">
                                                <table class="featureTable">
                                                    @if($room->features)
                                                        @foreach (explode(",",$room->features) as $item) 
                                                        <tr>
                                                            <td> <input type="text" class="form-control" name="features[]" value="{{ $item }}">
                                                            </td>
                                                            <td> <button type="button" class="btn btn-sm btn-danger remove"><i class="fa fa-times"></i></button></td>
                                                        </tr>
                                                        @endforeach
                                                    @endif
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" name="features[]">
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success add"><i
                                                                    class="fa fa-plus"></i></button>

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')


@endsection
@section('script')

    <script>
        $(document).on("click", ".add", function(e) {
            e.preventDefault();
            var row = `<tr>
                    <td> 
                        <input type="text" class="form-control" name="features[]">
                    </td>
                    <td> 
                        <button type="button" class="btn btn-sm btn-danger remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>`;

            $('.featureTable').append(row);
        });
        $(document).on("click", ".remove", function(e) {
            e.preventDefault();
            $(this).closest("tr").remove();
        });
    </script>
@endsection
