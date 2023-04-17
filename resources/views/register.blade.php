@extends('_header')
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Join us</h3>
            <div class="card">
                <h5 class="text-center mb-4">Enter your informations to register</h5>
                <form class="form-card" method="POST" action="/store" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between text-left">
                        {{-- name --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="" > </div>
                        @error('name')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        {{-- email --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" > </div>
                        @error('email')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- adress --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Adress<span class="text-danger"> *</span></label> <input type="text" id="adress" name="adress" placeholder="" > </div>
                        @error('adress')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        {{-- phone --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="phone" name="phone" placeholder="" > </div>
                        @error('phone')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- role --}}
                        {{-- <input type="text" id="role" name="role" placeholder="" > --}}
                        {{-- password --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="password" name="password" placeholder="" > </div>
                        @error('email')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label>  
                            <select name="role" id="role" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-orange-400 bg-transparent focus:outline-none focus:ring focus:ring-orange-400">
                                <option value="0">choose your membership</option>
                                <option value="0">Client</option>
                                <option value="1">Provider</option>
                            </select>
                            @error('role')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                             </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- image --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> <input type="file" id="image" name="image" placeholder="" > </div>
                        @error('image')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
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