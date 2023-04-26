@extends('partials._header')
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>New Offer</h3>
            <div class="card">
                <h5 class="text-center mb-4">Edit the offer's informations</h5>
                <form class="form-card" method="POST" action="/StoreEditOffer/{{$offer->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between text-left">
                        {{-- make --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Make<span class="text-danger"> *</span></label> <input type="text" id="make" name="car_make" placeholder="" value="{{$offer->car_make}}" > </div>
                        @error('name')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        {{-- model --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">model<span class="text-danger"> *</span></label> <input type="text" id="model" name="car_model" placeholder="" value="{{$offer->car_model}}"> </div>
                        @error('model')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- year --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">production year<span class="text-danger"> *</span></label> <input type="date" id="car_production_year" name="car_production_year" placeholder="" value="{{$offer->car_production_year}}"> </div>
                        @error('adress')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        {{-- doors --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Doors number<span class="text-danger"> *</span></label> <input type="number" id="car_doors" name="car_doors" placeholder="" value="{{$offer->car_doors}}"> </div>
                        @error('phone')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- role --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Engine<span class="text-danger"> *</span></label>  
                            <select name="car_engine" id="car_engine" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-orange-400 bg-transparent focus:outline-none focus:ring focus:ring-orange-400">
                                <option value="{{$offer->car_engine}}">{{$offer->car_engine}}</option>
                                <option value="I4">I4</option>
                                <option value="I5">I5</option>
                                <option value="I6">I6</option>
                                <option value="V6">V6</option>
                                <option value="V8">V8</option>
                                <option value="V10">V10</option>
                                <option value="V12">V12</option>
                                <option value="F4">F4</option>
                            </select>
                            @error('car_engine')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- password --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Power<span class="text-danger"> *</span></label> <input type="number" id="car_power" name="car_power" placeholder="" value="{{$offer->car_power}}"> </div>
                        @error('car_power')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- role --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Category<span class="text-danger"> *</span></label>  
                            <select name="car_category" id="car_category" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-orange-400 bg-transparent focus:outline-none focus:ring focus:ring-orange-400">
                                <option value="{{$offer->car_category}}">{{$offer->car_category}}</option>
                                <option value="AWD">All wheels drive</option>
                                <option value="FWD">Front wheels drive</option>
                                <option value="RWD">Rear wheels drive</option>
                            </select>
                            @error('car_category')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- password --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Price<span class="text-danger"> *</span></label> <input type="text" id="car_price" name="car_price" placeholder="" value="{{$offer->car_price}}"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- role --}}
                        {{-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Offer Type<span class="text-danger"> *</span></label>  
                            <select name="typeoffer_id" id="typeoffer_id" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-orange-400 bg-transparent focus:outline-none focus:ring focus:ring-orange-400">
                                <option value="{{$offer->typeoffers_id}}">Choose the offer's type</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                {{-- <option value="1">Selling offer</option>
                                <option value="2">Rental offer</option> --}}
                            {{-- </select> 
                            @error('offertype_id')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> <input type="file" id="image" name="image" placeholder="" > </div>
                        @error('image')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        {{-- password --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Description<span class="text-danger"> *</span></label> <textarea type="textarea" id="description" name="description" placeholder="" value="">{{$offer->description}}</textarea></div>
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- image --}}
                        {{-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> <input type="file" id="image" name="image" placeholder="" > </div>
                        @error('image')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror --}}
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection