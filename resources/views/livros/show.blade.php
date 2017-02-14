<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Livro</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">
      
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
	  <h1>{{ $livro }}</h1>
	  <h2>Descrição:</h2>
	  <p>{{ $descricao }}</p>
	  <h2>Preço:</h2>
	  <p>{{ $preco }} R$</p>
	</div>
      </div>
    </div>    
    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
