@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Mahasiswa</strong>
		<a href="{{url('mahasiswa/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">mahasiswa</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaMahasiswa as $mahasiswa)
		<td>{{ $x++ }}</td>
		<td>{{ $mahasiswa->nama or 'nama Kosong'}}</td>
		<td>{{ $mahasiswa->nim or 'nim Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('mahasiswa/edit/'.$mahasiswa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('mahasiswa/lihat/'.$mahasiswa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('mahasiswa/hapus/'.$mahasiswa->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop