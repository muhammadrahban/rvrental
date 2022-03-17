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
                    @if ($isEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('rvs.edit', $rvs->id)}}" ><i class="icon icon-pencil"></i> Edit RV</a>
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
                        <form action="{{route('rvs.update', $rvs->id)}}" method="POST" enctype="multipart/form-data">
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
                                                    style="background-image : url({{url('').'/uploads/'}}{{$rvs->image ?? 'placeholder.jpg'}}">
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
                                                    <input id="name" placeholder="Enter RV Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" value="{{ $rvs->name  ?? old('name')}}">
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
                                                            <option value="{{$des->id}}" @if ($isEdit) {{ ($rvs->des_id == $des->id) ? 'selected' : '' }} @endif>{{$des->name}}</option>
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
                                                    <input id="slug" placeholder="Enter slug" class="form-control r-0 light s-12 @error('slug') is-invalid @enderror" name="slug" type="text" @if ($isEdit) value="{{ $rvs->slug ?? old('slug') }}" @endif />
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
                                                    <input id="price" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" name="price" type="text" @if ($isEdit) value="{{ $rvs->price  ?? old('price')}}" @endif />
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
                                                    @if ($isEdit)
                                                        @foreach ( $rvs->Images as $img)
                                                            <img src="{{ asset('uploads/' . $img->url) }}" alt="{{ $img->url }}" width="70" height="70" style="padding: 0px 5px; margin: 10px 0px" />
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" style="margin-top: 20px">
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Price / night</label>
                                            <input class="form-control r-0 light s-12 @error('price_night') is-invalid @enderror" name="price_night" type="text" value="{{$rvs->price_night ?? old('price_night')}}"/>
                                        </div>
                                        @error('price_night')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Price / week</label>
                                            <input class="form-control r-0 light s-12 @error('price_week') is-invalid @enderror" name="price_week" type="text" value="{{$rvs->price_week ?? old('price_week')}}"/>
                                        </div>
                                        @error('price_week')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Price / month</label>
                                            <input class="form-control r-0 light s-12 @error('price_month') is-invalid @enderror" name="price_month" type="text" value="{{$rvs->price_month ?? old('price_month')}}"/>
                                        </div>
                                        @error('price_month')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row" style="margin-top: 20px">
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Booking Deposite</label>
                                            <input class="form-control r-0 light s-12 @error('booking_deposite') is-invalid @enderror" name="booking_deposite" type="text" value="{{$rvs->booking_deposite ?? old('booking_deposite')}}"/>
                                        </div>
                                        @error('booking_deposite')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Security Deposite</label>
                                            <input class="form-control r-0 light s-12 @error('security_deposite') is-invalid @enderror" name="security_deposite" type="text" value="{{$rvs->security_deposite ?? old('security_deposite')}}"/>
                                        </div>
                                        @error('security_deposite')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Balance Due</label>
                                            <input class="form-control r-0 light s-12 @error('balance_due') is-invalid @enderror" name="balance_due" type="text" value="{{$rvs->balance_due ?? old('balance_due')}}"/>
                                        </div>
                                        @error('balance_due')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Short Description</label>
                                            <textarea id="short" placeholder="Enter Short Description" class="form-control r-0 light s-12 @error('short_desc') is-invalid @enderror" name="short_desc"> @if ($isEdit) {{ $rvs->short_desc }} @endif </textarea>
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
                                            <textarea id="description" name="desc" placeholder="Enter Description" class="form-control r-0 light s-12 @error('desc') is-invalid @enderror" > @if ($isEdit) {{$rvs->desc}} @endif </textarea>
                                            @error('desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <a href="javascript:void(0)" onclick="addAddon()" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Add-ons</span></a>
                                @if ($isEdit)
                                    <div class="Addon">
                                        @foreach ($rvs->rvAddon as $addon)
                                        <div class="form-group row ">
                                            <label class="col-sm-2 col-form-label">Enter Text:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Enter Text" name="addon_text[]" value="{{$addon->text}}" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label">Enter Amount:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Enter Amount" name="addon_amount[]" value="{{$addon->amount}}" required>
                                            </div>
                                            <label class="col-sm-1 col-form-label">
                                                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="Addon">

                                    </div>
                                @endif
                                {{-- Price Section --}}
                                <hr>
                                <h3>Price Section</h3>
                                <a href="javascript:void(0)" onclick="addPriceManagment()" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

                                @if ($isEdit)
                                    <div class="PriceManagement">
                                        @foreach ($rvs->rvAttribute->where('type','price') as $attribute)
                                        <div class="form-group row ">
                                            <label class="col-sm-2 col-form-label">Main Heading:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Main Heading" name="heading[price][]" value="{{$attribute->heading}}" required>
                                            </div>
                                            <label style="padding-right:20px;" class="col-form-label">
                                                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                            </label>
                                            <a href="javascript:void(0)" onclick="addDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

                                            <div class="col-md-12 addDetail" >
                                                <div class="row " style="margin-top:15px;">
                                                    <div class="col-md-2" ></div>
                                                    <label class="col-sm-2 col-form-label">Add Entity:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Entity Name" name="entity[price][]" value="{{$attribute->entity}}" required>
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">Add Value:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Add Value" name="value[price][]" value="{{$attribute->value}}" required>
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">
                                                        <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><hr>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="PriceManagement">

                                    </div>

                                @endif
                                {{-- Listing Section --}}
                                <hr>
                                <h3>Listing Section</h3>
                                <a href="javascript:void(0)" onclick="addListingManagment()" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>
                                @if ($isEdit)
                                    <div class="ListingManagment">
                                        @foreach ($rvs->rvAttribute->where('type','listing') as $listing_attribute)
                                        <div class="form-group row ">
                                            <label class="col-sm-2 col-form-label">Main Heading:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Main Heading" name="heading[listing][]" value="{{$listing_attribute->heading}}" required>
                                            </div>
                                            <label style="padding-right:20px;" class="col-form-label">
                                                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                            </label>
                                            <a href="javascript:void(0)" onclick="addListingDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

                                            <div class="col-md-12 addListingDetail" >
                                                <div class="row " style="margin-top:15px;">
                                                    <div class="col-md-2" ></div>
                                                    <label class="col-sm-2 col-form-label">Add Entity:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Entity Name" name="entity[listing][]" value="{{$listing_attribute->entity}}" >
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">Add Value:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Add Value" name="value[listing][]" value="{{$listing_attribute->value}}" >
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">
                                                        <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><hr>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="ListingManagment">

                                    </div>
                                @endif
                                {{-- Amenity Section --}}

                                <hr>
                                <h3>Amenities Section</h3>
                                <a href="javascript:void(0)" onclick="addAmenitiesManagment()" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>
                                @if ($isEdit)
                                    <div class="AmenitiesManagment">
                                        @foreach ($rvs->rvAttribute->where('type','amenity') as $amenity_attribute)
                                        <div class="form-group row ">
                                            <label class="col-sm-2 col-form-label">Main Heading:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Main Heading" name="heading[amenity][]" value="{{$amenity_attribute->heading}}" required>
                                            </div>
                                            <label style="padding-right:20px;" class="col-form-label">
                                                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                            </label>
                                            <a href="javascript:void(0)" onclick="addAmenitiesManagmentDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

                                            <div class="col-md-12 addAmenitiesManagmentDetail" >
                                                <div class="row " style="margin-top:15px;">
                                                    <div class="col-md-2" ></div>
                                                    <label class="col-sm-2 col-form-label">Add Entity:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Entity Name" name="entity[amenity][]" value="{{$amenity_attribute->entity}}">
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">Add Value:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="Add Value" name="value[amenity][]" value="{{$amenity_attribute->value}}">
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">
                                                        <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><hr>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="AmenitiesManagment">

                                    </div>
                                @endif

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
    function deleteProperty(e){
        $(e).parent().parent().html('')
    }
    function addPriceManagment(){
        $('.PriceManagement').append(`
        <div class="form-group row ">
            <label class="col-sm-2 col-form-label">Main Heading:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Main Heading" name="heading[price][]" value="" required>
            </div>
            <label style="padding-right:20px;" class="col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
            <a href="javascript:void(0)" onclick="addDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

            <div class="col-md-12 addDetail" >
                <div class="row " style="margin-top:15px;">
                    <div class="col-md-2" ></div>
                    <label class="col-sm-2 col-form-label">Add Entity:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Entity Name" name="entity[price][]" value="" required>
                    </div>
                    <label class="col-sm-1 col-form-label">Add Value:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Add Value" name="value[price][]" value="" required>
                    </div>
                    <label class="col-sm-1 col-form-label">
                        <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
                    </label>
                </div>
            </div>
        </div><hr>`);
    }
    function addDetail(e){
        $(e).siblings('.addDetail').append(`
        <div class="row " style="margin-top:15px;">
            <div class="col-md-2" ></div>
            <label class="col-sm-2 col-form-label">Add Entity:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Entity Name" name="entity[price][]" value="" required>
            </div>
            <label class="col-sm-1 col-form-label">Add Value:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Add Value" name="value[price][]" value="" required>
            </div>
            <label class="col-sm-1 col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
        </div>`);
    }

    function addListingManagment(){
        $('.ListingManagment').append(`
        <div class="form-group row ">
            <label class="col-sm-2 col-form-label">Main Heading:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Main Heading" name="heading[listing][]" value="" required>
            </div>
            <label style="padding-right:20px;" class="col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
            <a href="javascript:void(0)" onclick="addListingDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

            <div class="col-md-12 addListingDetail" >
            </div>
        </div><hr>`);
    }
    function addListingDetail(e){
        $(e).siblings('.addListingDetail').append(`
        <div class="row " style="margin-top:15px;">
            <div class="col-md-2" ></div>
            <label class="col-sm-2 col-form-label">Add Entity:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Entity Name" name="entity[listing][]" value="" >
            </div>
            <label class="col-sm-1 col-form-label">Add Value:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Add Value" name="value[listing][]" value="" >
            </div>
            <label class="col-sm-1 col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
        </div>`);
    }
    function addAmenitiesManagment(){
        $('.AmenitiesManagment').append(`
        <div class="form-group row ">
            <label class="col-sm-2 col-form-label">Main Heading:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Main Heading" name="heading[amenity][]" value="" required>
            </div>
            <label style="padding-right:20px;" class="col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
            <a href="javascript:void(0)" onclick="addAmenitiesManagmentDetail(this)" class="btn btn-primary btn-sm"><em class="icon ni ni-plus"></em><span>Add Section</span></a>

            <div class="col-md-12 addAmenitiesManagmentDetail" >
            </div>
        </div><hr>`);
    }
    function addAmenitiesManagmentDetail(e){
        $(e).siblings('.addAmenitiesManagmentDetail').append(`
        <div class="row " style="margin-top:15px;">
            <div class="col-md-2" ></div>
            <label class="col-sm-2 col-form-label">Add Entity:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Entity Name" name="entity[amenity][]" value="">
            </div>
            <label class="col-sm-1 col-form-label">Add Value:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Add Value" name="value[amenity][]" value="">
            </div>
            <label class="col-sm-1 col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
        </div>`);
    }

    function addAddon(){
        $('.Addon').append(`
        <div class="form-group row ">
            <label class="col-sm-2 col-form-label">Enter Text:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Enter Text" name="addon_text[]" value="" required>
            </div>
            <label class="col-sm-2 col-form-label">Enter Amount:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Enter Amount" name="addon_amount[]" value="" required>
            </div>
            <label class="col-sm-1 col-form-label">
                <em onclick="deleteProperty(this)" style="font-size: 20px; color: #ff000094;" class="icon icon-delete"></em>
            </label>
        </div>`);
    }
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
