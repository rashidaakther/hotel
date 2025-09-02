@extends('layouts.app')
@section('title', 'i-Suites Residence & Restaurent')
@section('contents')


    <!-- is search -->
    <div class="content-wrapper">
        <div class="gdlr-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <section id="content-section-1">
                    <div class="gdlr-full-size-wrapper gdlr-show-all"
                        style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" style="margin-bottom: 0px;">
                            <!-- MasterSlider -->
                            <div id="P_MS5af5c0e887f3f" class="master-slider-parent ms-parent-id-2">


                                <!-- MasterSlider Main -->
                                <div id="MS5af5c0e887f3f" class="master-slider ms-skin-default">

                                    @if ($banners[0])
                                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                            <img src="plugins/masterslider/public/assets/css/blank.gif" alt=""
                                                title="" data-src="{{ asset($banners[0]->image) }}">

                                            <div class="ms-layer  msp-cn-1-1" style="" data-duration="862"
                                                data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-117"
                                                data-origin="mc" data-position="normal">
                                                {{ $banners[0]->title }}</div>

                                            <div class="ms-layer msp-cn-1-2" style=""
                                                data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="712"
                                                data-delay="975" data-ease="easeOutQuint" data-offset-x="0"
                                                data-offset-y="7" data-origin="mc" data-position="normal">
                                                {{ $banners[0]->sub_title }}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($banners[1])
                                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                                            <img src="plugins/masterslider/public/assets/css/blank.gif" alt=""
                                                title="" data-src="{{ asset($banners[1]->image) }}">

                                            <div class="ms-layer  msp-cn-1-5" style=""
                                                data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="850"
                                                data-ease="easeOutQuint" data-offset-x="375" data-offset-y="14"
                                                data-origin="ml" data-position="normal">
                                                {{ $banners[1]->title }}</div>

                                            <div class="ms-layer  msp-cn-1-6" style="" data-duration="937"
                                                data-delay="525" data-ease="easeOutQuint" data-offset-x="33"
                                                data-offset-y="102" data-origin="ml" data-position="normal">
                                                {{ $banners[1]->sub_title }}</div>
                                        </div>
                                    @endif
                                    @if ($banners[2])
                                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                                            <img src="plugins/masterslider/public/assets/css/blank.gif" alt=""
                                                title="" data-src="{{ asset($banners[2]->image) }}">

                                            <div class="ms-layer  msp-cn-1-8" style=""
                                                data-effect="t(true,n,150,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="1212"
                                                data-ease="easeOutQuint" data-offset-x="28" data-offset-y="157"
                                                data-origin="bl" data-position="normal">
                                                {{ $banners[2]->title }}</div>

                                            <div class="ms-layer  msp-cn-1-9" style="width:509px;" data-delay="937"
                                                data-ease="easeOutQuint" data-offset-x="30" data-offset-y="88"
                                                data-origin="bl" data-position="normal">
                                                {{ $banners[2]->sub_title }}</div>
                                        </div>
                                    @endif

                                </div>
                                <!-- END MasterSlider Main -->
                            </div>
                            <!-- END MasterSlider -->



                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-2">
                    <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-brown"
                        style="background-color: #322b23; padding-top: 48px; padding-bottom: 27px; ">
                        <div class="container">
                            <div class="gdlr-hotel-availability-wrapper" style="margin-bottom: 20px;">
                                <form class="gdlr-hotel-availability gdlr-item" id="gdlr-hotel-availability" method="post"
                                    action="#">
                                    @csrf
                                    <div class="gdlr-reservation-field gdlr-resv-datepicker"><span
                                            class="gdlr-reservation-field-title">Check In</span>
                                        <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-in"
                                                class="gdlr-datepicker" autocomplete="off" data-dfm="d M yy"
                                                data-block="[]" value="2018-05-11"><input type="hidden"
                                                class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off"
                                                value="2018-05-11"></div>
                                    </div>
                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span
                                            class="gdlr-reservation-field-title">Night</span>
                                        <div class="gdlr-combobox-wrapper"><select name="gdlr-night" id="gdlr-night">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select></div>
                                    </div>
                                    <div class="gdlr-reservation-field gdlr-resv-datepicker"><span
                                            class="gdlr-reservation-field-title">Check Out</span>
                                        <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-out"
                                                class="gdlr-datepicker" autocomplete="off" data-min-night="1"
                                                data-dfm="d M yy" data-block="[]" value="2018-05-12"><input
                                                type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out"
                                                autocomplete="off" value="2018-05-12"></div>
                                    </div>
                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span
                                            class="gdlr-reservation-field-title">Adults</span>
                                        <div class="gdlr-combobox-wrapper"><select name="gdlr-adult-number[]">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2" selected="">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select></div>
                                    </div>
                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span
                                            class="gdlr-reservation-field-title">Children</span>
                                        <div class="gdlr-combobox-wrapper"><select name="gdlr-children-number[]">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select></div>
                                    </div>
                                    <div class="gdlr-hotel-availability-submit">
                                        <input type="hidden" name="hotel_data" value="1"><input type="hidden"
                                            name="gdlr-room-number" value="1"><input type="button"
                                            style="    margin: 32px 0px 0px;"
                                            class="gdlr-reservation-bar-button gdlr-button with-border"
                                            value="Check Availability">
                                    </div>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-3">
                    <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                        style="background-color: #0a0a0a; padding-top: 60px; ">
                        <div class="container">
                            <div class="four columns">
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                                        <div class="column-service-image"><img src="images/hotel/qulity.webp"
                                                alt="" width="500" height="257"></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title"> Quality Time with Family</h3>
                                            <div class="column-service-divider"></div>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Cum sociis natoque penatibus et magnis dis part urient montes, nascetur
                                                    ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                                        <div class="column-service-image"><img src="images/hotel/gym.webp" alt=""
                                                width="500" height="257"></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Spa centre and Gym</h3>
                                            <div class="column-service-divider"></div>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Moreover a fully equipped gymnasium to make your time more enjoyable. The
                                                    Recreation complex gives guests an unmatched opportunity to reinvigorate
                                                    themselves.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="gdlr-ux column-service-ux">
                                    <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                                        <div class="column-service-image"><img src="images/hotel/rooftop.webp"
                                                alt="" width="500" height="257"></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Rooftop Resturant</h3>
                                            <div class="column-service-divider"></div>
                                            <div class="column-service-content gdlr-skin-content">
                                                <p>Cum sociis natoque penatibus et magnis dis part urient montes, nascetur
                                                    ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-4">
                    <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-light-grey"
                        id="gdlr-parallax-wrapper-1" data-bgspeed="0.1"
                        style="background-image: url('upload/room-bg.jpg'); padding-top: 80px; padding-bottom: 10px; ">
                        <div class="container">
                            <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                                <div class="gdlr-item-title-head">
                                    <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">i-Stuits's Rooms</h3>
                                    <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i
                                            class="icon-angle-right gdlr-flex-next"></i></div>
                                    <div class="clear"></div>
                                </div><a class="gdlr-item-title-link" href="{{ route('accommodation') }}">View All Rooms<i
                                        class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                            </div>
                            <div class="room-item-wrapper type-modern">
                                <div class="room-item-holder ">
                                    <div class="gdlr-room-carousel-item gdlr-item">
                                        <div class="flexslider" data-type="carousel"
                                            data-nav-container="room-item-wrapper" data-columns="3">
                                            <ul class="slides">
                                                @foreach ($rooms as $item)
                                                    <li class="gdlr-item gdlr-modern-room">
                                                        <div class="gdlr-room-thumbnail">
                                                            <a href="{{ route('accommodation-details', [$item->id]) }}">
                                                                <img src="{{ asset($item->thumbnail) }}" alt=""
                                                                    width="700" height="400"></a>
                                                        </div>
                                                        <h3 class="gdlr-room-title">
                                                            <a href="{{ route('accommodation-details', [$item->id]) }}">{{ $item->name }}
                                                            </a>
                                                        </h3>
                                                        <a href="{{ route('accommodation-details', [$item->id]) }}"
                                                            class="gdlr-room-detail">Check Details <i
                                                                class="fa fa-long-arrow-right icon-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-5">
                    <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
                        id="gdlr-parallax-wrapper-2" data-bgspeed="0.1"
                        style="background-image: url('upload/about-bg.jpg'); padding-top: 160px; padding-bottom: 110px; ">
                        <div class="container">
                            <div class="six columns">
                                <div class="gdlr-title-item">
                                    <div class="gdlr-item-title-wrapper gdlr-item pos-center pos-center-divider ">
                                        <div class="gdlr-item-title-head">
                                            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">A Little About Us
                                            </h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-item-title-divider"></div>
                                        <div class="gdlr-item-title-caption gdlr-title-font gdlr-skin-info">Inspiration can
                                            be found everywhere</div>
                                    </div>
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="gdlr-item gdlr-content-item">
                                    @foreach($SiteInfos as $siteinfo)
                                    <p style="text-align: center;">{{$siteinfo->a_littl_about_us}}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-6">
                    <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                        style="background-color: #292929; padding-top: 70px; ">
                        <div class="container">
                            <div class="six columns">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Facilities</h3>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="gdlr-item-title-divider"></div>
                                </div>
                                <div class="blog-item-wrapper">
                                    <div class="blog-item-holder">
                                        @foreach($Facilities as $Facility)
                                        <div class="gdlr-item gdlr-blog-widget">
                                            <div class="gdlr-ux gdlr-blog-widget-ux">
                                                <article id="post-862"
                                                    class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                                    <div class="gdlr-standard-style">

                                                        <header class="post-header">
                                                            <h3 class="gdlr-blog-title"><a href="javascript:void(0)">{{$Facility->title}}</a></h3>

                                                            <div class="gdlr-blog-excerpt">{{$Facility->description}}
                                                                <div class="clear"></div>
                                                            </div>

                                                        </header>
                                                        <!-- entry-header -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Gallery</h3>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="gdlr-item-title-divider"></div>
                                </div>
                                <div class="gdlr-gallery-item gdlr-item">
                                    <div class="gallery-column six columns">
                                        <div class="gallery-item"><a
                                                href="upload/photodune-7751505-luxury-home-with-swimming-pool-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-7751505-luxury-home-with-swimming-pool-m-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a
                                                href="upload/photodune-1231437-tropical-pool-bar-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-1231437-tropical-pool-bar-m-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a href="upload/photodune-1576481-relaxing-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-1576481-relaxing-m-400x400.jpg" alt=""
                                                    width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a href="upload/photodune-2650397-sailing-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-2650397-sailing-m-400x400.jpg" alt=""
                                                    width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a
                                                href="upload/photodune-4076311-interior-of-modern-comfortable-hotel-room-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-4076311-interior-of-modern-comfortable-hotel-room-m-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a href="upload/photodune-3973259-hotel-room-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-3973259-hotel-room-m-400x400.jpg" alt=""
                                                    width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a
                                                href="upload/photodune-2676493-suite-bed-room-with-balcony-of-a-luxury-resort-m.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/photodune-2676493-suite-bed-room-with-balcony-of-a-luxury-resort-m-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a
                                                href="upload/Fotolia_34317913_Subscription_Monthly_XXL.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/Fotolia_34317913_Subscription_Monthly_XXL-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="gallery-column three columns">
                                        <div class="gallery-item"><a
                                                href="upload/Fotolia_44778217_Subscription_Monthly_XXL.jpg"
                                                data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img
                                                    src="upload/Fotolia_44778217_Subscription_Monthly_XXL-400x400.jpg"
                                                    alt="" width="400" height="400"></a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
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
<style>
    .msp-cn-1-2{
        text-align: center;
    }
    .msp-cn-1-9{
        color: #fff;
        font-size: 25px !important;
    }
</style>

@endsection
@section('script')

    <script>
        (window.MSReady = window.MSReady || []).push(function($) {

            "use strict";
            var masterslider_7f3f = new MasterSlider();

            // slider controls
            masterslider_7f3f.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_7f3f.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 8,
                margin: 25
            });
            // slider setup
            masterslider_7f3f.setup("MS5af5c0e887f3f", {
                width: 1140,
                height: 530,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: true,
                keyboard: false,
                layout: "fullwidth",
                wheel: false,
                autoplay: false,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "fadeFlow"
            });

            MSScrollParallax.setup(masterslider_7f3f, 30, 50, true);
            $("head").append(
                "<link rel='stylesheet' id='ms-fonts'  href='//fonts.googleapis.com/css?family=Open+Sans:300,700|Merriweather:regular' type='text/css' media='all' />"
            );

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_7f3f);
        });
    </script>
    <script type='text/javascript' src='plugins/masterslider/public/assets/js/masterslider.min.js'></script>
@endsection
