@extends('layouts.app')
@section('title', 'Home')


@section('contents')

<div id="gdlr-header-substitute">
</div>
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay">
    </div>
    <div class="gdlr-page-title-container container">
        <h3 class="gdlr-page-title">Superior Room &#8211; Two Double Beds</h3>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="gdlr-content">
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container gdlr-class-no-sidebar">
                <div class="with-sidebar-left twelve columns">
                    <div class="with-sidebar-content twelve columns">
                        <div class="gdlr-item gdlr-item-start-content">
                            <div id="room-3595" class="post-3595 room type-room status-publish has-post-thumbnail hentry room_category-room room_tag-luxury room_tag-room room_tag-superior">
                                <form class="gdlr-reservation-bar" id="gdlr-reservation-bar" data-action="gdlr_hotel_booking" method="post" action="https://demo.goodlayers.com/hotelmaster/dark/?booking">
                                    <div class="gdlr-reservation-bar-title">
                                        Your Reservation
                                    </div>
                                    <div class="gdlr-reservation-bar-summary-form" id="gdlr-reservation-bar-summary-form">
                                    </div>
                                    <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form">
                                    </div>
                                    <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                                        <div class="gdlr-reservation-field gdlr-resv-datepicker">
                                            <span class="gdlr-reservation-field-title">Check In</span>
                                            <div class="gdlr-datepicker-wrapper">
                                                <input type="text" id="gdlr-check-in" class="gdlr-datepicker" autocomplete="off" data-dfm="d M yy" data-block="[]" value="2018-05-11"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2018-05-11">
                                            </div>
                                        </div>
                                        <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                            <span class="gdlr-reservation-field-title">Night</span>
                                            <div class="gdlr-combobox-wrapper">
                                                <select name="gdlr-night" id="gdlr-night">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <div class="gdlr-reservation-field gdlr-resv-datepicker">
                                            <span class="gdlr-reservation-field-title">Check Out</span>
                                            <div class="gdlr-datepicker-wrapper">
                                                <input type="text" id="gdlr-check-out" class="gdlr-datepicker" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="2018-05-12"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2018-05-12">
                                            </div>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                                            <span class="gdlr-reservation-field-title">Rooms</span>
                                            <div class="gdlr-combobox-wrapper">
                                                <select name="gdlr-room-number" id="gdlr-room-number">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper">
                                            <div class="gdlr-reservation-people-amount">
                                                <div class="gdlr-reservation-people-title">
                                                    Room <span>1</span>
                                                </div>
                                                <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                                    <span class="gdlr-reservation-field-title">Adults</span>
                                                    <div class="gdlr-combobox-wrapper">
                                                        <select name="gdlr-adult-number[]">
                                                            <option value="1">1</option>
                                                            <option value="2" selected="">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                                    <span class="gdlr-reservation-field-title">Children</span>
                                                    <div class="gdlr-combobox-wrapper">
                                                        <select name="gdlr-children-number[]">
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
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clear">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <input type="hidden" name="hotel_data" value="1"><input type="submit" class="gdlr-reservation-bar-button gdlr-button with-border" value="Check Availability">
                                        <div class="clear">
                                        </div>
                                    </div>
                                    <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form">
                                    </div>
                                    <input type="hidden" name="single-room" value="3595">
                                </form>
                                <div class="gdlr-room-main-content">
                                    <div class="gdlr-room-thumbnail gdlr-single-room-thumbnail">
                                        <div class="flexslider" data-pausetime="7000" data-slidespeed="600" data-effect="fade">
                                            <ul class="slides">
                                                <li><img src="upload/single-room-slider-7-750x330.jpg" alt="" width="750" height="330"></li>
                                                <li><a href="upload/single-room-slider-3.jpg" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img src="upload/single-room-slider-3-750x330.jpg" alt="" width="750" height="330"></a></li>
                                                <li><a href="upload/single-room-slider-4.jpg" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img src="upload/single-room-slider-4-750x330.jpg" alt="" width="750" height="330"></a></li>
                                                <li><a href="upload/single-room-slider-5.jpg" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img src="upload/single-room-slider-5-750x330.jpg" alt="" width="750" height="330"></a></li>
                                                <li><a href="upload/single-room-slider-1.jpg" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img src="upload/single-room-slider-1-750x330.jpg" alt="" width="750" height="330"></a></li>
                                            </ul>
                                        </div>
                                        <ul class="gdlr-flex-thumbnail-control" id="gdlr-flex-thumbnail-control">
                                            <li><img src="upload/single-room-slider-7-150x150.jpg" alt="" width="150" height="150"></li>
                                            <li><img src="upload/single-room-slider-3-150x150.jpg" alt="" width="150" height="150"></li>
                                            <li><img src="upload/single-room-slider-4-150x150.jpg" alt="" width="150" height="150"></li>
                                            <li><img src="upload/single-room-slider-5-150x150.jpg" alt="" width="150" height="150"></li>
                                            <li><img src="upload/single-room-slider-1-150x150.jpg" alt="" width="150" height="150"></li>
                                        </ul>
                                    </div>
                                    <div class="gdlr-room-title-wrapper">
                                        <h3 class="gdlr-room-title">Superior Room &#8211; Two Double Beds</h3>
                                        <div class="gdlr-room-price">
                                            <span class="gdlr-head">Start From</span><span class="gdlr-tail">$80.00 / Night</span>
                                        </div>
                                        <div class="clear">
                                        </div>
                                    </div>
                                    <div class="gdlr-hotel-room-info">
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Bed</span><span class="gdlr-tail">2 Double Beds</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Max</span><span class="gdlr-tail">4 People</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">City</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Room Size</span><span class="gdlr-tail">70 sqm.</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Yes</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Breakfast Included</span><span class="gdlr-tail">Yes</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Room Service</span><span class="gdlr-tail">Yes</span>
                                        </div>
                                        <div class="gdlr-room-info">
                                            <i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Airport Pickup Service</span><span class="gdlr-tail">No</span>
                                        </div>
                                        <div class="clear">
                                        </div>
                                    </div>
                                    <div class="gdlr-room-content">
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                        </p>
                                        <p>
                                            Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui.
                                        </p>
                                        <div class="clear">
                                        </div>
                                        <div class="gdlr-space" style="margin-top: 35px;">
                                        </div>
                                        <div class="gdlr-shortcode-wrapper">
                                            <div class="gdlr-gallery-item gdlr-item">
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-2676493-suite-bed-room-with-balcony-of-a-luxury-resort-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-2676493-suite-bed-room-with-balcony-of-a-luxury-resort-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-3973259-hotel-room-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-3973259-hotel-room-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-2232283-hotel-room-with-bed-and-wooden-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-2232283-hotel-room-with-bed-and-wooden-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-1231437-tropical-pool-bar-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-1231437-tropical-pool-bar-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-7751505-luxury-home-with-swimming-pool-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-7751505-luxury-home-with-swimming-pool-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="clear">
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-3290449-concierges-holding-the-cart-and-posing-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-3290449-concierges-holding-the-cart-and-posing-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-2673580-brown-sofas-the-lobby-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-2673580-brown-sofas-the-lobby-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-2681114-penthouse-room-on-a-sunny-day-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-2681114-penthouse-room-on-a-sunny-day-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-1177463-spa-woman-hot-stones-massage-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-1177463-spa-woman-hot-stones-massage-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="gallery-column one-fifth column">
                                                    <div class="gallery-item">
                                                        <a href="upload/photodune-396585-spa-m.jpg" data-fancybox-group="gdlr-gal-2" data-rel="fancybox"><img src="upload/photodune-396585-spa-m-150x150.jpg" alt="" width="150" height="150"></a>
                                                    </div>
                                                </div>
                                                <div class="clear">
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis.
                                        </p>
                                        <p>
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- #room -->
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <!-- gdlr-content -->
    <div class="clear">
    </div>
</div>
<!-- content wrapper -->

   
@endsection
@section('style')
   

@endsection
@section('script')
    

@endsection
