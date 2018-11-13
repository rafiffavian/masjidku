@extends('layouts.app-frontend2')

@section('content') {{-- dibawah ini adalah kodingan dari bootsnip --}}
	<div class="container">
	    <div id="products" class="row view-group">
	    	@foreach($listMasjid as $masjid)
	                <div class="item col-xs-4 col-lg-4" style="margin-bottom: 20px">
	                    <div class="thumbnail card">
	                        <div class="img-event">
	                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
	                        </div>
	                        <div class="caption card-body">
	                            <a href="{{ route('masjid.detail', $masjid->id) }}"><h4 class="group card-title inner list-group-item-heading">
	                                {{$masjid->name}}</h4></a>
	                            <p class="group inner list-group-item-text">
	                                {{$masjid->address}}</p>
	                            <div class="row">
	                                <div class="col-xs-12 col-md-6">
	                                    <p class="lead">
	                                        {{$masjid->phone}}</p>
	                                </div>
	                            </div>
	                        </div>
               
	                    </div>
	                </div>
	        @endforeach 
	    </div>
	</div><br><br>
@endsection