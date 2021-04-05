<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<style>
.container{
    margin-top: 2%;
}
</style>
</head>
<body>
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li> 
{{ $error }}
</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"><h2>LA</h2></div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="http://127.0.0.1:8000/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Product Name">Name</label>
<input type="text" name="name" class="form-control" placeholder="Name">
<label for="Product Name">Surame</label>
<input type="text" name="surname" class="form-control" placeholder="Surname">
<label for="Product Name">Email</label>
<input type="text" name="email" class="form-control" placeholder="Email">
</div>
<label for="Product Name">Photo(can attach more than one):</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>
</div>
</div>
</div>
</body>
</html>