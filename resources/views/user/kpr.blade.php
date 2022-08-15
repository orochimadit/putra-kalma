@extends('layouts.index')

@section('contents')
<div class="tp-breadcrumb"><!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.html">PT. Putra Kalma Raya</a></li>
          <li class="active">KPR</li>
        </ol>
      </div>
      </div>
    </div>
  </div>
  <!-- /.breadcrumb -->
  <div class="main-container" id="main-container"> 
    <!--Main container start-->
    <div class="tp-career-form" id="tp-career-form"><!--career-form-->
      <div class="container">

        <div class="row" ng-controller="CalculatorController">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <!-- <a href="#" data-toggle="modal" data-target="#con-close-modal" class="btn tp-btn tp-btn-blue">Kalkulator KPR</a> -->
              <h4 class="m-t-0">

                
              </h4>
              
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID KPR</th>
                  <th>Bank</th>
                  <th>Jumlah Pinjaman</th>
                  <th>Jangka Waktu</th>
                  <th>Bunga</th>
                  <th>Angsuran</th>
                  <th>Aksi</th>
                </tr>
              </thead>



              <tbody>
               
              @foreach($kprs as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                
                <td>{{ $value->bank->name }}</td>
                <td>{{ $value->loan_amount }}</td>
                <td>{{ $value->range_time }}</td>
                <td>{{ $value->bank_interest }}</td>
                <td>{{ $value->installment }}</td>
                <td>
                  <a id="edit-data" name="ubah" href="{{route('kprs.edit',$value->id)}}"  class="table-action-btn"><i class="md md-edit"></i></a>
                  <form action="{{route('kprs.destroy',$value->id)}}"  method="POST">
                                  @csrf
                                  @method('DELETE')
                        <button class="btn-danger" type="submit" class="dropdown-item" onclick="return confirm('Hapus Data?')"><i class="md md-close"></i></button>       
                  </form>
   
                </td>
            </tr>
            @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--/.career-form--> 
</div>
@endsection