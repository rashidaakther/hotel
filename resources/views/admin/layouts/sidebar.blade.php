
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a> 
            </li>
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Room Managers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('add-room') }}">Add New Room</a></li>
                    <li><a href="{{ route('rooms') }}">Room List</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Offer</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('addOffer') }}">Add New Offer</a></li>
                    <li><a href="{{ route('OfferList') }}">Offers List</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Reservation</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('pending_Reservation') }}">Panding Reservation</a></li>
                    <li><a href="{{ route('completed_Reservation') }}">Completed Reservation</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Facility</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('add_facility') }}">Add New Facility</a></li>
                    <li><a href="{{ route('facility_list') }}">Facility List</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('banners') }}">Home Banners</a></li>
                    <li><a href="{{ route('site_info') }}">Site Information</a></li>
                </ul>
            </li>
        </ul>
       
        
        <div class="copyright">
            <p class="text-center"><strong>i-Suite Residence & Restaurant</strong> &copy; All Rights Reserved</p>
        </div>
    </div>
</div>