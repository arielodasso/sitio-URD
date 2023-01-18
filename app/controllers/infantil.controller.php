<?php
require_once './app/models/infantil.model.php';
require_once './app/views/infantil.view.php';

class InfantilController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new InfantilModel();
        $this->view = new InfantilView();
    }

    public function showUndecima() {
        $noticias = $this->model->filtrarUndecima();
        $this->view->showUndecima($noticias); 
    }
    public function showUndecimaEdicion() {
        $equiposA = $this->model->getEquiposUndecimaA();
        $equiposB = $this->model->getEquiposUndecimaB();
        $this->view->showUndecimaEdicion($equiposA, $equiposB); 
    }



    public function showDecima() {
        $noticias = $this->model->filtrarDecima();
        $this->view->showDecima($noticias); 
    }
    public function showDecimaEdicion() {
        $equiposA = $this->model->getEquiposDecimaA();
        $equiposB = $this->model->getEquiposDecimaB();
        $this->view->showDecimaEdicion($equiposA, $equiposB); 
    }


    public function showNovena() {
        $noticias = $this->model->filtrarNovena();
        $this->view->showNovena($noticias); 
    }
    public function showNovenaEdicion() {
        $equiposA = $this->model->getEquiposNovenaA();
        $equiposB = $this->model->getEquiposNovenaB();
        $this->view->showNovenaEdicion($equiposA, $equiposB); 
    }


    public function showOctava() {
        $noticias = $this->model->filtrarOctava();
        $this->view->showOctava($noticias); 
    }
    public function showOctavaEdicion() {
        $equiposA = $this->model->getEquiposOctavaA();
        $equiposB = $this->model->getEquiposOctavaB();
        $this->view->showOctavaEdicion($equiposA, $equiposB); 
    }



    public function showSeptima() {
        $noticias = $this->model->filtrarSeptima();
        $this->view->showSeptima($noticias); 
    }
    public function showSeptimaEdicion() {
        $equiposA = $this->model->getEquiposSeptimaA();
        $equiposB = $this->model->getEquiposSeptimaB();
        $this->view->showSeptimaEdicion($equiposA, $equiposB); 
    }
}