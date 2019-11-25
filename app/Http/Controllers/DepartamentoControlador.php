<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index() {
      echo "<h4>Lista de Categorias:</h4>";
      echo "<ul>";
      echo "<li>Alimentos</li>";
      echo "<li>Electronicos</li>";
      echo "<li>Móveis</li>";
      echo "<li>Informática</li>";
      echo "</ul>";
      echo "<hr>";

      if(Auth::check()) { //verifica se o user ta ou nao logado. Para se user esta classe e funçao, chamar a classe lá em cima 'use Illuminate\Support\Facades\Auth'.
        $user = Auth::user(); //Retorna o objecto do user
        echo "<h4>Está logado!</h4>";
        echo "<p>" . $user->name . "</p>";
        echo "<p>" . $user->email . "</p>";
        echo "<p>" . $user->id . "</p>";
      }
      else {
        echo "<h4>Nao está logado!</h4>";
      }
    }
}
