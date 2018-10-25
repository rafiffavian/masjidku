<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Halaman Utama Dari View</h1>
	

	@if($r>=70 && $r<=100)
	<div style="background-color: green">

	@elseif($r>30 && $r<=69)
	<div style="background-color: black">

	@elseif($r<=29 && $r>0)
	<div style="background-color: blue">

	@else
	<div style="background-color: grey">

	@endif
	<h1>Nilai Anda adalah {{$r}}</h1>

	</div>

	@foreach($namaArray as $nama)

		<h3>{{$nama}}</h3>

	@endforeach

</body>
</html>
