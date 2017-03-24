@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Pengguna</strong>
		<a href="{{url('pengguna/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Pengguna</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $pengguna)
		<td>{{ $x++ }}</td>
		<td>{{ $pengguna->username or 'Username Kosong' }}</td>
		<td>{{ $pengguna->password or 'Password Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<button><a href="{{url('pengguna/edit/'.$pengguna->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"></a></button>
				<button><a href="{{url('pengguna/lihat/'.$pengguna->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"></a></button>
				<button><a href="{{url('pengguna/hapus/'.$pengguna->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"></a></button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	