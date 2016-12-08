<?php
use App\Nav;

$navs = Nav::orderBy('posicion', 'asc')->get();
?>
<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
         <span class="sr-only">Interruptor de Navegación</span>
         <span class="submenu">Submenú</span>
         </button>
         <a class="navbar-brand" href="#">
         </a>
      </div>
      <div class="collapse navbar-collapse" id="subenlaces">
         <ul class="nav navbar-nav navbar-right">
            @foreach( $navs as $nav )
            <li>
               <a href="{{ url( $nav->url ) }}" target="_top">{{ $nav->titulo }}</a>
            </li>
            @endforeach
         </ul>
      </div>
   </div>
</nav>