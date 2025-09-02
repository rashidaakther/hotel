@extends('admin.layouts.app')
@section('title', 'Add Facility')

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
                        <form method="post" action="{{ route('facility_save') }}" enctype="multipart/form-data">
                            @csrf

                             <div class="card-header">
                                <div class="card-action coin-tabs mb-2">
                                    <h4 class="card-title">Facilities</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="title" value="title" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                                    <textarea rows="10" class="form-control" name="description" value="description" required></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Thumbnail  (620 X 620) <span class="text-danger">*</span></label>
                                                    <textarea rows="10" class="form-control" name="thumbnail" value="thumbnail" required></textarea>
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
