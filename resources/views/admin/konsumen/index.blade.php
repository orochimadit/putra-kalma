@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

          <a href="{{route('konsumen.create')}}" class="btn btn-default waves-effect waves-light"><span class="m-l-5"><i class="fa fa-plus"></i></span> Tambah</a>


        </div>

        <h4 class="page-title">Data KPR</h4>
        <ol class="breadcrumb">
          <li><a href="#">PT. Putra Kalma Raya</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Data Konsumen</li>
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
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
          @foreach($users as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>
                  <a id="edit-data" name="ubah" href="{{route('konsumen.edit',$value->id)}}"  class="table-action-btn"><i class="md md-edit"></i></a>
                  <form action="{{route('konsumen.destroy',$value->id)}}"  method="POST">
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



@endsection