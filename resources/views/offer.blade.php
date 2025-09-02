@extends('layouts.app')
@section('title', 'Offers')


@section('contents')

<div id="gdlr-header-substitute">
</div>
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">Offers</h1>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="gdlr-content">

        <section>
            <style>
                body{
                    font-family: calibri;
                }
                .blog img{
                    border-radius: 5px ;
                    transition: all 0.5s;
                }
                .blog .layer:first-child{
                    height: 50%;
                    background-color: rgba(0,0,0,0.6);
                    top:-50% ;
                    left:0 ;
                    right:0 ;
                    bottom:0 ;
                    z-index: 10;
                    transition: 1s;
                    opacity: 0;
                    
                }
                .blog .layer:last-child{
                    height: 50%;
                    background-color: rgba(0,0,0,0.6);
                    top: 100;
                    left:0 ;
                    right:0 ;
                    bottom:-50% ;
                    z-index: 10;
                    transition: 1s;
                    opacity: 0;
                    
                }
                .blog:hover img{
                    scale: 1.2;
                }
                .blog:hover .layer{
                    opacity: 1;
                }
                .blog:hover .layer:first-child{
                    top:0;
                }
                .blog:hover .layer:last-child{
                    top:55;
                    bottom: 0%;
                }
                .offerlist p{
                    font-size: 12px;
                    margin:5px;
                }
            </style>
    
            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-12 text-md-left text-center py-md-2 py-3">
                        <h2 class="text-white-50">Special Offer</h2>
                    </div>
                    <div class="col-lg-6 col-md-8 col-12 text-md-left text-center py-md-2 py-3">
                        <p class="text-muted">
                            Experience the ultimate in luxury and relaxation with our exclusive special offer! Book your stay now and enjoy 20% off our best available rates.
                        </p>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="blog position-relative overflow-hidden rounded">
                            <div class="layer position-absolute overflow-hidden text-light text-center d-flex justify-content-center align-items-end pb-2"><h2>20%</h2></div>
                            <img class="img-fluid" src=" {{ asset('images/1.webp') }}" alt="">
                            <div class="layer position-absolute overflow-hidden text-light text-center pt-2"><h2>Off</h2></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="offerlist text-light mt-4">
                            <h5>Family Fun Package</h5>
                            <p class="pt-2"><i class="bi bi-check-circle text-warning mr-2"></i> 15% off on family suites</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Free meals for kids under 12</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Complimentary tickets</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> The local amusement park</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Daily family-friendly activities</p>
                            <a href="{{ route('reservation') }}" class="btn btn-outline-warning mt-2">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="blog position-relative overflow-hidden rounded">
                            <div class="layer position-absolute overflow-hidden text-light d-flex justify-content-center align-items-end pb-2"><h2>10%</h2></div>
                            <img class="img-fluid" src=" {{ asset('images/3.webp') }}" alt="">
                            <div class="layer position-absolute overflow-hidden text-light text-center pt-2"><h2>Off</h2></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="offerlist text-light mt-4">
                            <h5>Business Traveler Special</h5>
                            <p class="pt-2"><i class="bi bi-check-circle text-warning mr-2"></i> 10% off on executive rooms</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Complimentary high-speed Wi-Fi</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Access to the business lounge</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Free airport shuttle service</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Daily family-friendly activities</p>
                            <a href="{{ route('reservation') }}" class="btn btn-outline-warning mt-2">Book Now</a>
                        </div>
                     </div>
                </div>
                <div class="row py-3">
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="blog position-relative overflow-hidden rounded">
                            <div class="layer position-absolute overflow-hidden text-light text-center d-flex justify-content-center align-items-end pb-2"><h2>25%</h2></div>
                            <img class="img-fluid" src=" {{ asset('images/2.webp') }}" alt="">
                            <div class="layer position-absolute overflow-hidden text-light text-center text-light text-center pt-2"><h2>Off</h2></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="offerlist text-light mt-4">
                            <h5>Spa Retreat</h5>
                            <p class="pt-2"><i class="bi bi-check-circle text-warning mr-2"></i> A two-night stay in a premium room</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Daily spa treatments</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Healthy breakfast and lunch options</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Access to all spa facilities</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> 25% off for stays of 7 nights or more</p>
                            <a href="{{ route('reservation') }}" class="btn btn-outline-warning mt-2">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="blog position-relative overflow-hidden rounded">
                            <div class="layer position-absolute overflow-hidden"></div>
                            <img class="img-fluid" src=" {{ asset('images/4.webp') }} " alt="">
                            <div class="layer position-absolute overflow-hidden"></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="offerlist text-light mt-4">
                            <h5>Romantic Getaway</h5>
                            <p class="pt-2"><i class="bi bi-check-circle text-warning mr-2"></i> A two-night stay in a deluxe suite</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> A bottle of champagne and chocolates</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Access to the business lounge</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Romantic dinner for two</p>
                            <p ><i class="bi bi-check-circle text-warning mr-2"></i> Couples massage at our spa</p>
                            <a href="{{ route('reservation') }}" class="btn btn-outline-warning mt-2">Book Now</a>
                        </div>
                     </div>
                </div>
            </div>
        </section>

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
