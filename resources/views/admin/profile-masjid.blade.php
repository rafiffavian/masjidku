@extends('adminlte::page')

@section('title', 'Profile Masjid')

@section('content_header')
    <h1>Setting Profile masjid Anda!</h1>
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Masjid</h3>
            </div>
	    <div class="box-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	    	<form class="form-horizontal" method="POST" action="{{route('admin.profile.masjid.save')}}">
          @csrf
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nama Masjid Anda</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="nama masjid" class="form-control input-md" required="" value="{{Auth::user()->masjid ? Auth::user()->masjid->name : old('name')}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telepon">Telepon</label>  
  <div class="col-md-4">
  <input id="telepon" name="phone" type="text" placeholder="Telepon" class="form-control input-md" required="" value="{{Auth::user()->masjid ? Auth::user()->masjid->phone : old('phone')}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longtitude">Longtitude</label>  
  <div class="col-md-4">
  <input id="longtitude" name="longtitude" type="text" placeholder="Longtitude Google Map" class="form-control input-md" required="" value="{{Auth::user()->masjid ? Auth::user()->masjid->longtitude : old('longtitude')}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="latitude">Latitude</label>  
  <div class="col-md-4">
  <input id="latitude" name="latitude" type="text" placeholder="Latitude Google Map" class="form-control input-md" required="" value="{{Auth::user()->masjid ? Auth::user()->masjid->latitude : old('latitude')}}">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat Lengkap</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="alamat" name="address">{{Auth::user()->masjid ? Auth::user()->masjid->address : old('address')}}</textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">{{Auth::user()->masjid ? Auth::user()->masjid->description : old('description')}}</textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">                     
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
  
</fieldset>
</form>
	
	    </div>
    </div>
@stop
