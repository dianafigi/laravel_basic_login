<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function __construct() {
      $this->middleware('auth');  //Metodo 1 de proteçao da rota - sem esta funçao, a rota '/produtos' é cessivel mesmo sem se ter feito o login. Com esta funçao, a rota é protegida e somos autoaticamente redireccionados para a pagina do login.
      //outra forme de fazer isso é como está na rota (web) - Metodo 2.
      //Outra forma é colocar no Kernel (protected $middlewareGroups) mas desta forma protege todas e quaisquer rotas o que pode nao corresponder com o q se pretende - Método 3.
    }

    public function index() {
      echo "<h4>Lista de Produtos:</h4>";
      echo "<ul>";
      echo "<li>Massa</li>";
      echo "<li>Feijão</li>";
      echo "<li>Carne</li>";
      echo "<li>Arroz</li>";
      echo "<li>Leite</li>";
      echo "</ul>";
    }
}
