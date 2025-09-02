@extends('layouts.app')
@section('title', 'Rooms & Suites')


@section('contents')

<div id="gdlr-header-substitute">
</div>
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">Rooms & Suites</h1>
        <span class="gdlr-page-caption">Accommodation</span>
    </div>
</div>
 <!-- is search -->
 <div class="content-wrapper">
    <div class="gdlr-content">

        <!-- Above Sidebar Section-->

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <section id="content-section-1">
                <div class="section-container container">
                    <div class="room-item-wrapper type-classic" style="margin-bottom: 20px;">
                        <div class="room-item-holder ">
                            <div class="clear"></div>
                            @foreach ($rooms as $item)
                            <div class="three columns">
                                <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                                    <div class="gdlr-ux gdlr-classic-room-ux">
                                        <div class="gdlr-room-thumbnail">
                                            <a href="{{ route('accommodation-details',[$item->id]) }}"><img src="{{ asset($item->thumbnail) }}" alt="" width="400" height="300"></a>
                                        </div>
                                        <h3 class="gdlr-room-title"><a href="#">{{ $item->name }}  <br> {{ $item->floor }} </a></h3>
                                        <div class="gdlr-hotel-room-info">
                                            @if($item->features)
                                                @foreach (explode(",",$item->features) as $item2) 
                                                <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">{{ $item2}} </span></div>
                                                @endforeach
                                            @endif
                                            <div class="gdlr-room-price"><span class="gdlr-head">Start From</span><span class="gdlr-tail">${{ $item->usd_price }} / ৳{{ $item->bdt_price }}</span></div>
                                            <div class="clear"></div>
                                        </div><a class="gdlr-button with-border" href="{{ route('accommodation-details',[$item->id]) }}">Check Details<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                            @endforeach
                            
                           
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
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
