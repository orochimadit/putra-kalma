@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

          <a href="{{route('lots.create')}}" class="btn btn-default waves-effect waves-light"><span class="m-l-5"><i class="fa fa-plus"></i></span> Tambah</a>


        </div>

        <h4 class="page-title">Data Transaksi Penjualan</h4>
        <ol class="breadcrumb">
          <li><a href="#">PT. Putra Kalma Raya</a></li>
          <li><a href="#">Data Transaksi</a></li>
          <li class="active">Data Penjualan</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Perumahan</b></h4>
          @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('message') }}
        </div>
          @endif

        <table id="datatable" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              
              <th>Pembeli</th>
              <th>Perumahan</th>
              <th>Kaveling</th>
              <th>Tipe Pembayaran</th>
              <th>Tanggal Transaksi</th>
              <th>ktp</th>
              <th>npwp</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
          @foreach($sales as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                
                <td>{{ $value->user->name }}</td>
                <td>{{ $value->housing->name }}</td>
                <td>{{ $value->lot->blok }}</td>
                <td>{{ $value->payment_type}}</td>
                <td>{{ $value->transaction_date }}</td>
                <td>
                <a href="{{asset('storage/'.$value->ktp)}}" class="image-popup" title="Screenshot-4">
                  <img src="{{asset('storage/'.$value->ktp)}}" class="thumb-sm" alt="work-thumbnail">
                  </a>  </td>
                <td><a href="{{asset('storage/'.$value->npwp)}}" class="image-popup" title="Screenshot-4">
                  <img src="{{asset('storage/'.$value->npwp)}}" class="thumb-sm" alt="work-thumbnail">
                  </a></td>
                <td>{{ $value->status }}</td>
                <td>
                  <form action="{{route('sales.destroy',$value->id)}}"  method="POST">
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


</div> <!-- container -->
</div>

<div id="edit-modal-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection