@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
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
                        <a class="nav-link" href="{{route('destination.index')}}"><i class="icon icon-home2"></i>All Destinations</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('destination.create')}}"><i class="icon icon-plus-circle"></i> Add New Destination</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('destination.edit', $destination[0]->id)}}" ><i class="icon icon-pencil"></i> Edit Destination</a>
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
                        <form action="{{route('destination.update', $destination[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('destination.store')}}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="card no-b no-r">
                            <div class="card-body">
                                <h5 class="card-title">Destination</h5>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="avatar-upload" style="height: 270px">
                                            <div class="avatar-edit">
                                                <input type='file' name="featured" id="imageUpload1"
                                                    accept=".png, .jpg, .jpeg"  />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview1"
                                                    style="background-image : url({{url('').'/uploads/'}}{{$destination[0]->image ?? 'placeholder.jpg'}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('featured')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Course Name</label>
                                            <input id="name" placeholder="Enter Course Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{ $destination[0]->name }}" @endif>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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

<script>
    jQuery(document).ready(function(){
        function readURL(input, number) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview' + number).css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview' + number).hide();
                    $('#imagePreview' + number).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function () {
            readURL(this, 1);
        });
    });
    CKEDITOR.replace( 'units' );
    CKEDITOR.replace( 'desc' );
</script>

@endsection
