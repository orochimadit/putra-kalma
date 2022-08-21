@extends('layouts.index')

@section('contents')


<div class="main-container" id="main-container">
    <!--Main container start-->

    <div class="form-page" id="form-page">
        <!-- form section -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            @if (session()->has('message'))
                            <div class="alert alert-success" style="margin-top:30px;">
                            {{ session('message') }}
                            </div>
                            @endif

                            <div class="grey-box">
                                <!-- greay box -->
                                <h2 class="tp-title">Register</h2>
                                <form action="{{route('daftarStore')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                            <div class="col-md-6 form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                                </div>
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" class="form-control">
                                </div>
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Nomor Telepon</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone number" name="phone_number">
                                </div>
                                @error('phone_number') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" placeholder="" name="password" class="form-control autonumber">
                                </div>
                                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-9">
                                    <input type="text"  name="address" class="form-control" >
                                </div>
                                @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="clearfix pull-right m-t-15">
                                <button type="submit" class="btn btn-pink btn-rounded waves-effect waves-light">Submit</button>
                                <button class="btn btn-secondary bd-0">Cancel</button>
                            </div>
                        </div>
                    </form>


                            </div><!-- /.greay box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- form section -->
</div>

@endsection