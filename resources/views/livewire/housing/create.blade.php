<div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Open Form
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Perumahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">


                        <form>
                            <div class="col-md-6 form-horizontal">

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="exampleFormControlInput1">Perumahan</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model.lazy="name">
                                    </div>
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Lokasi</label>
                                    <div class="col-md-10">
                                        <input type="text" wire:model.lazy="location" class="form-control">
                                    </div>
                                    @error('location') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Spesifikasi Teknis</label>
                                    <div class="col-md-10">

                                        <textarea wire:model.lazy="technical_specifications" class="summernote"></textarea>

                                    </div>
                                    @error('technical_specifications') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-6 form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Daftar Tipe</label>
                                    <div class="col-md-10">

                                        <select multiple="multiple" class="multi-select" id="daftar_tiperumah" wire:model.lazy="type" data-plugin="multiselect">



                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="70">70</option>
                                            <option value="80">80</option>
                                            <option value="90">90</option>
                                            <option value="100">100</option>
                                            <option value="125">125</option>
                                            <option value="135">135</option>
                                        </select>

                                    </div>
                                    @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Jumlah Kaveling</label>
                                    <div class="col-md-4">
                                        <input id="demo3" type="text" value="" wire:model.lazy="amount">

                                    </div>
                                    @error('amount') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Luas Tanah</label>
                                    <div class="col-md-9">
                                        <input type="text" id="luastanah" wire:model.lazy="surface_area" placeholder="" data-a-sign="M²" data-p-sign="s" class="form-control autonumber" placeholder="..">
                                    </div>
                                    @error('surface_area') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">Lampirkan Foto</label>
                                    <div class="col-md-10">
                                        <input type="file" wire:model.lazy="image" id="file" class="filestyle" data-buttonbefore="true">
                                    </div>
                                    @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                        <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>