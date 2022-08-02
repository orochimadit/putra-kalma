@extends('admin.layouts.app')

@section('contents')
<form action="proses-bank.php" method="post" enctype="multipart/form-data">
    <div id="modals-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                    <h4 class="modal-title">Tambah Bank</h4> 
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                      
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Nama Bank</label> 
                            <input type="text" name="nama_bank" class="form-control" id="field-1">
                        </div> 
                    </div> 
                </div> 
        </div> 
        <div class="modal-footer"> 
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
            <button type="submit" name="tambah" class="btn btn-info waves-effect waves-light">Save</button> 
        </div> 
    </div> 
</div>
</div><!-- /.modal -->
</form>

@endsection