@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

          <a href="{{route('kprs.create')}}" class="btn btn-default waves-effect waves-light"><span class="m-l-5"><i class="fa fa-plus"></i></span> Tambah</a>


        </div>

        <h4 class="page-title">Data KPR</h4>
        <ol class="breadcrumb">
          <li><a href="#">PT. Putra Kalma Raya</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Data KPR</li>
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
              <th>Bank</th>
              <th>Jumlah Pinjaman</th>
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


</div> <!-- container -->
</div>

<div id="edit-modal-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection