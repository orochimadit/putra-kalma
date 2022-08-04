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


                    <form action="{{route('housings.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <div class="col-md-6 form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Perumahan</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                                </div>
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Lokasi</label>
                                <div class="col-md-10">
                                    <input type="text" name="location" class="form-control">
                                </div>
                                @error('location') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Spesifikasi Teknis</label>
                                <div class="col-md-10">

                                    <textarea name="technical_specifications" class="summernote"></textarea>

                                </div>
                                @error('technical_specifications') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Daftar Tipe</label>
                                <div class="col-md-10">

                                    <select multiple="multiple" class="multi-select" id="daftar_tiperumah" name="type[]" data-plugin="multiselect">
                                        <option value="50">50</option>
                                        <option value="60">60</option>
                                        <option value="70">70</option>
                                        <option value="80">80</option>
                                        <option value="90">90</option>
                                        <option value="100">100</option>
                                        <option value="125">125</option>
                                        <option value="135">135</option>
                                    </select>

                                </div>
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Jumlah Kaveling</label>
                                <div class="col-md-4">
                                    <input id="demo3" type="text" value="" name="amount">

                                </div>
                                @error('amount') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Luas Tanah</label>
                                <div class="col-md-9">
                                    <input type="text" id="luastanah" name="surface_area" placeholder="" data-a-sign="M²" data-p-sign="s" class="form-control autonumber" placeholder="..">
                                </div>
                                @error('surface_area') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="example-email">Lampirkan Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" id="file" class="filestyle" data-buttonbefore="true">
                                </div>
                                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
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