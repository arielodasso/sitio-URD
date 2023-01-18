<?php
require_once './app/models/seleccion.model.php';
require_once './app/views/seleccion.view.php';

class SeleccionController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new SeleccionModel();
        $this->view = new SeleccionView();
    }

    public function showSeleccionFemenina() {
        $noticias = $this->model->filtrarSeleccionFemenina();
        $this->view->showSeleccionFemenina($noticias); 
    }
    public function showSeleccionSub15() {
        $noticias = $this->model->filtrarSeleccionSub15();
        $this->view->showSeleccionSub15($noticias); 
    }
    
}