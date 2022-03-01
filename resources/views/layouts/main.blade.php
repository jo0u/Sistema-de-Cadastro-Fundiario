
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
         <!-- Fonte do Google-->
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
         <!-- CSS Bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Da aplicação-->
       <link rel="stylesheet" href="/css/styles.css">
        <!-- JS Da aplicação-->
         <!-- Compiled and minified CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" rel="stylesheet"> -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
<!-- Compiled and minified JavaScript -->



<!--Mascara bootstrap-->

<!--------------------------------------------------------------------------------------------------->




        
       <script src="/js/scripts.js"></script>
   
       
   
    </head>
    <body >
    
    
           
    
    <header>

  
    


    <link rel="stylesheet" href="/css/menu.css">

<nav class="navbar navbar-expand-lg navbar-light "  id="menu">
        <div class="container-fluid" id="color-menu">
          <a class="navbar-brand" href="/">SCF</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastro</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/processos/dashboard">Processo</a></li>
                  <li><a class="dropdown-item" href="/requerentes/dashboard">Requerente</a></li>
                  <li><a class="dropdown-item" href="#">Domínio Municipal</a></li>
                  <li><a class="dropdown-item" href="#">Confrotante</a></li>
                  <li><a class="dropdown-item" href="#">Processo SEI</a></li>
                </ul>


                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Protesto</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Controle de Protesto</a></li>
                </ul>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tabelas</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/projetos/dashboard">Projetos</a></li>
                    <li><a class="dropdown-item" href="/comunidades/dashboard">Comunidades</a></li>
                    <li><a class="dropdown-item" href="/municipios/dashboard">Municipio</a></li>
                    <li><a class="dropdown-item" href="/procuradores/dashboard">Procurador</a></li>
                    <li><a class="dropdown-item" href="#">Pendências</a></li>
                    <li><a class="dropdown-item" href="/executadores/dashboard">Executor</a></li>
                    <li><a class="dropdown-item" href="#">Funcionários</a></li>
                </ul>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultas</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Tabelas</a></li>
                    <li><a class="dropdown-item" href="#">Produção</a></li>
                    <li><a class="dropdown-item" href="#">Gerencias</a></li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link active " href="/status/dashboard" id="navbarDropdown" role="button"  aria-expanded="false">Status</a>
                   
                  </li>
            </ul>
          </div>
        </div>
        @auth
        <ul class="nav av-link">
            <li class="nav-item">
            <form action="/logout" method="POST">
            @csrf
            <a href="/logout" class="nav-link" id="logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
            </li>
            </form>
      </nav>
      @endauth
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




















       
      
</nav>

    </header>
      
    

      
   <main>
    <div class="container-fluid">
        <div class="row">
        @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>   
        @endif
        @yield('content')
        </div>
    </div>




   </main>
   <!--  <footer>
         <p>
             CDA &copy; 2021
         </p>
     </footer>    -->
    

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   

<script>
  $('.toast').toast(option)
</script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>


    </body>
</html>

