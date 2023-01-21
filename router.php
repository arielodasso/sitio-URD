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





    // CRUD Equipos Primera Masculino
    case 'agregarEquipoPrimeraA':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoPrimeraA();
        break;
    case 'borrarEquipoPrimeraA':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoPrimeraA($id);
        break;
    case 'editarEquipoPrimeraA':
        $masculinoController = new MasculinoController();
        $masculinoController->editEquipoPrimeraA($params[1]);
        break;
    case 'updateEquipoPrimeraA':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoPrimeraA();
        break;

    case 'agregarEquipoPrimeraB':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoPrimeraB();
        break;
    case 'borrarEquipoPrimeraB':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoPrimeraB($id);
        break;
    case 'editarEquipoPrimeraB':
        $masculinoController = new MasculinoController();
        $masculinoController->editEquipoPrimeraB($params[1]);
        break;
    case 'updateEquipoPrimeraB':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoPrimeraB();
        break;






    // CRUD Equipos Reserva Masculino
    case 'agregarEquipoReservaA':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoReservaA();
        break;
    case 'borrarEquipoReservaA':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoReservaA($id);
        break;
    case 'editarEquipoReservaA':
    $masculinoController = new MasculinoController();
        $masculinoController->editEquipoReservaA($params[1]);
    break;
    case 'updateEquipoReservaA':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoReservaA();
        break;
    case 'agregarEquipoReservaB':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoReservaB();
        break;
    case 'borrarEquipoReservaB':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoReservaB($id);
        break;
    case 'editarEquipoReservaB':
    $masculinoController = new MasculinoController();
        $masculinoController->editEquipoReservaB($params[1]);
    break;
    case 'updateEquipoReservaB':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoReservaB();
        break;


    // CRUD Equipos Quinta Masculino
    case 'agregarEquipoQuintaA':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoQuintaA();
        break;
    case 'borrarEquipoQuintaA':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoQuintaA($id);
        break;
    case 'editarEquipoQuintaA':
    $masculinoController = new MasculinoController();
    $masculinoController->editEquipoQuintaA($params[1]);
    break;
    case 'updateEquipoQuintaA':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoQuintaA();
        break;
    case 'agregarEquipoQuintaB':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoQuintaB();
        break;
    case 'borrarEquipoQuintaB':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoQuintaB($id);
        break;
    case 'editarEquipoQuintaB':
        $masculinoController = new MasculinoController();
        $masculinoController->editEquipoQuintaB($params[1]);
        break;
    case 'updateEquipoQuintaB':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoQuintaB();
        break;


    // CRUD Equipos Sexta Masculino
    case 'agregarEquipoSextaA':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoSextaA();
        break;
    case 'borrarEquipoSextaA':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoSextaA($id);
        break;
    case 'editarEquipoSextaA':
    $masculinoController = new MasculinoController();
        $masculinoController->editEquipoSextaA($params[1]);
    break;
    case 'updateEquipoSextaA':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoSextaA();
        break;
    case 'agregarEquipoSextaB':
        $masculinoController = new MasculinoController();
        $masculinoController->addEquipoSextaB();
        break;
    case 'borrarEquipoSextaB':
        $id = $params[1];
        $masculinoController = new MasculinoController();
        $masculinoController->deleteEquipoSextaB($id);
        break;
    case 'editarEquipoSextaB':
    $masculinoController = new MasculinoController();
        $masculinoController->editEquipoSextaB($params[1]);
    break;
    case 'updateEquipoSextaB':
        $masculinoController = new MasculinoController();
        $masculinoController->updateEquipoSextaB();
        break;


    // CRUD Equipos Femenino
    case 'agregarEquipoPrimeraFemA':
        $femeninoController = new FemeninoController();
        $femeninoController->addEquipoPrimeraA();
        break;
    case 'borrarEquipoPrimeraFemA':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoPrimeraA($id);
        break;
    case 'editarEquipoPrimeraFemA':
    $femeninoController = new FemeninoController();
    $femeninoController->editEquipoPrimeraFemA($params[1]);
    break;
    case 'updateEquipoPrimeraFemA':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoPrimeraFemA();
        break;
    case 'agregarEquipoPrimeraFemB':
    $femeninoController = new FemeninoController();
    $femeninoController->addEquipoPrimeraB();
    break;
    case 'borrarEquipoPrimeraFemB':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoPrimeraB($id);
        break;
    case 'editarEquipoPrimeraFemB':
        $femeninoController = new FemeninoController();
        $femeninoController->editEquipoPrimeraFemB($params[1]);
        break;
    case 'updateEquipoPrimeraFemB':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoPrimeraFemB();
        break;

    // CRUD Equipos Femenino
    case 'agregarEquipoSub15FemA':
        $femeninoController = new FemeninoController();
        $femeninoController->addEquipoSub15A();
        break;
    case 'borrarEquipoSub15FemA':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoSub15A($id);
        break;
    case 'editarEquipoSub15FemA':
    $femeninoController = new FemeninoController();
    $femeninoController->editEquipoSub15FemA($params[1]);
    break;
    case 'updateEquipoSub15FemA':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoSub15FemA();
        break;
    case 'agregarEquipoSub15FemB':
        $femeninoController = new FemeninoController();
        $femeninoController->addEquipoSub15B();
        break;
    case 'borrarEquipoSub15FemB':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoSub15B($id);
        break;
    case 'editarEquipoSub15FemB':
    $femeninoController = new FemeninoController();
    $femeninoController->editEquipoSub15FemB($params[1]);
    break;
    case 'updateEquipoSub15FemB':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoSub15FemB();
        break;
    // CRUD Equipos Femenino
    case 'agregarEquipoSub14FemA':
        $femeninoController = new FemeninoController();
        $femeninoController->addEquipoSub14A();
        break;
    case 'borrarEquipoSub14FemA':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoSub14A($id);
        break;
    case 'editarEquipoSub14FemA':
    $femeninoController = new FemeninoController();
    $femeninoController->editEquipoSub14FemA($params[1]);
    break;
    case 'updateEquipoSub14FemA':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoSub14FemA();
        break;
    case 'agregarEquipoSub14FemB':
        $femeninoController = new FemeninoController();
        $femeninoController->addEquipoSub14B();
        break;
    case 'borrarEquipoSub14FemB':
        $id = $params[1];
        $femeninoController = new FemeninoController();
        $femeninoController->deleteEquipoSub14B($id);
        break;
    case 'editarEquipoSub14FemB':
    $femeninoController = new FemeninoController();
    $femeninoController->editEquipoSub14FemB($params[1]);
    break;
    case 'updateEquipoSub14FemB':
        $femeninoController = new FemeninoController();
        $femeninoController->updateEquipoSub14FemB();
        break;



    
    // CRUD Equipos Infantil 11ma
    case 'agregarEquipoDecimaInfantilA':
        $infantilController = new InfantilController();
        $infantilController->addEquipoDecimaA();
        break;
    case 'borrarEquipoDecimaInfantilA':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoDecimaA($id);
        break;
    case 'agregarEquipoDecimaInfantilB':
        $infantilController = new InfantilController();
        $infantilController->addEquipoDecimaB();
        break;
    case 'borrarEquipoDecimaInfantilB':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoDecimaB($id);
        break;

     // CRUD Equipos Infantil 10ma
    case 'agregarEquipoUndecimaInfantilA':
        $infantilController = new InfantilController();
        $infantilController->addEquipoUndecimaA();
        break;
    case 'borrarEquipoUndecimaInfantilA':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoUndecimaA($id);
        break;
    case 'agregarEquipoUndecimaInfantilB':
        $infantilController = new InfantilController();
        $infantilController->addEquipoUndecimaB();
        break;
    case 'borrarEquipoUndecimaInfantilB':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoUndecimaB($id);
        break;

    // CRUD Equipos Infantil 11ma
    case 'agregarEquipoNovenaInfantilA':
        $infantilController = new InfantilController();
        $infantilController->addEquipoNovenaA();
        break;
    case 'borrarEquipoNovenaInfantilA':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoNovenaA($id);
        break;
    case 'agregarEquipoNovenaInfantilB':
        $infantilController = new InfantilController();
        $infantilController->addEquipoNovenaB();
        break;
    case 'borrarEquipoNovenaInfantilB':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoNovenaB($id);
        break;

    // CRUD Equipos Infantil 11ma
    case 'agregarEquipoOctavaInfantilA':
        $infantilController = new InfantilController();
        $infantilController->addEquipoOctavaA();
        break;
    case 'borrarEquipoOctavaInfantilA':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoOctavaA($id);
        break;
    case 'agregarEquipoOctavaInfantilB':
        $infantilController = new InfantilController();
        $infantilController->addEquipoOctavaB();
        break;
    case 'borrarEquipoOctavaInfantilB':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoOctavaB($id);
        break;

    // CRUD Equipos Infantil 11ma
    case 'agregarEquipoSeptimaInfantilA':
        $infantilController = new InfantilController();
        $infantilController->addEquipoSeptimaA();
        break;
    case 'borrarEquipoSeptimaInfantilA':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoSeptimaA($id);
        break;
    case 'agregarEquipoSeptimaInfantilB':
        $infantilController = new InfantilController();
        $infantilController->addEquipoSeptimaB();
        break;
    case 'borrarEquipoSeptimaInfantilB':
        $id = $params[1];
        $infantilController = new InfantilController();
        $infantilController->deleteEquipoSeptimaB($id);
        break;


    // Default
    default:
        echo('404 Page not found');
        break;
}

