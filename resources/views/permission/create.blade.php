@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
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
                        <a class="nav-link" href="{{route('permission.index')}}"><i class="icon icon-home2"></i>All Permissions</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link"  href="{{route('permission.create')}}" ><i class="icon icon-plus-circle"></i> Add New Permission</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('permission.edit', $permission->id)}}" ><i class="icon icon-pencil"></i> Edit Permission</a>
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
                        <form action="{{ route('permission.update', $permission->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{ route('permission.store') }}" method="POST">
                        @csrf
                    @endif
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Permission</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label for="permission-name" class="col-form-label s-12">Permission Name</label>
                                        <input id="permission-name" placeholder="Enter Permission Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{$permission->name}}" @endif>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
