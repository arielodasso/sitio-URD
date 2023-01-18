<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilos CSS-->
    <link rel="stylesheet" href="../app/css/estilos.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!--Icono en title-->
    <link rel="shortcut icon" href="../img/LogoURD.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Unión Regional Deportiva</title>
</head>
<body>
    <header>
        <ul class="nav justify-content-end cont-redes">
            <li class="nav-item">
                <a class="btn btn-lg" href="#" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-floating" href="#" role="button">
                    <i class="fab fa-twitter "></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-floating" href="#" role="button">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
        </ul>

            <nav class="navbar navbar-expand-lg cont-menu">
                <div class="container-fluid">
                    <a href="../home"><div class="cont-logo"><img src="../img/LogoURD.png" alt=""></div></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../noticias">Noticias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Masculino
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../masculino-primera">Primera División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-reserva">Reserva División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-quinta">Quinta División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-sexta">Sexta División</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Femenino
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../femenino-primera">Primera División</a></li>
                                    <li><a class="dropdown-item" href="../femenino-sub15">Sub-15</a></li>
                                    <li><a class="dropdown-item" href="../femenino-sub14">Sub-14</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Infantil
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../infantil-septima">7ma. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-octava">8va. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-novena">9na. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-decima">10ma. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-undecima">11ma. División</a></li>                                    
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Selecciones
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../seleccion-femenina">Femenino</a></li>
                                    <li><a class="dropdown-item" href="../seleccion-sub15">Sub-15 Masculino</a></li>                                   
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Institucional
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../historia">Historia</a></li>
                                    <li><a class="dropdown-item" href="../contacto">Contacto</a></li>                                   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../login">Login</a>
                            </li> 
                        </ul>
                        
                    </div>
                </div>
            </nav>
    </header>


    <section>
        <div class="cont-noticia-completa">
          {foreach from=$noticias item=$noticia}
                <div class="text-info card-body">
                    <p class="categoria">{$noticia->id_categoria_FK}</p>
                    <h2 class="card-title" id="titulo">{$noticia->titulo}</h2>
                    <p class="fecha">{$noticia->fecha}</p>

                    <img src="../img/{$noticia->imagen}">
                    
                    
                    <p class="descripcion text-light">{$noticia->descripcion}</p>

                    <h5 class="comentarios">Comentá</h5>
                    <div class="fb-comments" data-href="https://es-la.facebook.com/Ligatandilense" data-width="" data-numposts="5"></div>                
                </div>
          {/foreach}
        </div>
    </section>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v15.0" nonce="jfzH8AnO"></script>

{include file="componentes/footer.tpl"}