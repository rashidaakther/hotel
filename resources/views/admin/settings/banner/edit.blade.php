@extends('admin.layouts.app')
@section('title', 'Update Banner')

@section('contents')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-action coin-tabs mb-2">
                                <h4 class="card-title">Banner Information</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="{{ route('banners') }}" class="btn btn-secondary"><- Back To Banner List</a>
                            </div>
                        </div>
                        <form method="post" action="{{ route('save-banner') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
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
                                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="title" value="{{ $item->title }}" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Sub Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="sub_title" value="{{ $item->sub_title }}" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label">Status</label>
                                                    <select class="form-control" name="is_active">
                                                        <option @if($item->is_active==1) selected @endif value="1">Active</option>
                                                        <option @if($item->is_active==2) selected @endif value="2">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>

                                         
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label">Thumbnail (1500 X 800)</label>
                                                    @if($item->image)
                                                        <img style="width: 100%" src="{{ asset($item->image) }}">
                                                    @endif
                                                    <input type="file" name="thumbnail">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                           


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
