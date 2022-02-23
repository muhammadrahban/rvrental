@extends('layouts.dashboard')

@section('content')

<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Users
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Users</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="{{route('user.create')}}" ><i class="icon icon-plus-circle"></i> Add New User</a>
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
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th>USER NAME</th>
                                            <th>PHONE</th>
                                            <th>ROLE</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                            @if (Auth::user()->profile != Null)
                                                                <img src="{{ asset('image/'.Auth::user()->profile) }}" class="user-image" alt="User Image">
                                                            @else
                                                                <span class="avatar-letter avatar-letter-{{substr(Auth::user()->name, 0, 1)}} circle"></span>
                                                            @endif
                                                        </div>

                                                        <div>
                                                            <div>
                                                                <strong>{{ $user->name }}</strong>
                                                            </div>
                                                            <small> {{$user->email}}</small>
                                                        </div>
                                                    </td>
                                                    <td>+92 333 123 136</td>

                                                    @if (strpos($user->roles->pluck('name'), 'super-admin') !== false)
                                                        <td><span class="r-3 badge badge-success ">super-admin</span></td>
                                                    @elseif (strpos($user->roles->pluck('name'), 'branch-incharge') !== false)
                                                        <td><span class="r-3 badge badge-success ">branch-incharge</span></td>
                                                    @else
                                                        <td><span class="r-3 badge badge-success ">user</span></td>
                                                    @endif
                                                    <td>
                                                        <a href="{{route('user.edit', $user->id)}}"><i class="icon-pencil"></i></a>
                                                        <a href="{{route('user.destroy', $user->id)}}" onclick="event.preventDefault();
                                                            document.getElementById('user-delete-{{$user->id}}').submit();"><i class="icon-delete"></i></a>

                                                            <form id="user-delete-{{$user->id}}" action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="my-3" aria-label="Page navigation">
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
                </nav>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="{{route('user.create')}}" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
</div>

@endsection
