  @extends('layouts.index')

  @section('contents')
  <!--Template slider start-->
   <div id="slider">
     <div class="item">
      <img src="images/slider-3.jpg" alt="The Last of us" class="img-responsive">
      <div class="container">
        <div class="row">
          <div class="col-md-6 slider-caption"><!-- slider caption-->
            <h1>Perumahan KOTA RAYA</h1>
            <p>Cluster 52 Kaveling, Lingkungan asri, Kualitas Real estate.</p>
            <a href="index.php?page=perumahan" class="btn tp-btn tp-btn-orange">Cek Sekarang</a> </div>
            <!-- /.slider caption--> 
          </div>
        </div>
      </div>
      <div class="item">
        <img src="images/slider-3.jpg" alt="Mirror Edge" class="img-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-6 slider-caption"><!-- slider caption-->
              <h1>Perumahan Kalma Raya</h1>
              <p></p>
              <a href="#" class="btn tp-btn tp-btn-orange">Wujudkan Rumah Impian anda</a> </div>
              <!-- /.slider caption--> 
            </div>
          </div>
        </div>

      </div>

      <!-- /.Select option close-->
      <div id="tp-product" class="tp-product section-space"><!-- Products start-->
        <div class="container">
          <div class="row">
            <div class="col-md-12 tp-title"><!-- section title-->
              <h1>Produk Kami</h1>
            </div>
            <!-- /.section title-->
          </div>
          <div id="product">
          @foreach($lots as $value)
            <div class="col-md-12 product-thumb item"> <!-- Product thumb-->
              <div class="grey-box">
              <h2><a href="#">Kaveling {{$value->blok}}</a></h2>
              <p style="color: #06502D">Perumahan {{$value->housing->name}}</p>
              <span class="icon"><i class="fa fa-home"></i></span>
            </div>
            </div>
           @endforeach
          </div>

        </div>
      </div>
@endsection