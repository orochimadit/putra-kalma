@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="page-title">Data Progres Pembangunan</h4>
        <ol class="breadcrumb">
          <li><a href="#">PT. Putra Kalma Raya</a></li>
          <li class="active">Data Progres Pembangunan</li>
        </ol>
        
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Masukan Progres Pembangunan</b></h4>
          <p class="text-muted m-b-30 font-13"></p>
          <form action="{{route('development-progress.store')}}" method="post">
            <div class="row">
              <div class="col-md-6 form-horizontal">   
             
             <div class="form-group">
              <label class="col-sm-2 control-label">Tahap Progres</label>
              <div class="col-md-8">
                <select name="step" class="form-control"> 
                  <option value="Pekerjaan pondasi">Pekerjaan pondasi</option>
                  <option value="Pekerjaan stuktur">Pekerjaan stuktur</option>
                  <option value="Pekerjaan dinding">Pekerjaan dinding</option>
                  <option value="Pekerjaan kusen, pintu, dan jendela">Pekerjaan kusen, pintu, dan jendela</option>
                  <option value="Pekerjaan rangka atap">Pekerjaan rangka atap</option>
                  <option value="Pekerjaan plumbling, mekanikal dan elektrikal">Pekerjaan plumbling, mekanikal dan elektrikal</option>
                  <option value="Pekerjaan Finising">Pekerjaan Finishing</option>

                </select>
              </div>
            </div>                                 
            <div class="form-group">
              <label class="col-sm-2 control-label">No Penjualan</label>
              <div class="col-md-8">
                <select name="sale_id" class="form-control">
                  <option value="0">Pilih Data</option>
                  @foreach($sales as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Konsumen</label>
              <div class="col-md-8">
                <select name="user_id" class="form-control">
                  <option value="0">Pilih Data</option>
                
                  @foreach($users as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Tanggal Progres</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="tanggal" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
          </div>

          <div class="col-md-6 form-horizontal">

            <div class="form-group">
              <label class="control-label col-sm-2">Target Selesai</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="target" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
            <div class="form-group">
              <label for="range_01" class="col-sm-2 control-label">Progres</label>
              <div class="col-sm-8">
                <input type="text" name="progress" class="range_01">
              </div>
            </div>                                     
            <div class="form-group">
              <label class="control-label col-sm-2">Realisasi</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="realisasi" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
          </div>
        </div>
        <div class="h5 m-0">
          <div class="form-group text-right">     
            <button type="submit" name="tambah" class="btn btn-purple waves-effect waves-light">SIMPAN</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
</div>


<div class="row">
  <div class="col-sm-12">
    <div class="card-box table-responsive">
      <h4 class="m-t-0 header-title"><b>Data Progres</b></h4>
      <p class="text-muted font-13 m-b-30">

      </p>

      <table id="datatable" class="table table-striped table-bordered">
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
            <th>Tanggal Progres</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($developmentProgress as $value)
            <tr>
              <td>1</td>
              <td>1</td>
              <td>{{$value->step}}</td>
              <td>{{$value->sale_id}}</td>
              <td>{{$value->user_id}}</td>
              <td>{{$value->step}}</td>
              <td>{{$value->target_completed}}</td>
              <td><span class="label label-success">{{$progress->progress}} %</span></td>
              <td>{{$value->progress_date}}</td>
              <td>
                <a href=""> class="btn btn-success waves-effect waves-light" data-target="#edit-progres" data-toggle="modal"><i class="md md-border-color"></i></a>
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
<div id="edit-progres" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection