
@extends('layouts.index')

@section('contents')
<div class="tp-breadcrumb"><!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb"><!-- breadcrumb -->
          <li><a href="index.html">PT. Putra Kalma Raya</a></li>
          <li class="active">Akun</li>
        </ol><!-- /.breadcrumb -->
      </div>
    </div>
  </div>
</div><!-- /.breadcrumb -->

<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-agent-detail" id="tp-agent-detail"><!-- agent detail section -->
  	<div class="container">
     <div class="row agent-detail">
     
      <div class="col-md-4">
       <img src="{{asset('images/avatar-profil.png')}}" class="img-responsive" alt="">
     </div>
     <div class="col-md-8">
       <div class="row">
         <div class="col-md-12">
           <h1>{{Auth::user()->name}}</h1>
         </div>
         <div class="col-md-6">

           <div class="detail-block"><!-- detail block -->
            <h3><i class="fa fa-map-marker"></i>Alamat</h3>
            <ul>
             <li>{{Auth::user()->address}}</li>
           </ul>
         </div><!-- /.detail block -->

         <img src="" alt="">

         <div class="detail-block"><!-- detail block -->
          <h3><i class="fa fa-envelope"></i> E-mail</h3>
          <p><a href="#">{{Auth::user()->email}}</a></p>
        </div><!-- /.detail block -->
      </div>

      <div class="col-md-6">
       <div class="detail-block num-block"><!-- detail block -->
        <ul>
         <li><i class="fa fa-phone"></i>{{Auth::user()->phone_number}}</li>
       </ul>
     </div><!-- /.detail block -->

     <div class="contact-block"><!-- detail block -->
      <a href="modal-edit-prof.php?id=#" data-toggle="modal" data-target="#modals-profil" class="btn btn-block tp-btn tp-btn-orange">Perbarui Profil</a>
    </div><!-- /.detail block -->

  </div>
</div>
</div>
</div>
<div class="tp-accordion" id="tp-accordion"><!-- tp accordion start-->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-accordion-one"><!--tp-accordion-one-->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!--panel-group-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingOne"><!--panel-heading-->
              <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pembelian Saya</a> </h>
              </div><!--/.panel-heading-->
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"><!--panel-collapse collapse in-->
                <div class="panel-body"><!--panel-body-->
                  <h2>Data Pembelian</h2>
                  <div class="col-md-12"><!-- search form -->
                    <form class="">
                      <div class="card-box table-responsive">
                        <table id="" class="table table-striped table-bordered datatable-buttons">
                          <thead>
                            <tr>
                             
                              <th>No Pembelian</th>
                              <th>Nama Pembeli</th>
                              <th>Perumahan</th>
                              <th>Blok Kaveling</th>
                              <th>Tanggal Pembelian</th>
                              <th>Harga Kaveling</th>
                              <th>Jenis Pelunasan</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($sale as $value)
                           <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->user->name}}</td>
                            <td>{{$value->housing->name}}</td>
                            <td>{{$value->lot->blok}}</td>
                            <td>{{$value->transaction_date}}</td>
                            <td>Rp. {{$value->lot->price}}</td>
                            <td>{{$value->payment_type}}</td>
                            <td>{{$value->status}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                &nbsp; &nbsp;
                <a href="{{route('bayar')}}"  name="tambah" class="btn  tp-btn tp-btn-blue">Pembayaran</a>
             
                <a href="{{route('home')}}"  name="tambah" class="btn  tp-btn tp-btn-blue">Batal</a>

              </div><!--panel-body-->
            </div><!--/.panel-collapse collapse in-->
          </div><!--/.panel panel-default-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingTwo"><!--panel-heading-->
              <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Riwayat Pembayaran</a> </h3>
            </div><!--/.panel-heading-->
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body"> 
                <h2>Data Pembayaran</h2>
                <div class="col-md-12"><!-- search form -->
                  <form class="">
                    <div class="card-box table-responsive">
                      <table id="" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No Pembayaran</th>
                            <th>No Transaksi</th>
                            <th>Jenis bayar</th>
                            <th>jumlah Bayar</th>
                            <th>Tanggal Transfer</th>
                            <th>Bank Tujuan</th>
                            <th>Bukti Transfer</th>
                            <th>Status</th>
                            <th>Detail</th>
                          </tr>
                        </thead>
                        <tbody>

                          
                              <tr>
                                <td>No pembayaran</td>
                                <td>No transaksi</td>
                                <td>Jenis Bayar</td>
                                <td>Rp.Jumlah Bayar</td>
                                <td>Tanggal Transfer</td>
                                <td>Nama Bank</td>
                                <td>
                                  <a href="admin/assets/images/dokumen/#" class="image-popup" "email me">bukti transfer
                                  
                                </a>
                              </td>
                              <td>Status</td>
                              <td><a href="kwitansi.php?id=#">Kwitansi</a></td>
                            </tr>
                            
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>

            </div><!--/.panel-body-->
          </div>
        </div><!--/.panel panel-default-->
        <div class="panel panel-default"><!--panel panel-default-->
          <div class="panel-heading" role="tab" id="headingThree"><!--panel-heading-->
            <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Progres Pembangunan</a> </h3>
          </div><!--/.panel-heading-->
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body"> 
             <h2>Data Progres</h2>
             <div class="col-md-12"><!-- search form -->
              <div class="card-box table-responsive">
                <table id="" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID Progres</th>
                      <th>Realisasi</th>
                      <th>Target Selesai</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                        <tr>
                          <td>1</td>
                          <td>Mulai pembangunan</td>
                          <td>20-10-2022</td>
                        </tr>

                        <div class="row">
                          <div class="col-md-6">
                            <label class="control-label" for="lastname">Tanggal Progres</label>
                            <h3>20-10-2022</h3>
                          </div>
                          <div class="col-md-3">
                            <label class="control-label" for="firstname" class="btn tp-btn-blue">Tahap</label>
                            <h2>Tahap 3</h2>
                          </div>
                          <div class="col-md-3">
                            <label class="control-label" for="firstname" class="btn tp-btn-blue">Persentase Progres</label>
                            <h2>50 %</h2>
                          </div>
                        </div>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!--/.panel-body-->
          </div>
        </div><!--/.panel panel-default-->
      </div><!--/.panel-group-->
    </div><!--/.tp-accordion-one-->
  </div>
</div>
</div><!-- /.tp accordion start-->

</div><!-- agent detail section --> 
</div> <!-- section --> 
</div>
<div id="modals-bayar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modals-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modals-profil" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@push('script')
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/datepicker.js')}}"></script>
@endpush