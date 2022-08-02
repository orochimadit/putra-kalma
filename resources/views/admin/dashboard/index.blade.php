@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

        </div>

        <h4 class="page-title">Home</h4>
        <p class="text-muted page-title-alt">Halaman Admin Sistem Informasi Pemasaran Perumahan</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md md-home text-primary"></i>
        
          <h2 class="m-0 text-dark counter font-600">70</h2>
          <div class="text-muted m-t-5">Total<br>Perumahan</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md md-view-quilt text-pink"></i>
        
          <h2 class="m-0 text-dark counter font-600">60</h2>
          <div class="text-muted m-t-5">Total<br>Kaveling</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md  md-done-all text-info"></i>
        
          <h2 class="m-0 text-dark counter font-600">70</h2>
          <div class="text-muted m-t-5">Kaveling<br>Terjual</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md   md-file-download
          text-custom"></i>
          
          <h2 class="m-0 text-dark counter font-600">66</h2>
      
          <div class="text-muted m-t-5">Pengajuan <br>Masuk</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Statistik Penjualan</b></h4>
          <div class="table-responsive">
            <table class="table table-actions-bar">
              <thead>
                <tr>
                  <th>Nama Akun</th>
                  <th>Jumlah</th>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Transaksi Masuk</td>
                  
                  <td><span class="label label-success">55</span></td>
                 

                </tr>
                <tr>
                  <td>Total Kaveling</td>
                 
                  <td><span class="label label-success">55</span></td>
                
                </tr>
                <tr>
                  <td>Total Perumahan</td>
                  
                  <td><span class="label label-success">66</span></td>
               

                </tr>
                <tr>
                  <td>Kaveling Terjual</td>
                  
                  <td><span class="label label-success">56</span></td>
                  

                </tr>
                <tr>
                  <td>Jumlah Admin</td>
                 
                  <td><span class="label label-success">44</span></td>
                 
                </tr>
                <tr>
                  <td>Jumlah Konsumen Terdaftar</td>
                 
                  <td><span class="label label-success">55</span></td>
                 

                </tr>
                <tr>
                  <td>Transaksi KPR</td>
                
                  <td><span class="label label-success">33</span></td>
                  

                </tr>
                <tr>
                  <td>Transaksi Cash</td>
                   
                  <td><span class="label label-success">23</span></td>
                 

                </tr>

              </tbody>
            </table>
          </div>


        </div>
      </div>

      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->
  @push('script')
  <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
  <script src="assets/pages/jquery.flot.init.js"></script>
@endpush

@endsection