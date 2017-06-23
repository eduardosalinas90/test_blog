<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}">
</head>
<body>

{{ Debugbar::info($articles) }}

<table border="1" class="table table-condensed table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Content</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            <td>{{ $article->user->name }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
<div class="text-center">
{{ $articles->links() }}

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</div>
</body>
</html>


