
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>Detail</title>

  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>

</head>
<?php
                  $value = session()->get('sale');
                  ?>
<body class="fixed-right">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-body">
          <div class="clearfix" style="">
            <div class="pull-left">
              <h4 class="text-right"><img src="{{asset('admin/assets/images/logo-rep.png')}}" alt="velonic"></h4>
            </div>
            <div class="pull-right">
              <div class="pull-right">
                <h4>Invoice # <br>
                  <strong>{{$value->transaction_date}}</strong>
                </h4>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">

              <div class="pull-left m-t-30">
                <address>
                  <strong>Nama Pembeli</strong><br>
                 {{$value->name}}<br>
                
                  
                </address>
              </div>
              <div class="pull-right m-t-30">
                <p><strong>Tanggal Pengajuan: </strong>  {{$value->date}}</p>
                <p class="m-t-10"><strong>Status: </strong> <span class="label label-warning"> {{$value->status}}</span></p>
                <p class="m-t-10"><strong>ID Pembelian: </strong> # {{$value->id}}</p>
              </div>
            </div>
          </div>
          <div class="row">
             <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table m-t-30">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kaveling</th>
                        <th>Perumahan</th>
                        <th>Harga</th>
                        <th>Jenis Pelunasan</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td> {{$value->lot->blok}}</td>
                          <td> {{$value->housing->name}}</td>
                          <td> {{$value->lot->price}}</td>
                          <td> {{$value->payment_type}}</td>
                          <td> {{$value->lot->price}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <br> <div class="row" style="border-radius: 0px;">
                <div class="col-md-3 col-md-offset-9">
                  <p class="text-right"><b>Total:</b> Rp.{{$value->lot->price}}</p>
                  <p class="text-right">Uang Muka min: 30%  Rp. {{$value->lot->price}}</p>
                </div>
              </div>
              <hr>
              <div class="hidden-print">
                <div class="pull-right">
                  <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print"></i> Cetak </a>
                  <a href="{{route('akun')}}" class="btn btn-primary waves-effect waves-light"><i class="fa fa-money"></i> Lanjut Pembayaran </a>
                </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </div> <!-- container -->

  </div> <!-- content -->
  <script>
    var resizefunc = [];
  </script>
{{asset('admin/assets/css/bootstrap.min.css')}}
  <!-- jQuery  -->
  <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/detect.js')}}"></script>
  <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
  <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
  <script src="{{asset('admin/assets/js/waves.js')}}"></script>
  <script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
  <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>


  <script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
  <script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>

</body>
</html>