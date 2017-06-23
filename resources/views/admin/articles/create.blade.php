<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

{!! Form::open(['action'=>'ArticlesController@store','method'=>'POST','files'=>'true']) !!}
{!! Form::label('title', 'Titulo') !!}
{!! Form::text('title', null) !!}
{!! Form::label('category_id', 'Categoria') !!}
{!! Form::select('category_id', $categories, null) !!}
{!! Form::label('content', 'Contenido') !!}
{!! Form::text('content', null) !!}
{!! Form::label('tag_id', 'Etiquetas') !!}
{!! Form::select('tag_id[]', $tags, null) !!}
{!! Form::submit('Enviar') !!}
{!! Form::close() !!}
</body>
</html>
