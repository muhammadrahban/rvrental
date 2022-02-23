@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Locations
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="{{route('location.index')}}"><i class="icon icon-home2"></i>All Locations</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort go">
            <div class="row my-3">
                <div class="col-md-12">
                    <form action="{{route('location.store')}}" method="POST">
                    @csrf
                    <div class="card no-b no-r">
                        <div class="card-body">
                            <h5 class="card-title">Course</h5>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustom" >Select Course</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12 @error('course_id') is-invalid @enderror" id="inlineFormCustom" name="course_id">
                                            <option value="">Choose...</option>
                                            @foreach ($course as $cou)
                                                <option value="{{$cou->id}}">{{$cou->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('course_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body after-add-more">
                            <input type="hidden" name="id[]" id="avail_id">
                            <div class="form-row">
                                <div class="col-md-5">
                                    <div class="form-group m-0">
                                        <label for="Location" class="col-form-label s-12">Location</label>
                                        <input id="Location" name="location[]" placeholder="Enter Location" class="form-control r-0 light s-12 @error('location') is-invalid @enderror" type="text">
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group m-0">
                                        <label for="price" class="col-form-label s-12">Price</label>
                                        <input id="price" name="price[]" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" type="number" >
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group m-0">
                                        <label for="seat" class="col-form-label s-12">seats</label>
                                        <input id="seat" name="seats[]" placeholder="Enter seats" class="form-control r-0 light s-12 @error('seat') is-invalid @enderror" type="number" >
                                        @error('seat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-1 mt-4 pl-4">
                                    <input type="button" class="btn btn-primary add-more" value="+" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group m-0">
                                        <label for="starting" class="col-form-label s-12">Starting Date</label>
                                        <input id="starting" name="starting[]" class="form-control r-0 light s-12 @error('starting') is-invalid @enderror" type="date" >
                                        @error('starting')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group m-0">
                                        <label for="ending" class="col-form-label s-12">Ending Date</label>
                                        <input id="ending" name="ending[]" class="form-control r-0 light s-12 @error('ending') is-invalid @enderror" type="date" >
                                        @error('ending')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group m-0">
                                        <label for="timing" class="col-form-label s-12">Timing</label>
                                        <input id="timing" name="timing[]" class="form-control r-0 light s-12 @error('timing') is-invalid @enderror" type="text" >
                                        @error('timing')
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

<div class="copy d-none">
    <div class="card-body new_one">
        <input type="hidden" name="id[]" id="avail_id">
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group m-0">
                    <label for="Location" class="col-form-label s-12">Location</label>
                    <input id="Location" name="location[]" placeholder="Enter Location" class="form-control r-0 light s-12 @error('location') is-invalid @enderror" type="text" >
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group m-0">
                    <label for="price" class="col-form-label s-12">Price</label>
                    <input id="price" name="price[]" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" type="number" >
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group m-0">
                    <label for="seat" class="col-form-label s-12">seats</label>
                    <input id="seat" name="seats[]" placeholder="Enter seats" class="form-control r-0 light s-12 @error('seat') is-invalid @enderror" type="number" >
                    @error('seat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1 mt-4 pl-4">
                <input type="button" class="btn btn-danger remove" value="X" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group m-0">
                    <label for="starting" class="col-form-label s-12">Starting Date</label>
                    <input id="starting" name="starting[]" class="form-control r-0 light s-12 @error('starting') is-invalid @enderror" type="date" >
                    @error('starting')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group m-0">
                    <label for="ending" class="col-form-label s-12">Ending Date</label>
                    <input id="ending" name="ending[]" class="form-control r-0 light s-12 @error('ending') is-invalid @enderror" type="date" >
                    @error('ending')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group m-0">
                    <label for="timing" class="col-form-label s-12">Timing</label>
                    <input id="timing" name="timing[]" class="form-control r-0 light s-12 @error('timing') is-invalid @enderror" type="text" >
                    @error('timing')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        $(".add-more").click(function(){
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        $("body").on("click",".remove",function(){
            $(this).parents(".new_one").remove();
        });

        $(".custom-select").change(function(e){
            var value = $(".custom-select").val();
            if (value != '') {
                $.ajax({
                    url:"/location/"+value,
                    method:"GET",
                    success:function(res)
                    {
                        $("#avail_id").val('');
                        $("#Location").val('');
                        $("#price").val('');
                        $("#seat").val('');
                        $("#starting").val('');
                        $("#ending").val('');
                        $("#timing").val('');
                        $(".card").find(".new_one").remove();
                        for (let i = 0; i < res['data'].length; ++i) {
                            if (i == 0) {
                                $("#avail_id").val(res['data'][i]['id']);
                                $("#Location").val(res['data'][i]['location']);
                                $("#price").val(res['data'][i]['price']);
                                $("#seat").val(res['data'][i]['seats']);
                                $("#starting").val(res['data'][i]['starting']);
                                $("#ending").val(res['data'][i]['ending']);
                                $("#timing").val(res['data'][i]['timing']);
                            }else{
                                $(".after-add-more").after(
                                    '<div class="card-body new_one">'+
                                        '<input type="hidden" name="id[]" id="avail_id" value="'+res['data'][i]['id']+'">'+
                                        '<div class="form-row">'+
                                            '<div class="col-md-5">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="Locations" class="col-form-label s-12">Location</label>'+
                                                    '<input id="Locations" name="location[]" placeholder="Enter Location" class="form-control r-0 light s-12" type="text" value="'+ res['data'][i]['location']+'">'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-3">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="prices" class="col-form-label s-12">Price</label>'+
                                                    '<input id="prices" name="price[]" placeholder="Enter Price" class="form-control r-0 light s-12 " type="number" value="'+res['data'][i]['price']+'">'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-3">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="seats" class="col-form-label s-12">seats</label>'+
                                                    '<input id="seats" name="seats[]" placeholder="Enter seats" class="form-control r-0 light s-12 " type="number" value="'+res['data'][i]['seats']+'" >'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-1 mt-4 pl-4">'+
                                               ' <input type="button" class="btn btn-danger remove" value="X" />'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="form-row">'+
                                            '<div class="col-md-4">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="startings" class="col-form-label s-12">Starting Date</label>'+
                                                    '<input id="startings" name="starting[]" class="form-control r-0 light s-12" type="date" value="'+res['data'][i]['starting']+'">'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="endings" class="col-form-label s-12">Ending Date</label>'+
                                                    '<input id="endings" name="ending[]" class="form-control r-0 light s-12" type="date" value="'+res['data'][i]['ending']+'">'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<div class="form-group m-0">'+
                                                    '<label for="timing" class="col-form-label s-12">Timing</label>'+
                                                    '<input id="timing" name="timing[]" class="form-control r-0 light s-12" type="text" value="'+res['data'][i]['timing']+'" >'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                                );
                            }
                        }
                    }
                })
            }
        });
    });
</script>

@endsection
