@extends('layouts.dashboard')

@section('content')

<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Destinations
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Destinations</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="{{route('destination.create')}}" ><i class="icon icon-plus-circle"></i> Add New Destination</a>
                    </li>
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
                                        <th></th>
                                        <th>Destination Name</th>
                                        <th>Create Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($destination as $dd)
                                            <tr>
                                                <td>
                                                   <img src="{{  ($dd->image) ? asset('uploads/'.$dd->image) : asset('uploads/placeholder.jpg') }}" width="50" />
                                                </td>
                                                <td>
                                                    {{ $dd->name }}
                                                </td>
                                                <td>{{ $dd->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="{{route('destination.edit', $dd->id)}}"><i class="icon-pencil"></i></a>
                                                    <a href="{{route('destination.destroy', $dd->id)}}" onclick="event.preventDefault();
                                                        document.getElementById('course-delete-{{$dd->id}}').submit();"><i class="icon-delete"></i>
                                                    </a>
                                                    <form id="course-delete-{{$dd->id}}" action="{{ route('destination.destroy', $dd->id) }}" method="POST" class="d-none">
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
