@extends('layouts.index')

@section('contents')
<div class="tp-breadcrumb">
    <!--tp-breadcrumb-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">PT. Putra Kalma Raya</a></li>
                    <li class="active">Detail Pengajuan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/.tp-breadcrumb-->

<div class="main-container" id="main-container">
    <!--Main container start-->
    <div class="tp-accordion" id="tp-accordion">
        <!-- tp accordion start-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 tp-accordion-one">
                    <!--tp-accordion-one-->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <!--panel-group-->
                        <div class="panel panel-default">
                            <!--panel panel-default-->
                            <div class="panel-heading" role="tab" id="headingOne">
                                <!--panel-heading-->
                                <h1 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Detail Pengajuan</a>
                                </h1>
                            </div>
                            <!--/.panel-heading-->
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <!--panel-collapse collapse in-->
                                <div class="panel-body">
                                    <!--panel-body-->

                                    <form class="form" method="post" action="care">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">Perumahan</label>
                                                <h2 style="color: #06502D;">{{$lot->housing->name}}</h2>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="email">Blok Kaveling</label>
                                                <h1 style="color: #06502D;">{{$lot->blok}}</h1>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="city">Type</label>
                                                <h1 style="color: #06502D;">70</h1>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="state">Harga</label>
                                                <h3 style="color: #06502D;">Rp {{$lot->price}}</h3>
                                            </div>
                                        </div>
                                        

                                        

                                    </form>

                                </div>
                                <!--panel-body-->
                            </div>
                            <!--/.panel-collapse collapse in-->
                        </div>
                        <!--/.panel panel-default-->
                        <div class="panel panel-default">
                            <!--panel panel-default-->
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <!--panel-heading-->
                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lengkapi Persyaratan</a> </h3>
                            </div>
                            <!--/.panel-heading-->

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                                <div class="panel-body">
                                    <form action="{{route('pengajuanStore')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="firstname" name="lot_id"  value="{{$lot->id}}" class="form-control" placeholder="">
                                    <input type="hidden" id="firstname" name="user_id"  value="{{auth()->user()->id}}" class="form-control" placeholder="">
                                    <input type="hidden" id="firstname" name="housing_id"  value="{{$lot->housing->id}}" class="form-control" placeholder="">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">Nama Lengkap</label>
                                                <input type="text" id="firstname" value="{{auth()->user()->name}}" name="name" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">Tanggal Pembelian</label>
                                                <input type="text" id="firstname" value="{{$date}}" readonly="" name="date" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">No. Telp</label>
                                                <input type="text" id="firstname" name="phone"  value="{{auth()->user()->phone_number}}" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">Jenis Pelunasan</label>
                                                <select class="form-control" name="payment_type">
                                                    <option value="Cash">Cash Bertahap</option>
                                                    <option value="KPR">KPR</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="lastname">Alamat</label>
                                                <textarea name="address" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="firstname">Lampiran Scan KTP</label>
                                                <input type="file" id="file" name="ktp" class="filestyle" data-buttonbefore="true" data-input="false">
                                                <label class="control-label" for="firstname">Lampiran Scan NPWP</label>
                                                <input type="file" name="npwp" id="npwp" class="filestyle" data-buttonbefore="true" data-input="false">
                                            </div>
                                        </div>

                                        <div class="h5 m-0">
                                            <div class="form-group text-right">
                                                <button type="submit" name="tambah" class="btn  tp-btn tp-btn-blue">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.panel-group-->
            </div>
            <!--/.tp-accordion-one-->
        </div>
    </div>
</div><!-- /.tp accordion start-->
</div>
<!-- /.Main container start-->

@endsection