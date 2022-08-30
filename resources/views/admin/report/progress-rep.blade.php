@extends('admin.layouts.app')

@section('contents')
<table id="" class="table table-striped table-bordered datatable">
  <div class="dt-buttons btn-group">
    <a href="javascript:window.print()" class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><i class="fa fa-print"></i> Cetak</a>
  </div>
  <br><br>
  <thead>
    <tr>
    <th>No</th>
            <th>ID Progres</th>
            <th>Tahap</th>
            <th>No Penjualan</th>
            <th>Nama Konsumen</th>
            <th>Realisasi</th>
            <th>Target Selesai</th>
            <th>Persentase Progres</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($developmentProgress as $value)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$value->id}}</td>
              <td>{{$value->step}}</td>
              <td>{{$value->sale_id}}</td>
              <td>{{$value->user->name}}</td>
              <td>{{$value->step}}</td>
              <td>{{$value->target_completed}}</td>
              <td><span class="label label-success">{{$value->progress}} %</span></td>
            </tr>
        @endforeach

  </tbody>
</table>

@endsection