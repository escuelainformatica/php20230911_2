@extends("template")
@section("contenido")
<h1>{{$titulo}}</h1>
<form method="post">
@csrf
  <div class="form-group row">
    <label for="autor" class="col-4 col-form-label">Autor</label> 
    <div class="col-8">
      <input id="autor" name="autor" type="text" class="form-control" value="{{$libro->autor}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="precio" class="col-4 col-form-label">Precio</label> 
    <div class="col-8">
      <input id="precio" name="precio" type="text" class="form-control" value="{{$libro->precio}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="editorial" class="col-4 col-form-label">Editorial</label> 
    <div class="col-8">
      <input id="editorial" name="editorial" type="text" class="form-control" value="{{$libro->editorial}}">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection