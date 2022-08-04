@extends('admin.layouts.app')

@section('contents')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title">Data Perumahan</h4>
        <ol class="breadcrumb">
            <li><a href="#">PT. Putra Kalma Raya</a></li>
            <li><a href="#">Data Master</a></li>
            <li class="active">Create Perumahan</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="content-wrapper">

            <!-- Modal -->
            <div class="form-layout">
                <div class="row">


                    <form action="{{route('konsumen.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
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

                </div>





            </div>
        </div>
    </div>
    @endsection