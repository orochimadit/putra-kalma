@extends('admin.layouts.app')

@section('contents')
<div class="col-md-12">
    <div class="content-wrapper">

        <!-- Modal -->
        <div class="form-layout">



                <form action="{{route('banks.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="exampleFormControlInput1">Bank</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                                </div>
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-horizontal">
                            <div class="form-group">
                                <div class="clearfix m-t-15">
                                    <button type="submit" class="btn btn-pink btn-rounded waves-effect waves-light">Submit</button>
                                    <button class="btn btn-secondary bd-0">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            </form>

    </div>





</div>
@endsection