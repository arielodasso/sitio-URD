<?php
require_once './app/models/femenino.model.php';
require_once './app/views/femenino.view.php';

class FemeninoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new FemeninoModel();
        $this->view = new FemeninoView();
    }

    public function showPrimera() {
        $noticias = $this->model->filtrarPrimera();
        $this->view->showPrimera($noticias); 
    }
    public function showPrimeraEdicion() {
        $equiposA = $this->model->getEquiposPrimeraA();
        $equiposB = $this->model->getEquiposPrimeraB();
        $this->view->showPrimeraEdicion($equiposA, $equiposB); 
    }




    public function showSub15() {
        $noticias = $this->model->filtrarSub15();
        $this->view->showSub15($noticias); 
    }
    public function showSub15Edicion() {
        $equiposA = $this->model->getEquiposSub15A();
        $equiposB = $this->model->getEquiposSub15B();
        $this->view->showSub15Edicion($equiposA, $equiposB); 
    }



    public function showSub14() {
                $noticias = $this->model->filtrarSub14();
        $this->view->showSub14($noticias); 
    }
    public function showSub14Edicion() {
        $equiposA = $this->model->getEquiposSub14A();
        $equiposB = $this->model->getEquiposSub14B();
        $this->view->showSub14Edicion($equiposA, $equiposB); 
    }

}