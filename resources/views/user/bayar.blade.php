
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

<form action="{{route('bayarStore')}}" method="post" enctype="multipart/form-data">

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h1>Form Pembayaran.</h1>
</div>
<div class="modal-body">
  <form action="{{route('bayarStore')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="row">
    
    <div class="col-md-6">
      <label class="control-label" for="lastname">Transaksi</label>
      <select class="form-control" id="pelunasan" name="sale_id">
        
      <option value="">pilih Nomor Transaksi</option>
        @foreach($sale as $value)
        <option value="{{$value->id}}">{{$value->id}}</option>
        @endforeach
      </select>
   </div>
   
<div class="col-md-6">
  <label class="control-label" for="lastname">Bank Tujuan</label>
  <select class="form-control" id="pelunasan" name="bank_id">
    <option value="Cash">pilih Bank Tujuan</option>
    <option value="KPR">BRI</option>
    <option value="KPR">BNI</option>
    <option value="KPR">Mandiri</option>
  </select>
</div>  

 </div>
 <div class="row">
  <div class="col-md-6">
   <label class="control-label" for="lastname">Tanggal Transfer</label>
   <div class="input-group">
    <input type="text" name="date" class="form-control datepicker-autoclose">
    <span class="input-group-addon bg-custom b-0 text-white" style="background-color: #ff7841; color: #fff;"><i class="icon-calender"></i></span>
  </div>
</div>
<div class="col-md-6">
  <label class="control-label" for="lastname">Jenis Bayar</label>
  <select class="form-control" name="pay_type" onchange="">

   <option value="Uang Muka" id="uang">Uang Muka</option>
      <option value="Angsuran 1 (Cash)">Angsuran 1 (Cash)</option>
      <option value="Angsuran 2 (Cash)">Angsuran 2 (Cash)</option>
      <option value="Angsuran 3 (Cash)">Angsuran 3 (Cash)</option>
      <option value="Angsuran 4 (Cash)">Angsuran 4 (Cash)</option>
      <option value="Angsuran 5 (Cash)">Angsuran 5 (Cash)</option>
      <option value="Angsuran 6 (Cash)">Angsuran 6 (Cash)</option>
      <option value="Angsuran 7 (Cash)">Angsuran 7 (Cash)</option>
      <option value="Angsuran 8 (Cash)">Angsuran 8 (Cash)</option>
      <option value="Angsuran 9 (Cash)">Angsuran 9 (Cash)</option>
      <option value="Angsuran 10 (Cash)">Angsuran 10 (Cash)</option>
      <option value="Angsuran 11 (Cash)">Angsuran 11 (Cash)</option>
      <option value="Angsuran 12 (Cash)">Angsuran 12 (Cash)</option>
        <option value="Cash">Uang Muka</option>

  </select>

  <script>
    function tampilkan(){
      var cek;
      if(nominal.value < harus.value){
        cek = false;
        alert("Uang Muka Minimal 30% dari harga kaveling");
        nominal.focus();
      }else{
        cek = true;
      }return cek;
    }
  </script>


</div>
</div>
<div class="row">
<div class="col-md-6">
  <label class="control-label" for="lastname">Nominal Transfer</label>
  <input type="number" id="nominal" name="amount" class="form-control">
</div>

<input type="hidden" value="" readonly="" name="harus" id="harus" class="form-control">
<div class="col-md-6">
  <label class="control-label" for="firstname" class="btn tp-btn-blue">Lampirkan Bukti Transfer</label>
  <input type="file" id="bukti" style="color: #ff7841 " name="proof" class="filestyle" data-buttonbefore="true" data-input="false">
</div> 
</div>


<br>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
<button type="submit" onclick="return tampilkan()" name="tambah" class="btn  tp-btn tp-btn-blue">Submit</button>
</div>
</form>

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