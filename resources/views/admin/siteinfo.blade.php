@extends('admin.layouts.app')
@section('title', 'Site Information')

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
                        <form method="post" action="{{ route('siteInfo_save') }}">
                            @csrf

                            @foreach($data as $info)
                            <div class="card-header">
                                <div class="card-action coin-tabs mb-2">
                                    <h4 class="card-title">About</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label class="form-label">A Little About Us <span class="text-danger">*</span></label>
                                                    <textarea rows="10" class="form-control" name="a_littl_about_us" required>{{$info->a_littl_about_us}}</textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">About Us <span class="text-danger">*</span></label>
                                                    <textarea rows="10" class="form-control" name="about_us" required>{{$info->about_us}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card-header">
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
                                                    <input type="text" class="form-control" name="Facilities1" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                                    <textarea rows="10" class="form-control" name="Facilities_des1" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card-header">
                                <div class="card-action coin-tabs mb-2">
                                    <h4 class="card-title">Contact Details</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="phone"  required value="{{$info->phone}}">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="email" required value="{{$info->email}}">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="address" required value="{{$info->address}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-muted">Social links</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Facebook <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="facebook" required value="{{$info->facebook}}">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Twitter <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="twitter" required value="{{$info->twitter}}">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">linkdin <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="linkdin" required value="{{$info->linkdin}}">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-2">
                                                    <label class="form-label">Pinterest <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="pinterest" required value="{{$info->pinterest}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

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
