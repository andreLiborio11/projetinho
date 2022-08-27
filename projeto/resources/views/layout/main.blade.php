<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <h3>projeto</h3>

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Conteudo</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar</a>
                    </li>
                    @auth 
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Minhas Criaçoes</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                        
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>

                        </form>
                    </li>

                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
      <main class="container-fluid">
        <div class="row">
            @if(session('msg'))
              <p class="msg"> {{session('msg')}}</p>
              @endif
           @yield('content')        
    </div>
      </main>
    <footer>
        <p>Projeto</p>

    </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>