<?php
require_once './app/controllers/noticias.controller.php';
require_once './app/controllers/admin.controller.php';
require_once './app/controllers/index.controller.php';
require_once './app/controllers/masculino.controller.php';
require_once './app/controllers/femenino.controller.php';
require_once './app/controllers/infantil.controller.php';
require_once './app/controllers/seleccion.controller.php';

require_once './app/controllers/auth.controller.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {

    // Muestro el inicio
    case 'home':
        $homeController = new HomeController();
        $homeController->showHome();
        break;

    // Muestro masculino - Primera
    case 'masculino-primera':
        $masculinoController = new MasculinoController();
        $masculinoController->showPrimera();
        break;
        // Muestro masculino - Primera
        case 'masculino-primera-edicion':
            $masculinoController = new MasculinoController();
            $masculinoController->showPrimeraEdicion();
            break;

    // Muestro masculino - Reserva
    case 'masculino-reserva':
        $masculinoController = new MasculinoController();
        $masculinoController->showReserva();
        break;
        // Muestro masculino - Reserva
        case 'masculino-reserva-edicion':
            $masculinoController = new MasculinoController();
            $masculinoController->showReservaEdicion();
            break;

    // Muestro masculino - Quinta
    case 'masculino-quinta':
        $masculinoController = new MasculinoController();
        $masculinoController->showQuinta();
        break;
        // Muestro masculino - Quinta
        case 'masculino-quinta-edicion':
            $masculinoController = new MasculinoController();
            $masculinoController->showQuintaEdicion();
            break;

    // Muestro masculino - Sexta
    case 'masculino-sexta':
        $masculinoController = new MasculinoController();
        $masculinoController->showSexta();
        break;
        // Muestro masculino - Sexta
        case 'masculino-sexta-edicion':
            $masculinoController = new MasculinoController();
            $masculinoController->showSextaEdicion();
            break;


    // Muestro femenino - Primera
    case 'femenino-primera':
        $femeninoController = new FemeninoController();
        $femeninoController->showPrimera();
        break;
        // Muestro femenino - Primera
        case 'femenino-primera-edicion':
            $femeninoController = new FemeninoController();
            $femeninoController->showPrimeraEdicion();
            break;

    // Muestro femenino - Sub15
    case 'femenino-sub15':
        $femeninoController = new FemeninoController();
        $femeninoController->showSub15();
        break;
        // Muestro femenino - Sub15
        case 'femenino-sub15-edicion':
            $femeninoController = new FemeninoController();
            $femeninoController->showSub15Edicion();
            break;

    // Muestro femenino - Sub14
    case 'femenino-sub14':
        $femeninoController = new FemeninoController();
        $femeninoController->showSub14();
        break;
        // Muestro femenino - Sub14
        case 'femenino-sub14-edicion':
            $femeninoController = new FemeninoController();
            $femeninoController->showSub14Edicion();
            break;


    // Muestro infantil - Undecima
    case 'infantil-undecima':
        $infantilController = new InfantilController();
        $infantilController->showUndecima();
        break;
        // Muestro infantil - Undecima
        case 'infantil-undecima-edicion':
            $infantilController = new InfantilController();
            $infantilController->showUndecimaEdicion();
            break;

    // Muestro infantil - Decima
    case 'infantil-decima':
        $infantilController = new InfantilController();
        $infantilController->showDecima();
        break;
        // Muestro infantil - Decima
        case 'infantil-decima-edicion':
            $infantilController = new InfantilController();
            $infantilController->showDecimaEdicion();
            break;

    // Muestro infantil - Novena
    case 'infantil-novena':
        $infantilController = new InfantilController();
        $infantilController->showNovena();
        break;
        // Muestro infantil - Novena
        case 'infantil-novena-edicion':
            $infantilController = new InfantilController();
            $infantilController->showNovenaEdicion();
            break;

    // Muestro infantil - Octava
    case 'infantil-octava':
        $infantilController = new InfantilController();
        $infantilController->showOctava();
        break;
        // Muestro infantil - Octava
        case 'infantil-octava-edicion':
            $infantilController = new InfantilController();
            $infantilController->showOctavaEdicion();
            break;

    // Muestro infantil - Septima
    case 'infantil-septima':
        $infantilController = new InfantilController();
        $infantilController->showSeptima();
        break;
        // Muestro infantil - Septima
        case 'infantil-septima-edicion':
            $infantilController = new InfantilController();
            $infantilController->showSeptimaEdicion();
            break;



    // Muestro infantil - Septima
    case 'seleccion-femenina':
        $seleccionController = new SeleccionController();
        $seleccionController->showSeleccionFemenina();
        break;
    // Muestro infantil - Septima
    case 'seleccion-sub15':
        $seleccionController = new SeleccionController();
        $seleccionController->showSeleccionSub15();
        break;




    // Muestro el formulario de Login
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;

    // Valido los datos de Email y Contraseña
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    // Cierra el session_start()
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    // Muestro equipos Tandil
    case 'tandil':
        $homeController = new HomeController();
        $homeController->showTandil();
        break;
    // Muestro equipos Ayacucho
    case 'ayacucho':
        $homeController = new HomeController();
        $homeController->showAyacucho();
        break;
    // Muestro equipos Rauch
    case 'rauch':
        $homeController = new HomeController();
        $homeController->showRauch();
        break;
    // Muestro equipos Juarez
    case 'juarez':
        $homeController = new HomeController();
        $homeController->showJuarez();
        break;

    // Muestro Historia
    case 'historia':
        $homeController = new HomeController();
        $homeController->showHistoria();
        break;

    // Muestro Contacto
    case 'contacto':
        $homeController = new HomeController();
        $homeController->showContacto();
        break;
        
    // Muestro Noticias
    case 'admin':
        $adminController = new AdminController();
        $adminController->showAdmin();
        break;
        
    // Muestro Noticias
    case 'noticias':
        $noticiasController = new NoticiasController();
        $noticiasController->showNoticias();
        break;

    // Muestro Noticias
    case 'adminNoticias':
        $noticiaController = new NoticiasController();
        $noticiaController->showNoticiasAdmin();
        break;
    
    // Noticia completa
    case 'noticia':
    $id = $params[1];
    $noticiaCompletaController = new NoticiasController();
    $noticiaCompletaController->showNoticiaCompleta($id);
    break;

    // Noticias por categoria
    case 'categoria':
        $id = $params[1];
        $noticiaCategoriaController = new NoticiaController();
        $noticiaCategoriaController->filtrarNoticias($id);
        break;


    // Agrego Noticia y Categoria
    case 'agregar':
        $noticiaController = new NoticiaController();
        $noticiaController->addNoticia();
        break;


    case 'borrar':
        $id = $params[1];
        $noticiaController = new NoticiaController();
        $noticiaController->deleteNoticia($id);
        break;

    // Actualizar Noticia
    case 'editNoticia':
        $noticiaController = new NoticiaController();
        $noticiaController->editNoticia($params[1]);
        break;

    // Actualizar Noticia
    case 'updateNoticia':
        $noticiaController = new NoticiaController();
        $noticiaController->updateNoticia();
        break;

    // Default
    default:
        echo('404 Page not found');
        break;
}

