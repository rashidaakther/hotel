@extends('layouts.app')
@section('title', 'Contact Us')


@section('contents')


    <div id="gdlr-header-substitute">
    </div>
    <div class="gdlr-page-title-wrapper">
        <div class="gdlr-page-title-overlay"></div>
        <div class="gdlr-page-title-container container">
            <h1 class="gdlr-page-title">Contact Us</h1>
            {{-- <span class="gdlr-page-caption">Aenean eu leo quam. Pellentesque ornare sem.</span> --}}
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
                        <div class="with-sidebar-content eight columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="gdlr-item gdlr-content-item" style="margin-bottom: 60px;">
                                        <p>
                                        <div class="clear"></div>
                                        <div class="gdlr-space" style="margin-top: -22px;"></div>
                                        <h5 class="gdlr-heading-shortcode " style="font-weight: bold;">Please fulfil the
                                            form below.</h5>
                                        <div class="clear"></div>
                                        <div class="gdlr-space" style="margin-top: 25px;"></div>
                                        <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                            <ul>
                                                @foreach($errors->all() as $error)                                            
                                                <li class="text-danger">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <form class="quform" action="{{ route('send_message') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>Your Name (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name"
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Email (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email"
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Message
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea id="message" name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                                    aria-invalid="false"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                    <div class="quform-submit">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit"
                                                                class="submit-button"><span><em>Send</em></span></button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span
                                                                class="quform-loading"></span></div>
                                                    </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="gdlr-sidebar gdlr-left-sidebar four columns">
                            <div class="gdlr-item-start-content sidebar-left-item">

                                <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Contact Information</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p><i class="gdlr-icon fa fa-map-marker"
                                                style="color: #444444; font-size: 16px; "></i>39/40, M.M Ali Road, Dampara
                                            Wasa Cir, Chattogram</p>
                                        <p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i>
                                            01710-469715</p>
                                        <p><i class="gdlr-icon fa fa-envelope"
                                                style="color: #444444; font-size: 16px; "></i> contact@isuitesbd</p>
                                        <p><i class="gdlr-icon fa fa-clock-o" style="color: #444444; font-size: 16px; "></i>
                                            Everyday 9:00-17:00</p>
                                    </div>
                                </div>
                                <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Front Desk Hotline</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i>
                                            01710-469715</p>

                                    </div>
                                </div>
                                <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Resturant Hotline</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i>
                                            01710-469715</p>

                                    </div>
                                </div>
                                <div id="text-8" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Social Media</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <a href="#"><i class="gdlr-icon fa fa-facebook"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                        <a href="#"><i class="gdlr-icon fa fa-twitter"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                        <a href="#"><i class="gdlr-icon fa fa-dribbble"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                        <a href="#"><i class="gdlr-icon fa fa-pinterest"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                        <a href="#"><i class="gdlr-icon fa fa-google-plus"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                        <a href="#"><i class="gdlr-icon fa fa-instagram"
                                                style="color: #444444; font-size: 28px; "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <!-- Below Sidebar Section-->
            <div class="below-sidebar-wrapper">
                <section id="content-section-2">
                    <div class="gdlr-full-size-wrapper gdlr-show-all"
                        style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="gdlr-item gdlr-content-item" style="margin-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel="map1">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.0859373479034!2d91.81844947427999!3d22.3503837410801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd900376c7711%3A0xce7c7a9fcd7291cd!2zaS0gU1VJVEVTIFJFU0lERU5DRSAmIFJFU1RBVVJBTlQg4KaG4KaHLeCmuOCnjeCmr-CngeCmn-CmuOCnjSDgprDgp4fgprjgpr_gpqHgp4fgpqjgp43gprgm4Kaw4KeH4Ka44KeN4Kaf4KeB4Kaw4KeH4Kao4KeN4Kaf!5e0!3m2!1sen!2sbd!4v1729797482926!5m2!1sen!2sbd"
                                    style="width:100%; height:450px; border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>

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
