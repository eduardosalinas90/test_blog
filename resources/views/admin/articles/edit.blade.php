<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

{!! Form::open(['action'=>['ArticlesController@update',$article],'method'=>'PUT','files'=>'true']) !!}
{!! Form::label('title', 'Titulo') !!}
{!! Form::text('title', $article->title) !!}
{!! Form::label('category_id', 'Categoria') !!}
{!! Form::select('category_id', $categories,$article->category->id) !!}
{!! Form::label('content', 'Contenido') !!}
{!! Form::text('content', $article->content) !!}
{!! Form::label('tag_id', 'Etiquetas') !!}
{!! Form::select('tag_id[]', $tags, $my_tag) !!}
{!! Form::submit('Actualizar') !!}
{!! Form::close() !!}
</body>
</html>
