<?php
require_once './app/models/index.model.php';
require_once './app/views/index.view.php';

class HomeController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function showHome() {
        $noticias = $this->model->getAllNoticias();
        $ultimaNoticia = $this->model->getUltimaNoticia();
        $ultimasNoticia = $this->model->getUltimasNoticia();
        $this->view->showHome($noticias,$ultimaNoticia,$ultimasNoticia);
        
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function showTandil() {
        $this->view->showTandil();
    }
    public function showAyacucho() {
        $this->view->showAyacucho();
    }
    public function showRauch() {
        $this->view->showRauch();
    }
    public function showJuarez() {
        $this->view->showJuarez();
    }

    public function showHistoria() {
        $this->view->showHistoria();
    }
    public function showContacto() {
        $this->view->showContacto();
    }
}