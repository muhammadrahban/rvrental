@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
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
                        <a class="nav-link" href="{{route('user.index')}}"><i class="icon icon-home2"></i>All Users</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('user.create')}}"><i class="icon icon-plus-circle"></i> Add New User</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('user.edit', $user[0]->id)}}" ><i class="icon icon-pencil"></i> Edit User</a>
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
                        <form action="{{route('user.update', $user[0]->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('user.store')}}" method="POST">
                    @endif
                        @csrf
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">User</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Name</label>
                                            <input id="name" placeholder="Enter User Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{ $user[0]->name }}" @endif>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group m-0">
                                            <label for="email" class="col-form-label s-12">Email</label>
                                            <input id="email" placeholder="user@email.com" class="form-control r-0 light s-12 @error('email') is-invalid @enderror" name="email" type="text" @if ($idEdit) value="{{ $user[0]->email }}" @endif>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group m-0">

                                            <label class="my-1 mr-2" for="inlineFormCustom" >Select A parent</label>
                                            <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12 @error('roles') is-invalid @enderror" id="inlineFormCustom" name="roles">
                                                <option selected="">Choose...</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}" {{ (auth()->user()->roles->pluck('name')[0] === $role->name) ? 'selected' : ''}}>{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('roles')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="password" class="col-form-label s-12">Password</label>
                                            <input id="password" name="password" placeholder="Enter password" class="form-control r-0 light s-12 @error('password') is-invalid @enderror" type="password" @if ($idEdit) disabled @endif>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="confirm_password" class="col-form-label s-12">Confirm Password</label>
                                            <input id="confirm_password" name="password_confirmation" placeholder="Confirm Password" class="form-control r-0 light s-12 " type="password" @if ($idEdit) disabled @endif>
                                        </div>
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
