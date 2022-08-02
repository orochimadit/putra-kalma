@extends('admin.layouts.app')

@section('contents')
<div class="row">
 <div class="col-md-12">
  <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('banks.index')}}">Bank</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
      </ol>
  </div>
 </div>
 <div class="col-md-12">
  <div class="section-wrapper">
     
     <form action="{{route('banks.update', $bank->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
             @method('PUT')
             <div class="row form-group col-md-4">
                 <label class="col-md-2 control-label">Bank : </label>
                 <input class="" type="text" name="name" placeholder="Nama Bank" value="{{$bank->name}}" autofocus required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            
         </div>
         <div class="form-layout-footer">
             <button type="submit" class="btn btn-primary bd-0" onclick="return confirm('Simpan data ?')">Simpan</button>
         </div>
     </form>
 </div>
 
 </div>
</div>

@endsection