@extends('layouts.detail_link')
@section('title', 'Booking Page')
@section('content')


<section class="site-hero overlay" style="background-image: url({{ asset('front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg') }})"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block  mb-3">Thousands of camper vans, RVs,
                    travel trailers, and more.<span class="fa fa-star text-primary"></span></span>
                <h1 class="heading">Book your RV rental and go </h1>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>



<div class="container row-space-plus">
    <div class="row">
        @if (session('request_sent'))
            <p class="alert alert-success">{{session('request_sent')}}</p>
        @endif
        <div class="col-md-8">
            <div class="row" style="margin-bottom: 16px;">
                <div class="col-md-7 col-xs-12" id="div1">
                    <h1 style="font-size: 24px">{{$rvs->name}}</h1>
                    <h2 style="font-size: 18px">{{$rvs->destination->name}}</h2>
                </div>
            </div>
            <div class="row" style="margin-bottom: 24px;">
                <div class="col-md-12 white-text">
                    <div id="favorite" style="">
                        <a href='#' id='toggle_favorite' data-listing-id='19586'><i id="heart" class="fa fa-heart fa-lg"
                                aria-hidden="true"></i></a><span class="white-text" id="favorite-text"><b>
                                &nbsp;Favorite</b></span>
                    </div>
                    <div id='ninja-slider'>
                        <div class="slider-inner">
                            <div class="fs-icon" title="Expand/Close"></div>
                            <ul>
                                @foreach ($rvs->Images as $img)
                                <li>
                                    <img data-fs-image="{{url('uploads', $img->url)}}" class="ns-img"
                                        src="{{url('uploads', $img->url)}}" alt="{{$img->url}}" />
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="thumbnail-slider">
                            <div class="inner">
                                <ul>
                                    @foreach ($rvs->Images as $img)
                                    <li>
                                        <a class="thumb" href="{{url('uploads', $img->url)}}"></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="rental-listings-border">
                        <div class="propbckgrnd rental-showbg">
                            <i class="fa fa-dollar" aria-hidden="true"></i>
                            Pricing
                        </div>
                        <div class="row">
                            <style>
                                .rdf-rates {
                                    padding: 20px;
                                    display: flex;
                                    justify-content: space-evenly;
                                    padding-top: 40px;
                                }

                                .rdf-rates .rdf-rate {
                                    display: flex;
                                    place-items: center;
                                    font-size: 28px;
                                }

                                .rdf-rates .rdf-rate:before {
                                    font-size: 18px;
                                    content: '$';
                                }

                                .rdf-rates .rdf-rate.rdf-daily:after {
                                    font-size: 14px;
                                    padding-left: 4px;
                                    content: '/ night';
                                }

                                .rdf-rates .rdf-rate.rdf-weekly:after {
                                    font-size: 14px;
                                    padding-left: 4px;
                                    content: '/ week'
                                }

                                .rdf-rates .rdf-rate.rdf-monthly:after {
                                    font-size: 14px;
                                    padding-left: 4px;
                                    content: '/ month'
                                }

                                .bullet-details small {
                                    text-transform: uppercase;
                                }

                            </style>
                            <div class="col-xs-12 rdf-rates">
                                <div class="rdf-rate rdf-daily">
                                    {{$rvs->price_night}}
                                </div>
                                <div class="rdf-rate rdf-weekly">
                                    {{$rvs->price_week}}
                                </div>
                                <div class="rdf-rate rdf-monthly">
                                    {{$rvs->price_month}}
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div class="row bullet-details">
                            <div class="col-xs-12"><label>Deposits</label></div>
                            <div class="col-xs-6"><small>Booking Deposit</small><br />${{$rvs->booking_deposite}}</div>
                            <div class="col-xs-6"><small>Security Deposit
                                    (refundable)</small></label><br />${{$rvs->security_deposite}}</div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
            <div class="row tile-row">
                <div class="col-md-12">
                    <div class="rental-listings-border">
                        <div class="propbckgrnd rental-showbg vehicle-title">
                            <i class="fa fa-bus"></i>
                            Listing
                        </div>
                        @foreach ($rvs->rvAttribute->where('type','listing') as $listing)
                        <div class="row bullet-details">
                            <div class="col-xs-12"><label>{{$listing->heading}}</label></div>
                            <div class="col-xs-4">
                                <small>{{$listing->entity}}</small><br />
                            </div>
                            <div class="col-xs-4">
                                <small>{{$listing->value}}</small>
                            </div>
                            {{-- <div class="col-xs-4">
                    <small>Year</small><br />2021
                    </div> --}}
                        </div>
                        @endforeach
                        {{-- <div class="row bullet-details">
                <div class="col-xs-12"><label>Vehicle</label></div>
                <div class="col-xs-4">
                  <small>Make</small><br />Jayco
                </div>
                <div class="col-xs-4">
                  <small>Model</small><br />Jay FLight SLX 7 145RB
                </div>
                <div class="col-xs-4">
                  <small>Year</small><br />2021
                </div>
              </div>
              <div class="row bullet-details">
                <div class="col-xs-4">
                  <small>Type</small><br />Travel Trailer
                </div>
                <div class="col-xs-4">
                  <small>Length</small><br />16 ft.
                </div>
                <div class="col-xs-4">
                  <small>Weight</small><br />3200 lb.
                </div>
              </div>
              <div class="row bullet-details">
                <div class="col-xs-12"><label>Accommodations</label></div>
                <div class="col-xs-4">
                  <small>Beds</small><br />3<br />
                </div>
                <div class="col-xs-4">
                  <small>Seatbelts</small><br />0<br />
                </div>
                <div class="col-xs-4">
                  <small>Slide-Outs</small><br />0<br />
                </div>
              </div>
              <div class="row bullet-details">
                <div class="col-xs-4">
                  <small>Wheel Chair Accessible</small> <i class="fa fa-wheelchair"></i><br />No
                  <br />
                </div>
              </div> --}}
                        <div class="row bullet-details">
                            <div class="col-xs-12"><label>Full Description</label></div>
                            <div class="col-xs-12">
                                <blockquote class="clearfix agent-pro block-content-text min-padding">
                                    {!!$rvs->desc!!}
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tile-row">
                <div class="col-md-12">
                    <div class="single-map-data-detail rental-listings-border">
                        <div class="propbckgrnd rental-showbg"><i class="fa fa-list-ul" aria-hidden="true"></i>
                            Amenities</div>
                        <div class="amemitie clearfix">
                            <div class="row">
                                <div class="description-text-color">
                                    <ul class="amenities">
                                        @foreach ($rvs->rvAttribute->where('type','amenity') as $amenity)
                                        <div class="col-xs-12 bullet-details"><label>{{$amenity->heading}}</label></div>
                                        <li class="col-md-6"><i class="fa fa-check-square green-text tile-row"
                                                aria-hidden="true"></i>
                                            {{$amenity->entity}}
                                        </li>
                                        @endforeach
                                        {{-- <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Roof Air
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Refrigerator
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Front Living
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Stove
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Front Kitchen
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Shower
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Kitchen Sink
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Kitchen Dinnet
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Wash Basin
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Toilet
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Kitchen Table
                      </li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="row">
                  <div class="description-text-color">
                    <ul class="amenities">
                      <div class="col-xs-12 bullet-details"><label>Outdoors</label></div>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Outside Radio/Stereo
                      </li>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Awning
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="description-text-color">
                    <ul class="amenities">
                      <div class="col-xs-12 bullet-details"><label>Other</label></div>
                      <li class="col-md-3"><i class="fa fa-check-square green-text tile-row" aria-hidden="true"></i>
                        Propane Tank
                      </li>
                    </ul>
                  </div>
                </div> --}}
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12" style="margin-top: 5px">
            <div class="row" style="margin-bottom: 20px;" id="div2">
                <div class="col-md-12">
                    <div class="propbckgrnd rental-showbg">
                        <h3 style="margin: 4px 0;">THIS RV IS FOR RENT</h3>
                        <em style="font-size: 70%; margin: 2px 0 4px;">
                            ${{$rvs->price_night}}/night
                        </em>
                    </div>
                    <div class="reservation_form">
                        <style>
                            .elmonte-miles {
                                padding-left: -15px !important;
                                margin-top: 15px;
                            }

                        </style>
                        <form id="reservation_form" class="new_reservation" action="{{route('booking')}}" method="post">
                            @csrf
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-top: 0">
                                    <label>Check In*</label>
                                    <input placeholder="Start Date" class="form-control" type="date"
                                        name="check_in" id="reservation_start_date" />
                                </div>
                                <div class="col-xs-6" style="margin-top: 0">
                                    <label>Check Out*</label>
                                    <input placeholder="End Date" required="required" class="form-control" type="date"
                                        name="check_out" id="reservation_end_date" />
                                </div>
                            </div>
                            <input type="hidden" name="vehicle_id" value="{{$rvs->id}}">
                            <input type="hidden" name="total_amount" value="868">
                            <div class="addons">
                                <h4 style="margin-bottom: 5px;">Add-ons</h4>
                                @foreach ($rvs->rvAddon as $addon)
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label for="reservation_include_roadside">
                                            {{$addon->text}}
                                        </label>
                                    </div>
                                    <span class="col-md-3 price">
                                        ${{$addon->amount}}
                                    </span>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="0" name="addon_id[{{$addon->id}}]"
                                            id="reservation_include_roadside" />
                                    </div>
                                </div>
                                <br />
                                @endforeach
                                {{-- <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6">
                        <label for="10887">Brake Controller</label>
                        </div>
                        <span class="col-md-3 price">
                        $25.00
                        </span>
                        <div class="col-md-3">
                        <input type="checkbox" name="reservation[add_ons][][quantity]" id="10887" data-add-on-id="10887"
                            value="1" class="kit-addon toggle-addon">
                        </div>
                    </div> --}}
                            </div>
                            <br />
                            <button class="btn btn-primary btn-block" type="submit">BooK Now</button>
                        </form>
                        <div id="reservation_fees">
                            <style>
                                .cost-breakdown.cost-description {
                                    font-size: 11px;
                                    font-weight: 600;
                                    margin-right: 5px;
                                }

                                .cost-breakdown.cost-amount {
                                    font-size: 9px;
                                }

                            </style>
                            <h4>Invoice</h4>
                            <div class="fees">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <label>Reservation</label>
                                        {{-- <a data-toggle="collapse" href="#reservationTotalBreakdown"
                        style="font-size: 12px; color: #71b46a;" title="Show breakdown">
                        <i class="fa fa-plus"></i>
                      </a> --}}
                                        <ul id="reservationTotalBreakdown"
                                            class="cost-breakdown collapse list-unstyled">
                                            {{-- <li>
                          <span class="cost-breakdown cost-description">2022-03-31</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-01</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-02</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-03</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-04</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-05</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li>
                        <li>
                          <span class="cost-breakdown cost-description">2022-04-06</span>
                          <span class="cost-breakdown cost-amount">$120.00</span>
                        </li> --}}
                                        </ul>
                                    </div>
                                    <div class="col-xs-3 price">
                                        $840.00
                                    </div>
                                </div>
                                @foreach ($rvs->rvservices->groupBy('type') as $key => $services)
                                <div class="row">
                                    <div class="col-xs-9">
                                        <label>{{strtoUpper($key)}} Services</label>
                                        <a data-toggle="collapse" href="#hostServicesTotalBreakdown"
                                            style="font-size: 12px; color: #71b46a;" title="Show breakdown">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <ul id="hostServicesTotalBreakdown"
                                            class="cost-breakdown collapse list-unstyled">
                                            @foreach ($services as $service)
                                            <li>
                                                <span
                                                    class="cost-breakdown cost-description">{{$service->service_name}}</span>
                                                <span
                                                    class="cost-breakdown cost-amount">${{$service->service_amount}}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-xs-3 price">
                                        @php
                                        $service_amount = $services->pluck('service_amount')->toArray();
                                        @endphp
                                        ${{array_sum($service_amount)}}
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="row">
                                    <div class="col-xs-9">
                                        <label>RVnGO Services</label>
                                        <a data-toggle="collapse" href="#rvngoServicesTotalBreakdown"
                                            style="font-size: 12px; color: #71b46a;" title="Show breakdown">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <ul id="rvngoServicesTotalBreakdown"
                                            class="cost-breakdown collapse list-unstyled">
                                            <li>
                                                <span class="cost-breakdown cost-description">Insurance</span>
                                                <span class="cost-breakdown cost-amount">$210.00</span>
                                            </li>
                                            <li>
                                                <span class="cost-breakdown cost-description">Roadside Assistance</span>
                                                <span class="cost-breakdown cost-amount">$84.00</span>
                                            </li>
                                            <li>
                                                <span class="cost-breakdown cost-description">Processing Fee</span>
                                                <span class="cost-breakdown cost-amount">$36.42</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3 price">
                                        $330.42
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-xs-9">
                                        <label>
                                            Sales Tax
                                            <span class="note"></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-3 price">
                                        Included
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 16px;">
                                    <div class="col-xs-9">
                                        <label>
                                            Total
                                        </label>
                                    </div>
                                    <div class="col-xs-3 price">$868.00</div>
                                </div>
                            </div>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row tile-row visible-md visible-lg">
                <div class="col-md-12">
                    <div class="propbckgrnd rental-showbg"><i class="fa fa-map-marker" aria-hidden="true"></i> Nearby
                        RVs</div>
                    <div class="space">
                        <div class="col-md-12 col-sm-6 thumbnail space">
                            <div class="view view-sixth search-image port-1 effect-1 thumb past_trips_image">
                                <a href="2018-gulf-stream-innsbruck-198bh-travel-trailer-rv.html">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="https://files.rvngo.com/u/list_photo/photo/204567/sm_7295c01e2c2ed6903811ff240a8e7631.webp" />
                                        <source
                                            srcset="../../files.rvngo.com/u/list_photo/photo/204567/sm_7295c01e2c2ed6903811ff240a8e7631.jpg" />
                                        <script src="{{asset('assets/detail/js/rocket-loader.min.js')}}"></script>
                                        <img alt="2018 Gulf Stream INNSBRUCK 198BH - Travel Trailer RV on RVnGO.com"
                                            data-fallback-src="https://files.rvngo.com/assets/fallback/sm_no_listing_image-1bc9f692757cff7199e4b9a3ed920e02a217656f0dd691be429e0332dcab4c8a.jpg"
                                            src="../../files.rvngo.com/u/list_photo/photo/204567/sm_7295c01e2c2ed6903811ff240a8e7631.jpg"
                                            onerror="pictureErrorHandler($(this).parent())" />
                                    </picture>
                                </a>
                            </div>
                            <div class="caption rental-showcaption">
                                <div class="list_name white-tex">
                                    <b><a href="2018-gulf-stream-innsbruck-198bh-travel-trailer-rv.html">#2854 INNSBRUCK
                                            198BH</a></b>
                                    <br>
                                    6 miles away,
                                    Nightly Rate: $115
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
                            var recalculate = function () {
                                $.ajax({
                                    url: '/reservations/calculate_inquiry',
                                    data: {
                                        'id': null,
                                        'listing_id': 19586,
                                        'start_date': $("#reservation_start_date").val(),
                                        'end_date': $("#reservation_end_date").val(),
                                        'surcharge': $("#reservation_surcharge").val(),
                                        'surcharge_desc': $("#reservation_surcharge_desc").val(),
                                        'discount': $("#reservation_discount").val(),
                                        'discount_desc': $("#reservation_discount_desc").val(),
                                        'delivery_fee': $("#reservation_delivery").val(),
                                        'delivery_desc': $("#reservation_delivery_desc").val(),
                                        'include_roadside': $("#reservation_include_roadside").is(
                                            ":checked") ? '1' : '0',
                                        'insurance_only': $("#reservation_insurance_only_true").is(
                                            ":checked") ? 'true' : 'false',
                                        'oneway_rental': $("#reservation_oneway_rental").is(":checked") ?
                                            'true' : 'false',
                                        'elmonte_100_mile_qty': $("#elmonte_100_mile_qty").val(),
                                        'add_ons': $.map($(
                                            ".kit-addon.toggle-addon:checked, .kit-addon.quantity-addon"
                                            ), function (el) {
                                            return {
                                                id: $(el).attr('data-add-on-id'),
                                                quantity: $(el).val()
                                            };
                                        })
                                    },
                                    success: function (data) {
                                        $("#reservation_modified").show();
                                    },
                                    error: function (error) {}
                                });
                            };

                            var availableDates = [];
                            var isDateAvailable = function (date) {
                                var notAvailable = $.inArray(moment(date).format("YYYY-M-D"), availableDates) > -1;
                                return [notAvailable, '', ''];
                            };

                            $(document).ready(function () {
                                $("#reservation_include_roadside, .kit-addon, #total, #elmonte_100_mile_qty, #reservation_discount, #reservation_discount_desc, #reservation_surcharge, #reservation_surcharge_desc, #reservation_delivery_fee, #reservation_delivery_desc, #reservation_insurance_only_false, #reservation_insurance_only_true, #reservation_oneway_rental, #driver_name, #phone_number, #no_of_passengers, #promo_code")
                                    .on('input', function () {
                                        $("#confirm_reservation_form button").prop('disabled', true);
                                        $("#confirm_reservation_form button").addClass('disabled');
                                        $("#decline_reservation_form button").prop('disabled', true);
                                        $("#decline_reservation_form button").addClass('disabled');
                                    });
                                $("#reservation_include_roadside, .kit-addon, #total, #elmonte_100_mile_qty, #reservation_discount, #reservation_discount_desc, #reservation_surcharge, #reservation_surcharge_desc, #reservation_delivery_fee, #reservation_delivery_desc, #reservation_insurance_only_false, #reservation_insurance_only_true, #reservation_oneway_rental, #driver_name, #phone_number, #no_of_passengers, #promo_code")
                                    .on('change', recalculate);
                                $("#submit_reservation_form").on('click', function () {
                                    if ($("#reservation_form")[0].reportValidity()) {
                                        $("#submit_reservation_form").addClass('disabled')
                                        $("#submit_reservation_form").prop('disabled', true)
                                        $("#reservation_start_date").prop('disabled', false)
                                        $("#reservation_end_date").prop('disabled', false)
                                        $("#reservation_form").prop('target', '_parent');
                                        $("#reservation_form")[0].submit();
                                    }
                                });
                                $("#submit_reservation_form_book_now").on('click', function () {
                                    if ($("#reservation_form")[0].reportValidity()) {
                                        $("#reservation_book_now").val(true);
                                        $("#submit_reservation_form_").addClass('disabled')
                                        $("#submit_reservation_form").prop('disabled', true)
                                        $("#reservation_start_date").prop('disabled', false)
                                        $("#reservation_end_date").prop('disabled', false)
                                        $("#reservation_form").prop('target', '_parent');
                                        $("#reservation_form")[0].submit();
                                    }
                                });
                                $("#update_reservation_submit").on('click', function () {
                                    $("#reservation_action").val('update');
                                    if ($("#reservation_form")[0].reportValidity()) {
                                        $("#update_reservation_submit").addClass('disabled')
                                        $("#update_reservation_submit").prop('disabled', true)
                                        $("#reservation_start_date").prop('disabled', false)
                                        $("#reservation_end_date").prop('disabled', false)
                                        $("#reservation_form")[0].submit();
                                    }
                                });

                                var options = {
                                    dateFormat: 'mm/dd/yy',
                                    altFormat: 'dd/mm/yy',
                                    altField: '#end_date',
                                    minDate: 0,
                                    maxDate: '24m',
                                    beforeShowDay: isDateAvailable,
                                    onSelect: function (selected) {
                                        recalculate();
                                    },
                                    onChangeMonthYear: function (year, month, dp) {
                                        $.ajax({
                                            url: '/preload',
                                            data: {
                                                'listing_id': 19586,
                                                'year': year,
                                                'month': month
                                            },
                                            dataType: 'json',
                                            async: false,
                                            success: function (data) {
                                                availableDates.length = 0;
                                                $.each(data, function (index, date) {
                                                    availableDates.push(moment(date)
                                                        .format("YYYY-M-D"));
                                                });
                                                $(dp).datepicker('refresh');
                                            }
                                        });
                                    }
                                };

                                $.ajax({
                                    url: '/preload',
                                    data: {
                                        'listing_id': 19586,
                                        'month': 3,
                                        'year': 2022
                                    },
                                    dataType: 'json',
                                    success: function (data) {
                                        availableDates.length = 0;
                                        $.each(data, function (index, date) {
                                            availableDates.push(moment(date).format(
                                                "YYYY-M-D"));
                                        });
                                        $('#reservation_start_date').datepicker(options);
                                        $('#reservation_end_date').datepicker(options);
                                    },
                                    error: function (error) {}
                                });

                                $(".toggle-blocked-date").on("ajax:success", function (e, data, status, xhr) {
                                    var el = e.target;
                                    $(el).html($(el).attr('data-day'));
                                    if ($(el).attr('style') ==
                                        'color: grey; text-decoration: line-through;' || $(el).hasClass(
                                            'is-blocked')) {
                                        $(el).removeClass('is-blocked');
                                        $(el).attr('style', 'color: black;');
                                        toastr.info('The date has been Un-blocked');
                                    } else {
                                        //$(el).addClass('is-blocked');
                                        $(el).attr('style',
                                            'color: grey; text-decoration: line-through;');
                                        toastr.info('The date has been Blocked');
                                    }
                                }).on("ajax:error", function (e, xhr, status, error) {});

                                var max_fields = 2;
                                var wrapper = $(".input_fields_wrap");
                                var add_button = $(".add_field_button");
                                var x = 1;
                                $(add_button).click(function (e) {
                                    e.preventDefault();
                                    if (x < max_fields) {
                                        x++;
                                        $(wrapper).append(
                                            '<div class="row"><div class="col-md-12"><div class="form-group"><label>Additional Driver Name</label><input type="text" placeholder="Driver Name" class="form-control" name="additional_driver_name[]"/> <br /><a href="#" class="remove_field btn btn-danger">-</a></div></div></div>'
                                            ); //add input box
                                    }
                                });
                                $(wrapper).on("click", ".remove_field", function (
                                e) { //user click on remove text
                                    e.preventDefault();
                                    $(this).parent('div').remove();
                                    x--;
                                });

                                $('a').tooltip();
                                $(".required").after("<span class='red'>*</span>");
                                $("[rel=tooltip]").tooltip({
                                    placement: 'right'
                                });
                            });

                        </script> --}}

@endsection
