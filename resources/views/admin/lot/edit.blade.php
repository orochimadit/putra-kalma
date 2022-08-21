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


                    <form action="{{route('lots.update',$lot->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <div class="col-md-6 form-horizontal">
                            @csrf
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label">Perumahan:</label>
                                <div class="col-md-4">
                                <select name="housing_id" class="form-control select2-show-search" data-placeholder="Pilih perumahan">
                                <option label="Pilih Perumahan"></option>
                                @foreach($housings as $item)
                                <option value="{{$item->id}}" {{$lot->housing_id == $item->id  ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Blok</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$lot->blok}}" placeholder="Enter Blok" name="blok">
                                </div>
                                @error('blok') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Luas Kaveling</label>
                                <div class="col-md-9">
                                    <input type="text" id="luastanah" name="surface_area" value="{{$lot->surface_area}} placeholder="" data-a-sign="M²" data-p-sign="s" class="form-control autonumber" placeholder="..">
                                </div>
                                @error('surface_area') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Type</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$lot->type}} name="type">

                                </div>
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Harga Kaveling</label>
                                <div class="input-group col-md-5">
                                    <span class="input-group-addon" id="format">Rp</span>
                                    <input type="text" name="price" placeholder="" value="{{$lot->price}} class="form-control autonumber" data-a-sep="." data-a-dec=",">
                                </div>
                                @error('surface_area') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <label class="col-md-2 control-label">Banyak</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$lot->amount}} name="amount">

                                </div>
                                @error('amount') <span class="text-danger error">{{ $message }}</span>@enderror
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