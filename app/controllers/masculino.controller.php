<?php
require_once './app/models/masculino.model.php';
require_once './app/views/masculino.view.php';

class MasculinoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new MasculinoModel();
        $this->view = new MasculinoView();
    }

    public function showPrimera() {
        $noticias = $this->model->filtrarPrimera();
        $equiposA = $this->model->getEquiposPrimeraA();
        $equiposB = $this->model->getEquiposPrimeraB();

        $this->view->showPrimera($noticias,$equiposA,$equiposB); 
    }
    public function showPrimeraEdicion() {
        $equiposA = $this->model->getEquiposPrimeraA();
        $equiposB = $this->model->getEquiposPrimeraB();
        $this->view->showPrimeraEdicion($equiposA, $equiposB); 
    }





    public function showReserva() {
        $noticias = $this->model->filtrarReserva();
        $equiposA = $this->model->getEquiposReservaA();
        $equiposB = $this->model->getEquiposReservaB();
        $this->view->showReserva($noticias,$equiposA,$equiposB); 
    }
    public function showReservaEdicion() {
        $equiposA = $this->model->getEquiposReservaA();
        $equiposB = $this->model->getEquiposReservaB();
        $this->view->showReservaEdicion($equiposA, $equiposB); 
    }




    public function showQuinta() {
        $noticias = $this->model->filtrarQuinta();
        $equiposA = $this->model->getEquiposQuintaA();
        $equiposB = $this->model->getEquiposQuintaB();

        $this->view->showQuinta($noticias, $equiposA, $equiposB); 
    }
    public function showQuintaEdicion() {
        $equiposA = $this->model->getEquiposQuintaA();
        $equiposB = $this->model->getEquiposQuintaB();
        $this->view->showQuintaEdicion($equiposA, $equiposB); 
    }



    public function showSexta() {
        $noticias = $this->model->filtrarSexta();
        $equiposA = $this->model->getEquiposSextaA();
        $equiposB = $this->model->getEquiposSextaB();

        $this->view->showSexta($noticias, $equiposA, $equiposB); 
    }
    public function showSextaEdicion() {
        $equiposA = $this->model->getEquiposSextaA();
        $equiposB = $this->model->getEquiposSextaB();
        $this->view->showSextaEdicion($equiposA, $equiposB); 
    }
}