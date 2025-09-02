<!DOCTYPE html>

<html lang="en-US">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">


    <title> @yield('title')</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/icon.png') }}" />

    <link rel='stylesheet' href='{{ asset('plugins/gdlr-hostel/gdlr-hotel.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('css/style.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/superfish/css/superfish.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/dl-menu/component.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/font-awesome-new/css/font-awesome.min.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/fancybox/jquery.fancybox.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/flexslider/flexslider.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('css/style-responsive.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('css/style-custom.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('plugins/masterslider/public/assets/css/masterslider.main.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('css/customfc99.css?ver=2.6') }}' type='text/css' media='all'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .gdlr-header-container .gdlr-logo{
            margin:20px 15px;
        }
    </style>

    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700|Open+Sans:300,300i,400,400i,600,700,800|Droid+Serif:300,300i,400,600,700"
        rel="stylesheet">


    @yield('style')

</head>

{{-- single single-room --}}

<body
    class="home page-template-default hotelmaster-button-classic-style  @if(request()->route()->named('accommodation-details')) single @endif  header-style-1 hotelmaster-classic-style hotelmaster-single-classic-style">

    <div class="body-wrapper  float-menu gdlr-icon-light gdlr-header-solid" data-home="#">
        @include('layouts.header')
        @yield('contents')
        @include('layouts.footer')
    </div>


    <script type='text/javascript' src='{{ asset('js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery/ui/core.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery/ui/datepicker.min.js') }}'></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var objectL10n = {
            "closeText": "Done",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "monthStatus": "Show a different month",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "firstDay": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('plugins/gdlr-hostel/gdlr-hotel.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/superfish/js/superfish.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/hoverIntent.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/dl-menu/modernizr.custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/dl-menu/jquery.dlmenu.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.easing.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.transit.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/fancybox/helpers/jquery.fancybox-media.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.js') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/flexslider/jquery.flexslider.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.isotope.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/gdlr-script.js') }}'></script>
    
    @yield('script')

</body>

</html>
