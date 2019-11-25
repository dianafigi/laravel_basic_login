<!-- funçao do template blade q serve para verificar se o usuario ta autenticado ou nao. O que está entre @auth so aparece se o usuario estiver logado. -->
@auth
  <h4>Está logado!</h4>
  <p>{{ Auth::user()->name }}</p>
  <p>{{ Auth::user()->email }}</p>
  <p>{{ Auth::user()->id }}</p>
@endauth

<!-- funçao do template blade para quando o usuario nao está logado -->
@guest
<h4>Nao está logado!</h4>
@endguest