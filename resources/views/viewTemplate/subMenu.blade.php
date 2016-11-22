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
            <li>
               <a href="{{ url('/') }}" target="_top">Inicio</a>
            </li>
            <li >
               <a href="{{ url('/foro') }}" target="_self">Foro Defensoría</a>
            </li>
         </ul>
      </div>
   </div>
</nav>