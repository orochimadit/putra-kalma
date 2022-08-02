<div>
@include('livewire.lot.create')
<div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Perumahan</b></h4>
          @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('message') }}
        </div>
    @endif

        <table id="datatable-buttons" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Perumahan</th>
              <th>Blok Kaveling</th>
              <th>Luas Kaveling</th>
              <th>Tipe Kaveling</th>
              <th>Harga Kaveling</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
          @foreach($lots as $value)
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


@push('script')
    <script type="text/javascript">
        window.livewire.on('lotStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
@endpush
</div>