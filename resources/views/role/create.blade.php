@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Roles
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="{{route('role.index')}}"><i class="icon icon-home2"></i>All Roles</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('role.create')}}"><i class="icon icon-plus-circle"></i> Add New Role</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('role.edit', $roles[0]->id)}}" ><i class="icon icon-pencil"></i> Edit Role</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort go">
            <div class="row my-3">
                <div class="col-md-12">
                    @if ($idEdit)
                        <form action="{{route('role.update', $roles[0]->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('role.store')}}" method="POST">
                    @endif
                        @csrf
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Role</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Role Name</label>
                                            <input id="name" name="name" placeholder="Enter Role Name" class="form-control r-0 light s-12 " type="text" @if ($idEdit) value="{{ $roles[0]->name }}" @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Permissions</h5>
                                <div class="form-group">
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input" name="permission[]" type="checkbox" value="{{ $permission->id }}" id="flexCheckDefault-{{ $permission->id }}" @if ($idEdit) {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} @endif>
                                            <label class="form-check-label" for="flexCheckDefault-{{ $permission->id }}">
                                                {{$permission->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>

@endsection
