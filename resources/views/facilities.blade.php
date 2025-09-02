@extends('layouts.app')
@section('title', 'Facilities')


@section('contents')

<div id="gdlr-header-substitute">
</div>
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">Facilites</h1>
        {{-- <span class="gdlr-page-caption">Accommodation</span> --}}
    </div>
</div>

  <!-- is search -->
  <div class="content-wrapper">
    <div class="gdlr-content">

        <!-- Above Sidebar Section-->

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left twelve columns">
                    <div class="with-sidebar-content twelve columns">
                        <div class="main-content-container container gdlr-item-start-content">
                            <div class="gdlr-item gdlr-main-content">
                                @foreach($Facilities as $Facility)
                                <div class="gdlr-shortcode-wrapper">
                                    <div class="gdlr-styled-box-item-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-styled-box-item">
                                            <div class="gdlr-styled-box-body">
                                                <div class="gdlr-shortcode-wrapper gdlr-row-shortcode">
                                                    <div class="four columns">
                                                        <div class="gdlr-item gdlr-column-shortcode">

                                                            <div class="gdlr-room-thumbnail">
                                                               <img src="images/hotel/spa.jpg" alt="" width="400" height="300">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="eight columns">
                                                        <div class="gdlr-item gdlr-column-shortcode">

                                                            <h3 class="gdlr-heading-shortcode " style="font-size: 24px;font-weight: bold;">{{$Facility->title}} </h3> {{$Facility->description}}
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                @endforeach
                                
                            </div>
                        </div>

                    </div>

                    <div class="clear"></div>
                </div>

                
                <div class="clear"></div>
            </div>
        </div>

        <!-- Below Sidebar Section-->

    </div>
    <!-- gdlr-content -->
    <div class="clear"></div>
</div>
<!-- content wrapper -->
   
@endsection
@section('style')
   

@endsection
@section('script')
    

@endsection
