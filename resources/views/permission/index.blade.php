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

<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Permissions
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Permission</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="{{route('permission.create')}}" ><i class="icon icon-plus-circle"></i> Add New Permission</a>
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
                                            <th>ID</th>
                                            <th>Permission</th>
                                            <th>Guard</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td>{{ $permission->id }}</td>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>{{ $permission->guard_name }}</td>
                                                    <td>
                                                        <a href="{{route('permission.edit', $permission->id)}}"><i class="icon-pencil"></i></a>
                                                        <a href="{{route('permission.destroy', $permission->id)}}" onclick="event.preventDefault();
                                                            document.getElementById('user-delete-{{$permission->id}}').submit();"><i class="icon-delete"></i></a>

                                                            <form id="user-delete-{{$permission->id}}" action="{{ route('permission.destroy', $permission->id) }}" method="POST" class="d-none">
                                                                @csrf
                                                                @method("DELETE")
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
    <a href="{{route('permission.create')}}" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
</div>

@endsection
