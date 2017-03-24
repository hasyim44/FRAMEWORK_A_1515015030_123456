@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Ruangan</strong>
		<a href="{{url('ruangan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Ruangan</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tittle</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $ruangan)
		<td>{{ $x++ }}</td>
		<td>{{ $ruangan->tittle }}</td>
		<td>
			<div class="btn-group" role="group">
				<button><a href="{{url('ruangan/edit/'.$ruangan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"></a></button>
				<button><a href="{{url('ruangan/lihat/'.$ruangan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"></a></button>
				<button><a href="{{url('ruangan/hapus/'.$ruangan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"></a></button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop