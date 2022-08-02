@extends('admin.layouts.app')

@section('contents')
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modals-bank"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Tambah</button>

          
        </div>

        <h4 class="page-title">Data Bank</h4>
        <ol class="breadcrumb">
          <li><a href="#">PT. Putra Kalma Raya</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Data Bank</li>
        </ol>
      </div>
    </div>
    @livewire('banks')
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