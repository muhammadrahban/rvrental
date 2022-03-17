@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Blogs
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="{{route('blog.index')}}"><i class="icon icon-home2"></i>All Blogs</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('blog.create')}}"><i class="icon icon-plus-circle"></i> Add New Blog</a>
                    </li>
                    @if ($isEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('blog.edit', $blog->id)}}" ><i class="icon icon-pencil"></i> Edit Blog</a>
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
                    @if ($isEdit)
                        <form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    @endif
                        <div class="card no-b no-r">
                            <div class="card-body">
                                <h5 class="card-title">Blog</h5>
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
                                                @if ($isEdit) style="background-image : url({{url('').'/uploads/'}}{{ $blog->img ?? 'placeholder.jpg'}} "
                                                @else
                                                    style="background-image : url({{url('').'/uploads/placeholder.jpg'}}"
                                                @endif>
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
                                            <div class="col-md-12">
                                                <div class="form-group m-0">
                                                    <label for="title" class="col-form-label s-12">blog Title</label>
                                                    <input id="title" placeholder="Enter Blog Title" class="form-control r-0 light s-12 @error('title') is-invalid @enderror" name="title" type="text" @if ($isEdit) value=" {{$blog->title ?? old('title') }} " @endif >
                                                    @error('title')
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
                                                    <input id="slug" placeholder="Enter slug" class="form-control r-0 light s-12 @error('slug') is-invalid @enderror" name="slug" type="text" @if ($isEdit) value="{{ $blog->slug ?? old('slug') }}" @endif />
                                                    @error('slug')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="description" class="col-form-label s-12">Description</label>
                                            <textarea id="description" name="desc" placeholder="Enter Description" class="form-control r-0 light s-12 @error('desc') is-invalid @enderror" > @if ($isEdit) {{$blog->desc}} @endif </textarea>
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
    CKEDITOR.replace( 'desc' );
</script>

@endsection
