@extends('layouts.app')
@section('title', 'Room Tariff')


@section('contents')

    <div id="gdlr-header-substitute">
    </div>
    <div class="gdlr-page-title-wrapper">
        <div class="gdlr-page-title-overlay">
        </div>
        <div class="gdlr-page-title-container container">
            <h3 class="gdlr-page-title">Room Tariff</h3>
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
                                <div id="room-3595"
                                    class="post-3595 room type-room status-publish has-post-thumbnail hentry room_category-room room_tag-luxury room_tag-room room_tag-superior">
                                    <form class="gdlr-reservation-bar" id="gdlr-reservation-bar"
                                        data-action="gdlr_hotel_booking" method="post"
                                        action="#">
                                        <div class="gdlr-reservation-bar-title">
                                            Your Reservation
                                        </div>
                                        <div class="gdlr-reservation-bar-summary-form"
                                            id="gdlr-reservation-bar-summary-form">
                                        </div>
                                        <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form">
                                        </div>
                                        <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                                            <div class="gdlr-reservation-field gdlr-resv-datepicker">
                                                <span class="gdlr-reservation-field-title">Check In</span>
                                                <div class="gdlr-datepicker-wrapper">
                                                    <input type="text" id="gdlr-check-in" class="gdlr-datepicker"
                                                        autocomplete="off" data-dfm="d M yy" data-block="[]"
                                                        value="2018-05-11"><input type="hidden" class="gdlr-datepicker-alt"
                                                        name="gdlr-check-in" autocomplete="off" value="2018-05-11">
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
                                                    <input type="text" id="gdlr-check-out" class="gdlr-datepicker"
                                                        autocomplete="off" data-min-night="1" data-dfm="d M yy"
                                                        data-block="[]" value="2018-05-12"><input type="hidden"
                                                        class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off"
                                                        value="2018-05-12">
                                                </div>
                                            </div>
                                            <div class="clear">
                                            </div>
                                            <div
                                                class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
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
                                            <div class="gdlr-reservation-people-amount-wrapper"
                                                id="gdlr-reservation-people-amount-wrapper">
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
                                            <input type="hidden" name="hotel_data" value="1"><input type="button"
                                                class="gdlr-reservation-bar-button gdlr-button with-border"
                                                value="Check Availability">
                                            <div class="clear">
                                            </div>
                                        </div>
                                        <div class="gdlr-reservation-bar-service-form"
                                            id="gdlr-reservation-bar-service-form">
                                        </div>
                                        <input type="hidden" name="single-room" value="3595">
                                    </form>
                                    <div class="gdlr-room-main-content">
                                        <div class="gdlr-room-thumbnail gdlr-single-room-thumbnail">
                                            <table class="table-fill">
                                                <thead>
                                                    <tr>
                                                        <th class="text-left">Room</th>
                                                        <th class="text-left">USD</th>
                                                        <th class="text-left">BDT</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-hover">
                                                    @foreach($rooms as $item)
                                                    <tr>
                                                        <td class="text-left">{{ $item->name }} </td>
                                                        <td class="text-left">${{ $item->usd_price }}</td>
                                                        <td class="text-left">BDT {{ $item->bdt_price }}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
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
