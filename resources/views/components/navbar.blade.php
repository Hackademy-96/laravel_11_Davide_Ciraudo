<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Altamura™</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto justify-content-center d-flex w-100 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">HomePage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">Tutti i Giochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('article.create')}}">Crea Articolo</a>
                </li>
            </ul>  
            @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <form method="POST" action="">
                                @csrf
                                <button class="btn " type="submit">Logout</button>
                            </form>
                        </li> 
                        <li class="dropdown-item">
                            <a class="nav-link active" href="">I Miei Giochi</a>
                        </li>
                    </ul>
                </li>
            </ul>         
            
            @endauth
            @guest
            <ul class=" navbar-nav">
               <li class="nav-item">
                <a class="nav-link active" href="">Registrati</a>                           
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">Accedi</a>
            </li>   
            </ul>
              
            @endguest
            
        </div>
    </div>
</nav>