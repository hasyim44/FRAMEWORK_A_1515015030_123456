@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('matakuliah') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i>Perbarui Data Matakuliah</a>
	</strong>
	</div>
		{!! Form::model($matakuliah,['url'=>'matakuliah/edit/'.$matakuliah->id,'class'=>'form-horizontal']) !!}
		@include('matakuliah.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop