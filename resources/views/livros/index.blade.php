<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Livros</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
	<div class="col-md-6 col-md-offset-3">
          <h1>Livros</h1>
          <ul class="list-group">
	    @foreach ($livros as $livro)
	    <li class="list-group-item"><a href="/livros/{{ $loop->index }}">{{ $livro }}</a></li>
	    @endforeach
	  </ul>	  
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>
