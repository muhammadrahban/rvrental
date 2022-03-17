@extends('layouts.dashboard')

@section('content')

<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        RVs
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All RVs</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="{{route('rvs.create')}}" ><i class="icon icon-plus-circle"></i> Add New RV</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        @if (session('approved_msg'))
            <p class="alert alert-success">{{session('approved_msg')}}</p>
        @endif
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
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
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rvs as $rv)
                                            <tr>
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
                                                    @if ($rv->approve == 0)
                                                    <a href="{{route('rv_status_approve',[$rv->id])}}">
                                                        <span class="r-3 badge badge-success ">Click to Approve</span>
                                                    </a>

                                                    @else
                                                        <span class="r-3 badge badge-info ">Approved</span>

                                                    @endif
                                                </td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="{{route('rvs.create')}}" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
</div>

@endsection
