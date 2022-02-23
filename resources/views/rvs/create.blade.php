@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
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
                        <a class="nav-link" href="{{route('rvs.index')}}"><i class="icon icon-home2"></i>All RVs</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('rvs.create')}}"><i class="icon icon-plus-circle"></i> Add New RV</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('rvs.edit', $rvs[0]->id)}}" ><i class="icon icon-pencil"></i> Edit RV</a>
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
                        <form action="{{route('rvs.update', $rvs[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('rvs.store')}}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="card no-b no-r">
                            <div class="card-body">
                                <h5 class="card-title">RV</h5>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="avatar-upload" style="height: 270px">
                                            <div class="avatar-edit">
                                                <input type='file' name="image" id="imageUpload1"
                                                    accept=".png, .jpg, .jpeg"  />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview1"
                                                    style="background-image : url({{url('').'/uploads/'}}{{$rvs[0]->image ?? 'placeholder.jpg'}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label for="name" class="col-form-label s-12">RV Name</label>
                                                    <input id="name" placeholder="Enter RV Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{ $rvs[0]->name }}" @endif>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label class="my-1 mr-2" for="inlineFormCustom" >Select Destination</label>
                                                    <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12 @error('des_id') is-invalid @enderror" id="inlineFormCustom" name="des_id">
                                                        <option value="">Choose...</option>
                                                        @foreach ($destination as $des)
                                                            <option value="{{$des->id}}" @if ($idEdit) {{ ($rvs[0]->des_id == $des->id) ? 'selected' : '' }} @endif>{{$des->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('des_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group m-0">
                                                    <label for="slug" class="col-form-label s-12">slug</label>
                                                    <input id="slug" placeholder="Enter slug" class="form-control r-0 light s-12 @error('slug') is-invalid @enderror" name="slug" type="text" @if ($idEdit) value="{{ $rvs[0]->slug }}" @endif />
                                                    @error('slug')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group m-0">
                                                    <label for="price" class="col-form-label s-12">Price</label>
                                                    <input id="price" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" name="price" type="text" @if ($idEdit) value="{{ $rvs[0]->price }}" @endif />
                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label for="featured" class="col-form-label s-12">Multi Images</label>
                                                    <input id="featured" class="form-control r-0 light s-12 @error('featured') is-invalid @enderror" name="featured[]" type="file" accept=".png, .jpg, .jpeg" multiple />
                                                    <small id="emailHelp" class="form-text text-muted">(Note: you want to changes images simple select and submit form)</small>
                                                    @error('featured')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    @if ($idEdit)
                                                        @foreach ( $rvs[0]->Image as $img)
                                                            <img src="{{ asset('uploads/' . $img->url) }}" alt="{{ $img->url }}" width="70" height="70" style="padding: 0px 5px; margin: 10px 0px" />
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Short Description</label>
                                            <textarea id="short" placeholder="Enter Short Description" class="form-control r-0 light s-12 @error('short_desc') is-invalid @enderror" name="short_desc"> @if ($idEdit) {{ $rvs[0]->short_desc }} @endif </textarea>
                                            @error('short_desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="description" class="col-form-label s-12">Description</label>
                                            <textarea id="description" name="desc" placeholder="Enter Description" class="form-control r-0 light s-12 @error('desc') is-invalid @enderror" > @if ($idEdit) {{$rvs[0]->desc}} @endif </textarea>
                                            @error('desc')
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
