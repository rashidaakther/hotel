@extends('admin.layouts.app')
@section('title', 'Edit offer')

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
                                <h4 class="card-title">Offer Information</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="{{ route('rooms') }}" class="btn btn-secondary"><- Back To Offer List</a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('update_offer') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <input type="hidden" name="id" value = "{{$data->id}}">
                                                    <label class="form-label">Offer Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="Offer_Title" value = "{{$data->Offer_Title}}" required>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Offer % <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="Offer_percent" value = "{{$data->Offer_percent}}" required>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Thumbnail (620 X 620) <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="thumbnail" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">Details about Offer <span class="text-danger">*</span></label>
                                                    <textarea id="" rows="10" class="form-control" name="details" required>{{$data->details}}</textarea>
                                                </div>
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
