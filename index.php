<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light mb-4">
        <a class="navbar-brand text-center" href="#">A la dérive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Teamback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Teamfront</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Collaboration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ma vie de dev</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mb-5">
        <h1 class="text-center font-weight-bold">A la dérive</h1>
        <p class="text-center">Un blog collaboratif de développeurs web dérivant délibérement au milieu de l'espace</p>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-8 mb-3">
                <div class="d-flex flex-column mb-3">
                    <article class="card mb-2">
                        <h2 class="card-header">Article 1</h2>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam corporis, nam provident magni minus facilis dignissimos repellat, sed laboriosam repudiandae ullam dolorem porro? Ut quaerat distinctio consequuntur magni ullam!</p>
                    </article>
                    
                    <article class="card mb-2">
                        <h2 class="card-header">Article 2</h2>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam corporis, nam provident magni minus facilis dignissimos repellat, sed laboriosam repudiandae ullam dolorem porro? Ut quaerat distinctio consequuntur magni ullam!</p>
                    </article>
    
                    <article class="card mb-2">
                        <h2 class="card-header">Article 3</h2>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam corporis, nam provident magni minus facilis dignissimos repellat, sed laboriosam repudiandae ullam dolorem porro? Ut quaerat distinctio consequuntur magni ullam!</p>
                    </article>
    
                    <article class="card mb-2">
                        <h2 class="card-header">Article 4</h2>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam corporis, nam provident magni minus facilis dignissimos repellat, sed laboriosam repudiandae ullam dolorem porro? Ut quaerat distinctio consequuntur magni ullam!</p>
                    </article>
                </div>
                <div class="d-flex justify-content-between">        
                    <a href='#'>< Previous</a>
                    <a href='#'>Next ></a> 
                </div>
            </div>
    
            <div class="col-12 col-lg-4">
                <form class="form mb-3">
                    <div class="input-group">
                        <label for="search" class="sr-only">Rechercher</label>
                        <input type="text" class="form-control" id="search">
                        <button class="btn btn-primary" type="button">Rechercher</button>
                    </div>
                </form>
                <div class="card text-center mb-3">
                    <div class="card-header" style="background-color:#F8D7AD">  
                        Catégories
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Teamback</a></li>
                        <li class="list-group-item"><a href="#">TeamFront</a></li>
                        <li class="list-group-item"><a href="#">Collaboration</a></li>
                        <li class="list-group-item"><a href="#">Ma vie de dev</a></li>
                    </ul>
                </div> 
        
                <div class="card text-center mb-3">
                    <div class="card-header" style="background-color:#F8D7AD">
                        Auteurs
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Maxime</a></li>
                        <li class="list-group-item"><a href="#">Dario</a></li>
                        <li class="list-group-item"><a href="#">Lucie</a></li>
                        <li class="list-group-item"><a href="#">Antony</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
    
    <footer class="container-fluid bg-light p-3">
        <div class="d-flex justify-content-center mb-2">
            <a href="#" class="mr-3 text-reset">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
            <a href="#" class="mr-3 text-reset">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
            </a>
            <a href="#" class="mr-3 text-reset">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a>
            <a href="#" class="text-reset">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                    <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                </svg>
            </a>
            
        </div>

        <nav class="nav d-flex flex-column align-items-center flex-md-row justify-content-center">
            <a class="nav-link nav-item mr-md-5 p-0" href="#">Contactez-nous</a>
            <a class="nav-link nav-item mr-md-5 p-0" href="#">Qui sommes-nous ?</a>
            <a class="nav-link nav-item p-0" href="#">Mentions légales</a>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
