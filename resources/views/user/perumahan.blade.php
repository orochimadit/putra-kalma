@extends('layouts.index')

@section('contents')
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-blog" id="tp-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8 tp-blog-left">
          <div class="row">
            
         
              <div class="col-md-12 tp-blog-post"><!-- blog post start-->
                <h1><a href="#"> {{$housing->name}} </a></h1>
                <p class="meta"> <span class="meta-date"><i class="fa fa-calendar"></i>Berdiri sejak May 10, 2017</span></p>
                <a href="#"><img src="{{asset('storage/'.$housing->image)}} " alt="gagal load" class="img-responsive"></a>
                <p>Wujudkan Rumah Impian Anda</p>
                <a href="{{route('kaveling',$housing->id)}}" class="btn tp-btn tp-btn-blue">Pilih Kaveling</a>
              </div>
            

            <div class="col-md-12 tp-pagination"><!-- pagination -->
              <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
              </ul>
            </div><!-- pagination -->
          </div>
        </div>
        <div class="col-md-4 tp-blog-right"><!-- tp blog right -->
          <div class="row">
            <div class="col-md-12">
              <div class="widget search-widget"><!--search widget start-->
                <h2 class="widget-title">Search</h2>
                <div class="input-group"><!-- search input start -->
                  <input type="search" id="search" name="cari" class="form-control" placeholder="Cari perumahan">
                  <input type="submit" name="submit" class="hidden">
                  <span class="input-group-btn">
                    <button class="btn btn-search" type="button"><i class=" fa fa-search "></i></button>
                  </span> </div>
                  <!-- search input end --> 
                </div>
                <!--search widget end--> 
              </div>
              <div class="col-md-12">
                <div class="widget archive-widget"><!--Categories widget start-->
                  <h2 class="widget-title">Proyek Purna</h2>
                  <ul class="angle-double-right">
                    <li> <a href="#">2015-2016</a></li>
                    <li> <a href="#">2017-2019</a></li>
                  </ul>
                </div>
                <!--Categories widget end--> 
              </div>

              <div class="col-md-12">
                <h2 class="widget-title">Perumahan Terbaru</h2>
             
                  <div class="widget recent-post-widget"><!--Recent post widget start-->

                    <ul>
                      <li>
                        <div class="small-tumbnail"><a href="#"><img src="{{asset('storage/'.$housing->image)}} " alt=""> </a></div>
                        <h3 class="recent-title"><a href="#"> {{$housing->name}} </a></h3>
                        <span class="meta-date"><i class="fa fa-calendar"></i>10 May, 2016</span> 
                      </li>

                    </ul>
                  </div>

              </div>
              <div class="col-md-12">
                <div class="widget tags-widget"><!--Tags widget start-->
                  <h2 class="widget-title">Tags</h2>
                  <a href="#" class="btn tp-btn tp-btn-grey">simple</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">car</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">home</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">life</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">business</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">travel</a>
                  <a href="#" class="btn tp-btn tp-btn-grey">other</a> </div>
                </div>
              </div>
            </div>
            <!-- /.tp blog right --> 
          </div>
        </div>
      </div>
    </div>

@endsection