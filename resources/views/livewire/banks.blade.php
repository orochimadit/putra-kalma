<div>
@include('livewire.banks-create')
@include('livewire.banks-update')
<div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Bank</b></h4>
          @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('message') }}
        </div>
    @endif

        <table id="datatable" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Bank</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
          @foreach($banks as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</div>
@push('script')
    <script type="text/javascript">
        window.livewire.on('bankStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
@endpush