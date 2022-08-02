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


                    <form action="{{route('kprs.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        
                            @csrf
                            <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Bank:</label>
                                <div class="col-md-4">
                                <select name="bank_id" class="form-control select2-show-search" data-placeholder="Pilih bank">
                                <option label="Pilih Bank"></option>
                                @foreach($banks as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="col-md-2 control-label">Jumlah Pinjaman</label> 
                                    <div class="col-md-10">
                                        <input type="text" name="loan_amount" id="example-input3-group1" data-a-sign="Rp " name="pinjaman" class="form-control autonumber" placeholder=".."> 
                                        <span class="font-13 text-muted">Rupiah</span>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="col-md-2 control-label">Jangka Waktu</label> 
                                <div class="col-md-10">
                                    <select class="form-control" name="range_time">
                                        <option value="10 Tahun">10 Tahun</option>
                                        <option value="11 tahun">11 Tahun</option>
                                        <option value="12 Tahun">12 Tahun</option>
                                        <option value="13 Tahun">13 Tahun</option>
                                        <option value="14 Tahun">14 Tahun</option>
                                    </select> 
                                </div>
                            </div>
</div>
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label for="field-2" class="col-md-2 control-label">Bunga</label> 
                                <div class="col-md-4">
                                <select class="form-control" name="bank_interest">
                                    <option value="6,75%">6,75%</option>
                                    <option value="5%">5%</option>
                                    <option>3%</option>
                                    <option>4%</option>
                                    <option>5%</option>
                                </select>
</div>
                            </div>
                            <div class="form-group">
                                <label for="field-3" class="col-md-2 control-label">Angsuran</label> 
                                <input type="text" class="form-control autonumber" data-a-sign="Rp " name="installment" id="field-3"> 
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