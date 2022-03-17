@extends('layouts.dashboard')

@section('content')

<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Bookings
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Bookings</a>
                    </li>
                    {{-- <li class="float-right">
                        <a class="nav-link"  href="{{route('destination.create')}}" ><i class="icon icon-plus-circle"></i> Add New Destination</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover r-0">
                                    <thead>
                                    <tr class="no-b">
                                        <th>S.NO</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>RV Name</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Total Amount</th>
                                        <th>Booking Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $key =>$booking)
                                            <tr>
                                                <td> {{++$key}}</td>
                                                <td> {{$booking->user->name}}</td>
                                                <td> {{$booking->user->email}}</td>
                                                <td> {{$booking->rv->name}}</td>
                                                <td> {{$booking->check_in}}</td>
                                                <td> {{$booking->check_out}}</td>
                                                <td> {{$booking->total_amount}}</td>
                                                <td> {{$booking->created_at}}</td>
                                                <td>
                                                    @if ($booking->booking_status == "Pending")
                                                    <a href="{{route('booking.status_update',[$booking->id,'Confirmed'])}}">
                                                        <button class="btn btn-success">Confirm</button>
                                                    </a>
                                                    @else
                                                    <button class="btn btn-info">Confirmed</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <nav class="my-3" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="{{route('destination.create')}}" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
</div>

@endsection
