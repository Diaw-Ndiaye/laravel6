<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Telecharger une image</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
				<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
<body>
 <br/>
 <div class="container">
 	<h3 align="center">Telecharger une image</h3><br/>
 	@if(count($errors) > 0)
 		<div class="alert alert-danger">Erreur de validation<br><br>
 			<ul>
 				@foreach($errors->all() as $error)
 				<li>{{ $error }}</li>
 				@endforeach
 			</ul>
 		</div>
 	@endif
 	@if($message = Session::get('success'))
 	<div class="alert alert-success alert block">
 		<button type="button" class="close" data-dismiss="alert"></button>
 		<strong>{{ $message}}</strong></div>
      @endif
      @if(Session::has('path'))
            <img src="{{ Session::get('path')}}" width="300"/>
      @endif
<form class="" enctype="multipart/form-data" method="post" action="{{route('create.upload')}}">
                  {{csrf_field()}}
                   <table class="table">
                   	<tr>
                   			<td width="40%" align="right"><label>Choisir un fichier</label></td>
                   			<td width="30%"><input type="file" name="select_file"/></td>
                   			<td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="upload"></td>

                   	</tr>
                   	<tr>
                   		<td width="40%" align="right"></td>
                   		<td width="30%"><span class="text-muted">jpeg, jpg,png,gif</span></td>
                   		<td width="30%" align="left"></td>
                   	</tr>


                   </table>                 
                </form>
 </div>
</body>
</html>