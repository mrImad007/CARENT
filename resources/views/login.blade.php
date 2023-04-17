@extends('_header')
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Log In</h3>
            <div class="card">
                <h5 class="text-center mb-4">Enter your credentials</h5>
                <form class="form-card" method="POST" action="/users/authentification" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center text-left">
                        {{-- email --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="" > </div>
                        @error('name')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-center text-left">
                        {{-- password --}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" name="password" id="pwd" placeholder="password" placeholder="" > </div>
                        @error('adress')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Log In</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection