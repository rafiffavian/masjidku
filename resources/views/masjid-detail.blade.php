@extends('layouts.app-frontend2')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<div class="container">
	    <div class="col-md-9">
		    <div class="row">
		    <div class="col-md-12">
		        <div class="listing-title">
		            <h4>{{$masjidgua->name}} </h4>
		        </div>
		        <div class="listing-image">
		            <img class="img-responsive" src="http://previews.aspirity.com/arent/pic/properties_img_4.jpg" style="width: 70%">
		        </div>
		        <div class="listing-descri">
		            <div class="row" style="margin-top: 30px">
		            <div class="col-md-4">
		                <h4>No.Tlp</h4>
		            </div>
		            <div class="col-md-8">
		                <p>{{$masjidgua->phone}}</p>
		            </div>
		           </div>
		           <div class="row" style="margin-top: 30px">
		            <div class="col-md-4">
		                <h4>Alamat Masjid</h4>
		            </div>
		            <div class="col-md-8">
		                <p>{{$masjidgua->address}}</p>
		            </div>
		           </div>
		           <div class="row" style="margin-top: 30px">
		            <div class="col-md-4">
		                <h4>Deskripsi Masjid</h4>
		            </div>
		            <div class="col-md-8">
		                <p>{{$masjidgua->description}}.</p>
		            </div>
		           </div>
		        </div>
		        
		        <h3 align="center" style="margin-top: 30px;">Daftar Kajian</h3>
		        <hr border="5px" style="border-color: black">
		        <div class="listing-timings">
		            @foreach($kajiansaya as $v)	
		            <div class="row">
		                <div class="col-md-4">
		                    <h4>{{$v->date}}</h4>
		                </div>
		                <div class="col-md-4">
		                    <ul class="list-unstyled">
		                        <li><strong>Pengisi Acara :</strong><span class="pull-right">{{$v->pengisi_acara}}</span></li><br>
		                        <li><strong>Tema :</strong><span class="pull-right">{{$v->tema}}</span></li><br>
		                        <li><strong>Kategori :</strong><span class="pull-right">{{$v->kategori}}</span></li><br>
		                       
		                    </ul>
		                </div>
		            </div> <br><br>	
		            @endforeach
		        </div>
		        <h3 align="center" style="margin-top: 30px;">Daftar Jadwal Shalat Jumat</h3>
		        <hr border="5px" style="border-color: black">
		        <div class="listing-timings">
		            @foreach($jumatsaya as $v)	
		            <div class="row">
		                <div class="col-md-4">
		                    <h4>{{$v->date}}</h4>P
		                </div>
		                <div class="col-md-4">
		                    <ul class="list-unstyled">
		                        <li><strong>Khatib :</strong><span class="pull-right">{{$v->khatib}}</span></li><br>
		                        <li><strong>Imam :</strong><span class="pull-right">{{$v->imam}}</span></li><br>
		                        <li><strong>Muadzin :</strong><span class="pull-right">{{$v->muadzin}}</span></li><br>
		                       
		                    </ul>
		                </div>
		            </div> <br><br>	
		            @endforeach
		        </div>
		        <hr>
		        <div class="listing-category">
		            <div class="row">
		                <div class="col-md-4">
		                    <h4>Category</h4>
		                </div>
		                <div class="col-md-8">
		                    <ul class="list-inline list-unstyled">
		                        <li><a href="#">Lorem</a></li>
		                        <li><a href="#">Lorem Ipsum</a></li>
		                        <li><a href="#">Lorem IPsum cardova</a></li>
		                        <li><a href="#">Lorem ipsum nextorsa cardooslva</a></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		        <hr>
		        <div class="listing-action-btns">
		            <div class="row">
		                <div class="col-md-4">
		                    <h4>.</h4>
		                </div>
		                <div class="col-md-8">
		                    <button type="button" class="btn btn-default ">Call Now</button>
		                    <button type="button" class="btn btn-default ">Write Review</button>
		                </div>
		            </div>
		        </div>
		    </div>
		    
			</div>
		</div>
	</div>
@endsection