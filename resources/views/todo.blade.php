	<head>
	<title>TODO LIST</title>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

				</head>
	@extends('app')
	@section('content')

	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>

	@endif

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h1 class="card-title">TODO</h1>
				</div>
				<div class="card-body"> 
					<form action="{{url('todo')}}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label class="control-label">Todo</label>
							<input type="text" class="form-control" name="name">
							<!--<input type="hidden" name="_token" value="UWngptLpacgOcSrRErmj2ybf5cQy3tjsGlFleZNx">-->
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</div>

				</form>
			</div>

		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h1 class="card-title">list todo</h1>
				</div>
				<div class="card-body"> 
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							@foreach($todos as $todo)
							<tr>
								<td>{{ $todo->name}}</td>
								<td>
									<form action="{{ url('/todo/'.$todo->id)}}"method="post" >
										{{ csrf_field() }}

										{{ method_field('DELETE')}}		
										<button type="submit" class="btn btn-danger ">Delete</button>	

									</form>
									<td>
									
									<a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn  btn-warning">Edit</a>
	
							
									
								</td>
							</tr>


							@endforeach
						</tbody>

					</table>
					{{$todos->links()}}

				</div>




				@endsection