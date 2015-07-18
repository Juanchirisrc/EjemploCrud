@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'movie/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
		 	<label for="exampleInputName2">Nombre</label>
		 	<input type="text" class="form-control" name= "name">
		</div>
		<button type="submit" class="btn btn-defaul">Buscar</button>
		<a href="{{ route('movie.index') }}" class="btn btn-primary">Todo</a>
		<a href="{{ route('movie.create') }}" class="btn btn-primary">Crear</a>
		{!!Form::close()!!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($movies as $movie)
			<tr>
				<td>{{ $movie->name }}</td>
				<td>{{ $movie->description}}</td>
				<td>
					<a class="btn btn-primary btn-xs" href="{{ route('movie.edit',['id'=>$movie->id])}}">Editar</a>
					<a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id'=>$movie->id])}}">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
</div>
@endsection