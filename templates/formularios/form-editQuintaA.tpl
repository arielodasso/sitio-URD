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
                    <a href="../admin"><div class="cont-logo"><img src="../img/LogoURD.png" alt=""></div></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../adminNoticias">Noticias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Masculino
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../masculino-primera-edicion">Primera División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-reserva-edicion">Reserva División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-quinta-edicion">Quinta División</a></li>
                                    <li><a class="dropdown-item" href="../masculino-sexta-edicion">Sexta División</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Femenino
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../femenino-primera-edicion">Primera División</a></li>
                                    <li><a class="dropdown-item" href="../femenino-sub15-edicion">Sub-15</a></li>
                                    <li><a class="dropdown-item" href="../femenino-sub14-edicion">Sub-14</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Infantil
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../infantil-septima-edicion">7ma. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-octava-edicion">8va. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-novena-edicion">9na. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-decima-edicion">10ma. División</a></li>
                                    <li><a class="dropdown-item" href="../infantil-undecima-edicion">11ma. División</a></li>                                    
                                </ul>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../home">Volver al sitio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../logout">Cerrar Sesion</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
    </header>

    <form action="../updateEquipoQuintaA" method="POST" class="form-edit-equipo">
    <div class="equipo"><img src="../img/{$equipo->escudo}"><h2>{$equipo->equipo}</h2></div>
        <div class="form-group">
            <label hidden>Equipo:</label>
            <input type="text" name="equipo" value="{$equipo->equipo}" class="form-control" hidden>

            <label>Puntos:</label>
            <input type="text" name="puntos" value="{$equipo->puntos}" class="form-control">

            <label>Partidos jugados:</label>
            <input type="text" name="pj" value="{$equipo->pj}" class="form-control">

            <label>Diferencia de goles:</label>
            <input type="text" name="dg" value="{$equipo->dg}" class="form-control">

            <label hidden>ID equipo:</label>
            <input type="number" name="id" value="{$equipo->id}" class="form-control" hidden>
        </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
    </form>



{include file= "componentes/footer.tpl"}