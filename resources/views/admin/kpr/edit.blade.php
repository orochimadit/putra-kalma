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


                    <form action="{{route('kprs.update',$kpr->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Bank:</label>
                                <div class="col-md-4">
                                    <select name="bank_id" class="form-control select2-show-search" data-placeholder="Pilih bank">
                                        <option label="Pilih Bank"></option>
                                        @foreach($banks as $item)
                                        <option value="{{$item->id}}" {{$kpr->bank_id == $item->id  ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('bank_id') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="col-md-2 control-label">Jumlah Pinjaman</label>
                                    <div class="col-md-10">
                                        <input type="text" name="loan_amount" value="{{$kpr->loan_amount}}" id="example-input3-group1" data-a-sign="Rp " name="pinjaman" class="form-control autonumber" placeholder="..">
                                        <span class="font-13 text-muted">Rupiah</span>
                                    </div>
                                    @error('loan_amount') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="col-md-2 control-label">Jangka Waktu</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="range_time">
                                            <option value="10 Tahun" {{$kpr->range_time == "10 Tahun"  ? 'selected' : ''}}>10 Tahun</option>
                                            <option value="11 tahun" {{$kpr->range_time == "11 Tahun"  ? 'selected' : ''}}>11 Tahun</option>
                                            <option value="12 Tahun" {{$kpr->range_time == "12 Tahun"  ? 'selected' : ''}}>12 Tahun</option>
                                            <option value="13 Tahun" {{$kpr->range_time == "13 Tahun"  ? 'selected' : ''}}>13 Tahun</option>
                                            <option value="14 Tahun" {{$kpr->range_time == "14 Tahun"  ? 'selected' : ''}}>14 Tahun</option>
                                            <option value="15 Tahun" {{$kpr->range_time == "15 Tahun"  ? 'selected' : ''}}>15 Tahun</option>
                                            <option value="25 Tahun" {{$kpr->range_time == "25 Tahun"  ? 'selected' : ''}}>25 Tahun</option>
                                        </select>
                                    </div>
                                    @error('range_time') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-horizontal">
                            <div class="form-group">
                                <label for="field-2" class="col-md-2 control-label">Bunga</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="bank_interest">
                                        <option value="6,75%" {{$kpr->bank_interest == "6,75%"  ? 'selected' : ''}}>6,75%</option>
                                        <option value="3%" {{$kpr->bank_interest == "3%"  ? 'selected' : ''}}>3%</option>
                                        <option value="4%"{{$kpr->bank_interest == "4%"  ? 'selected' : ''}}>4%</option>
                                        <option value="5%" {{$kpr->bank_interest == "5%"  ? 'selected' : ''}}>5%</option>
                                    </select>
                                </div>
                                @error('bank_interest') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="field-3" class="col-md-2 control-label">Angsuran</label>
                                <input type="text" class="form-control autonumber" data-a-sign="Rp " value="{{$kpr->installment}}" name="installment" id="field-3">
                                @error('installment') <span class="text-danger error">{{ $message }}</span>@enderror
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