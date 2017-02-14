<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    //
    private $livros = array(
            'Senhor dos Anéis: A irmandade do anel', 'Harry Potter e a pedra filosofal');
    private $descricoes = array(
            'Primeiro livro da triologia do senhor dos anéis.', 'O primeiro livro de sete que contam as aventuras do Harry Potter.');
    private $precos = array(
            '75', '50');

    public function index() {
    	   $livros = $this->livros;
    	   return view('livros.index', compact('livros'));
    
    }

    public function show($index) {
          $livro = $this->livros[$index];
	  $descricao = $this->descricoes[$index];
	  $preco = $this->precos[$index];
          return view('livros.show', compact('livro', 'descricao', 'preco'));
    }
}
