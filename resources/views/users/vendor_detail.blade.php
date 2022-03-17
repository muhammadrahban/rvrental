@extends('layouts.dashboard')

@section('content')


@if (session('status'))
    <div class="toast"
    data-title="Hi, there!"
    data-message="{{session('status')}}"
    data-type="success">
    </div>
@endif

@if (session('error'))
    <div class="toast"
    data-title="Hi, there!"
    data-message="{{session('error')}}"
    data-type="error">
    </div>
@endif
<div class="page has-sidebar-left">
    <div>
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">

                            <div>
                                <h6 class="p-t-10">{{auth()->user()->name}}</h6>
                                {{auth()->user()->email}}
                            </div>
                        </div>
                    </div>
                </div>

              <div class="row">
                  <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    {{-- <li>
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="icon icon-home2"></i>Home</a>
                    </li> --}}
                    <li>
                        <a class="nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="icon icon-cog"></i>Edit Profile</a>
                    </li>
                  </ul>
              </div>

            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort go">
                {{-- <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card ">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Phone</strong> <span class="float-right s-12">+91 333470 456 99</span></li>
                                                <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12">abc@paper.com</span></li>
                                                <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Address</strong> <span class="float-right s-12">New York, USA</span></li>
                                                <li class="list-group-item"><i class="icon icon-web text-danger"></i> <strong class="s-12">Website</strong> <span class="float-right s-12">pappertemplate.com</span></li>
                                            </ul>
                                        </div>
                                        <div class="card mt-3 mb-3">
                                            <div class="card-header bg-white">
                                                <strong class="card-title">Guardian</strong>

                                            </div>
                                            <ul class="no-b">
                                                <li class="list-group-item">
                                                    <a href="">
                                                        <div class="image mr-3  float-left">
                                                            <img class="user_avatar" src="assets/img/dummy/u3.png" alt="User Image">
                                                        </div>
                                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                                        <span><i class="icon-mobile-phone"></i>+92 333470963</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="card-header bg-white">
                                                <strong class="card-title">Siblings</strong>
                                            </div>
                                            <div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="image mr-3  float-left">
                                                            <img class="user_avatar" src="assets/img/dummy/u1.png" alt="User Image">
                                                        </div>
                                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                                        <span> 4th Grade</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="image mr-3  float-left">
                                                            <img class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image">
                                                        </div>
                                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                                        <span> 5th Grade</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="image mr-3  float-left">
                                                            <img class="user_avatar" src="assets/img/dummy/u5.png" alt="User Image">
                                                        </div>
                                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                                        <span> 6th Grade</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="image mr-3  float-left">
                                                            <img class="user_avatar" src="assets/img/dummy/u4.png" alt="User Image">
                                                        </div>
                                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                                        <span> 10th Grade</span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-9">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card r-3">
                                                    <div class="p-4">
                                                        <div class="float-right">
                                                            <span class="icon-award text-light-blue s-48"></span>
                                                        </div>
                                                        <div class="counter-title">Class Position</div>
                                                        <h5 class="sc-counter mt-3 counter-animated">5</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card r-3">
                                                    <div class="p-4">
                                                        <div class="float-right"><span class="icon-stop-watch3 s-48"></span>
                                                        </div>
                                                        <div class="counter-title ">Absence</div>
                                                        <h5 class="sc-counter mt-3 counter-animated">12</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="white card">
                                                    <div class="p-4">
                                                        <div class="float-right"><span class="icon-orders s-48"></span>
                                                        </div>
                                                        <div class="counter-title">Roll Number</div>
                                                        <h5 class="sc-counter mt-3 counter-animated">26</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-3">
                                            <!-- bar charts group -->
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header white">
                                                        <h6>Attendance <small>Sessions</small></h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="graphx" style="width: 100%; height: 300px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="737" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="19.5" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,261.5H712.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,202.5H712.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">4</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,143.5H712.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">6</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,84.5H712.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">8</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,25.5H712.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="627.21875" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015 Q4</tspan></text><text x="457.15625" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015 Q3</tspan></text><text x="287.09375" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015 Q2</tspan></text><text x="117.03125" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015 Q1</tspan></text><rect x="53.2578125" y="202" width="40.515625" height="59" rx="0" ry="0" fill="#2979ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="96.7734375" y="172.5" width="40.515625" height="88.5" rx="0" ry="0" fill="#34495e" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="140.2890625" y="143" width="40.515625" height="118" rx="0" ry="0" fill="#acadac" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="223.3203125" y="172.5" width="40.515625" height="88.5" rx="0" ry="0" fill="#2979ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="266.8359375" y="113.5" width="40.515625" height="147.5" rx="0" ry="0" fill="#34495e" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="310.3515625" y="84" width="40.515625" height="177" rx="0" ry="0" fill="#acadac" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="393.3828125" y="143" width="40.515625" height="118" rx="0" ry="0" fill="#2979ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="436.8984375" y="172.5" width="40.515625" height="88.5" rx="0" ry="0" fill="#34495e" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="480.4140625" y="202" width="40.515625" height="59" rx="0" ry="0" fill="#acadac" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="563.4453125" y="202" width="40.515625" height="59" rx="0" ry="0" fill="#2979ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="606.9609375" y="143" width="40.515625" height="118" rx="0" ry="0" fill="#34495e" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="650.4765625" y="113.5" width="40.515625" height="147.5" rx="0" ry="0" fill="#acadac" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 425.438px; top: 101px; display: none;"><div class="morris-hover-row-label">2015 Q3</div><div class="morris-hover-point" style="color: #2979ff">
                                                        Y:
                                                        4
                                                    </div>
                                                    <div class="morris-hover-point" style="color: #34495E">
                                                    Z:
                                                    3
                                                    </div><div class="morris-hover-point" style="color: #ACADAC">
                                                    A:
                                                    2
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- /bar charts group -->


                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>New Followers <span class="badge badge-success r-3">30+</span></h6>
                                       </div>
                                       <div class="card-body">

                                           <ul class="list-inline mt-3">
                                               <li class="list-inline-item ">
                                                   <img src="assets/img/dummy/u13.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u12.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u11.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u10.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u9.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u8.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item ">
                                                   <img src="assets/img/dummy/u7.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u6.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u5.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u4.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u3.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                               <li class="list-inline-item">
                                                   <img src="assets/img/dummy/u2.png" alt="" class="img-responsive w-40px circle mb-3">
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div> --}}
               <div class="tab-pane fade active show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" disabled id="inputName" placeholder="Name" name="username" type="text" value="{{ !empty($vendor->name) ? $vendor->name : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" disabled id="inputEmail" placeholder="Email" name="email" type="email" value="{{ !empty($vendor->email) ? $vendor->email : '' }} ">
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-12">
                                <h2>Total RV's {{count($vendor->rvs)}}</h2>
                                <hr>
                                <div class="card r-0 shadow">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover r-0">
                                            <thead>
                                            <tr class="no-b">
                                                <th></th>
                                                <th>RV Name</th>
                                                <th>Destination</th>
                                                <th>price</th>
                                                <th>Create Date</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($vendor->rvs) > 0)


                                                @foreach ($vendor->rvs as $key => $rv)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td>
                                                            <img src="{{  ($rv->image) ? asset('uploads/'.$rv->image) : asset('uploads/placeholder.jpg') }}" width="50" />
                                                        </td>
                                                        <td>
                                                            {{ $rv->name }}
                                                        </td>
                                                        <td>{{ $rv->destination->name }}</td>
                                                        <td>{{ $rv->price }}</td>
                                                        <td>{{ $rv->created_at->diffForHumans() }}</td>
                                                        <td>
                                                            <a href="{{route('rvs.edit', $rv->id)}}"><i class="icon-pencil"></i></a>
                                                            <a href="{{route('rvs.destroy', $rv->id)}}" onclick="event.preventDefault();
                                                                document.getElementById('course-delete-{{$rv->id}}').submit();"><i class="icon-delete"></i>
                                                            </a>
                                                            <form id="course-delete-{{$rv->id}}" action="{{ route('rvs.destroy', $rv->id) }}" method="POST" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                <td colspan="5">
                                                    No Data Found..!
                                                </td>
                                                @endif

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
           </div>
       </div>
        </div>

    </div>
</div>
@endsection
