<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //
    private $produtos = array(
            'Xbox Scorpio', 'Iphone 7');
    private $descricoes = array(
            'Última versão do xbox one.', 'Última versão do iphone.');
    private $precos = array(
            '2000', '5000');

    public function index() {
    	   $produtos = $this->produtos;
    	   return view('produtos.index', compact('produtos'));
    
    }

    public function show($index) {
          $produto = $this->produtos[$index];
	  $descricao = $this->descricoes[$index];
	  $preco = $this->precos[$index];
          return view('produtos.show', compact('produto', 'descricao', 'preco'));
    }
}
