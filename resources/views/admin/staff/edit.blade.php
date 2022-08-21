@extends('admin.layouts.app')

@section('contents')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title">Data Perumahan</h4>
        <ol class="breadcrumb">
            <li><a href="#">PT. Putra Kalma Raya</a></li>
            <li><a href="#">Data Staff</a></li>
            <li class="active">Edit Staff</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="content-wrapper">

            <!-- Modal -->
            <div class="form-layout">
                <div class="row">
                    <form action="{{route('staff.update', $staff->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <div class="col-md-6 form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name" value="{{$staff->name}}">
                                </div>
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" class="form-control" value="{{$staff->email}}">
                                </div>
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Nomor Telepon</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone number" name="phone_number" value="{{$staff->phone_number}}">
                                </div>
                                @error('phone_number') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-9">
                                    <input type="text"  name="address" class="form-control" value="{{$staff->address}}">
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