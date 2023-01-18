<?php
require_once './app/models/noticias.model.php';
require_once './app/views/noticias.view.php';
require_once './app/helpers/auth.helper.php';

class NoticiasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new NoticiasModel();
        $this->view = new NoticiasView();
    }

    public function showNoticias() {
        $noticias = $this->model->getAllNoticias();
        $this->view->showNoticias($noticias);
    }

    public function showUltimaNoticia() {
     $ultimaNoticia = $this->model->getUltimaNoticia();
     $this->view->showUltimaNoticia($ultimaNoticia);
 }


    public function showNoticiasAdmin() {
        $noticias = $this->model->getAllNoticias();
        $categorias = $this->model->getAllCategorias();
        $this->view->showNoticiasAdmin($noticias,$categorias);
    }

    function deleteNoticia($id) {
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $this->model->deleteNoticiaById($id);
        
        header("Location: ". BASE_URL."noticiaList");
    }

    public function selectCategoria($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $this->model->getNoticiaById($id);
    }

    function editNoticia($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $this->model->editNoticia($categoria, $titulo, $fecha, $descripcion, $id);
    }

    function showNoticiaCompleta($id){
        $noticias = $this->model->seleccionarNoticiaById($id);
        $this->view->showNoticia($noticias);
    }

}