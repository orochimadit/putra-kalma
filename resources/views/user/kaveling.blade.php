@extends('layouts.index')

@section('contents')
<div class="main-container" id="main-container"><!--Main container start-->
      <div class="tp-tabs font-increase" id="tp-tabs"><!-- tabs -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 tabs-one"><!-- tab one -->
              <div role="tabpanel"> <!-- Tab panel -->

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tabs-one" aria-controls="tabs-one" role="tab" data-toggle="tab">Site Plan</a></li>
                  <li role="presentation"><a href="#tabs-two" aria-controls="tabs-two" role="tab" data-toggle="tab">Spesifikasi Teknis</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content"><!-- Tab content -->
                  <div role="tabpanel" class="tab-pane active" id="tabs-one"><!-- Tab panel -->
                    <h2>{{$housing->name}}</h2>

                    <img class="img-responsive" src="{{asset('storage/'.$housing->image)}}" alt="">

                  </div><!-- /.Tab panel -->
                  <div role="tabpanel" class="tab-pane" id="tabs-two"><!-- Tab panel -->
                    <h2>Spesifikasi Teknis.</h2>
                    <p></p>
                    <a href="#" class="btn tp-btn tp-btn-orange">Get A Quote</a>
                  </div><!-- /.Tab panel -->
                </div><!-- /.Tab content -->
              </div><!-- /.tab panel -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.tabs --> 
      <br>
      <form action="transaksi-act.php" method="get" accept-charset="utf-8">
        <div class="tp-product-page font-increase" id="tp-product-page">
          <div class="container">
           <div class="row" ng-controller="CalculatorController">
            <img src="" alt="">
            @foreach($lots as $value)
               <!-- /.section title-->
               <div class="col-md-3 product-thumb"> <!-- Product thumb-->
                <div class="grey-box">
                  <h1><a href="auto-insurance.html">{{$value->blok}}</a></h1>
                  <p>Tipe {{$value->type}}</p>
                  <p>Rp.{{$value->price}}</p>
                    <div class="form-group">
                    <a href="{{route('pengajuan',$value->id)}}" class="btn tp-btn tp-btn-orange">Proses</a>
                    <br><br>
                    <a href="#" data-toggle="modal" data-target="#con-close-modal" id="#" class="btn tp-btn tp-btn-blue">Hitung KPR</a>
                    </div>
                  <h3 style="color: red;">Terjual</h3>
                    <br>
                    <br>

                </div>
              </div>
            @endforeach
          <!-- /.Product thumb-->
        </div>
      </div>
    </div>

  </form>
</div>
<!-- /.Main container start-->

<div id="ajukan-kaveling" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection