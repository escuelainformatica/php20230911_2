@extends("template")

@section("contenido")
<table class='table'>
    <thead>
        <tr>
            <th>autor</th>
            <th>precio</th>
            <th>editorial</th>
        </tr>        
    </thead>
    <tbody>
        @foreach($libros as $libro)
        <tr>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->precio}}</td>
            <td>{{$libro->editorial}}</td>
        </tr>            
        @endforeach
    </tbody>
</table>
@endsection