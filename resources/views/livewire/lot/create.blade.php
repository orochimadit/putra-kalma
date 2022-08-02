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
                        <label class="col-md-2 control-label">Perumahan</label>
                        <div class="col-md-10">

                        <select class="form-control" name="housing_id">
                            <option label="Perumahan"></option>
                            @foreach($housings as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                             @endforeach
                       
                        </select>
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-2 control-label">Blok Kaveling</label>
                                <div class="col-md-10">
                                    <input type="text" wire:model.lazy="blok" class="form-control">
                                </div>
                                @error('blok') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                       
                    </div>
                    <div class="col-md-6 form-horizontal">
                  
                        <div class="form-group">
                                <label class="col-md-2 control-label">Luas Kaveling</label>
                                <div class="col-md-10">
                                    <input type="text" wire:model="surface_area" data-a-sign=" M²" data-p-sign="s" class="form-control autonumber">
                                </div>
                                @error('surface_area') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                                <label class="col-md-2 control-label">Tipe</label>
                                <div class="col-md-10">
                                    <input type="text" wire:model.lazy="type"  class="form-control">
                                </div>
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Harga Kaveling</label>
                            <div class="input-group col-md-5">
                                <span class="input-group-addon" id="format">Rp</span>
                                <input type="text" wire:model.lazy="type" placeholder="" class="form-control autonumber" data-a-sep="." data-a-dec=",">
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
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