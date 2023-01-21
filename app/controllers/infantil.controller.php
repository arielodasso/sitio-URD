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
        $equiposA = $this->model->getEquiposUndecimaA();
        $equiposB = $this->model->getEquiposUndecimaB();
        $this->view->showUndecima($noticias, $equiposA, $equiposB); 
    }
    public function showUndecimaEdicion() {
        $equiposA = $this->model->getEquiposUndecimaA();
        $equiposB = $this->model->getEquiposUndecimaB();
        $this->view->showUndecimaEdicion($equiposA, $equiposB); 
    }
    public function addEquipoUndecimaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoUndecimaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-undecima-edicion"); 
    }
    function deleteEquipoUndecimaA($id) {
        $this->model->deleteEquipoUndecimaA($id);
        header("Location: ". BASE_URL."infantil-undecima-edicion");
    }
    public function addEquipoUndecimaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoUndecimaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-undecima-edicion"); 
    }
    function deleteEquipoUndecimaB($id) {
        $this->model->deleteEquipoUndecimaB($id);
        header("Location: ". BASE_URL."infantil-undecima-edicion");
    }


    public function showDecima() {
        $noticias = $this->model->filtrarDecima();
        $equiposA = $this->model->getEquiposDecimaA();
        $equiposB = $this->model->getEquiposDecimaB();
        $this->view->showDecima($noticias, $equiposA, $equiposB); 
    }
    public function showDecimaEdicion() {
        $equiposA = $this->model->getEquiposDecimaA();
        $equiposB = $this->model->getEquiposDecimaB();
        $this->view->showDecimaEdicion($equiposA, $equiposB); 
    }
    public function addEquipoDecimaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoDecimaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-decima-edicion"); 
    }
    function deleteEquipoDecimaA($id) {
        $this->model->deleteEquipoDecimaA($id);
        header("Location: ". BASE_URL."infantil-decima-edicion");
    }
    public function addEquipoDecimaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoDecimaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-decima-edicion"); 
    }
    function deleteEquipoDecimaB($id) {
        $this->model->deleteEquipoDecimaB($id);
        header("Location: ". BASE_URL."infantil-decima-edicion");
    }



    public function showNovena() {
        $noticias = $this->model->filtrarNovena();
        $equiposA = $this->model->getEquiposNovenaA();
        $equiposB = $this->model->getEquiposNovenaB();
        $this->view->showNovena($noticias, $equiposA, $equiposB); 
    }
    public function showNovenaEdicion() {
        $equiposA = $this->model->getEquiposNovenaA();
        $equiposB = $this->model->getEquiposNovenaB();
        $this->view->showNovenaEdicion($equiposA, $equiposB); 
    }
    public function addEquipoNovenaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoNovenaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-novena-edicion"); 
    }
    function deleteEquipoNovenaA($id) {
        $this->model->deleteEquipoNovenaA($id);
        header("Location: ". BASE_URL."infantil-novena-edicion");
    }
    public function addEquipoNovenaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoNovenaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-novena-edicion"); 
    }
    function deleteEquipoNovenaB($id) {
        $this->model->deleteEquipoNovenaB($id);
        header("Location: ". BASE_URL."infantil-novena-edicion");
    }



    public function showOctava() {
        $noticias = $this->model->filtrarOctava();
        $equiposA = $this->model->getEquiposOctavaA();
        $equiposB = $this->model->getEquiposOctavaB();
        $this->view->showOctava($noticias, $equiposA, $equiposB); 
    }
    public function showOctavaEdicion() {
        $equiposA = $this->model->getEquiposOctavaA();
        $equiposB = $this->model->getEquiposOctavaB();
        $this->view->showOctavaEdicion($equiposA, $equiposB); 
    }
    public function addEquipoOctavaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoOctavaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-octava-edicion"); 
    }
    function deleteEquipoOctavaA($id) {
        $this->model->deleteEquipoOctavaA($id);
        header("Location: ". BASE_URL."infantil-octava-edicion");
    }
    public function addEquipoOctavaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoOctavaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-octava-edicion"); 
    }
    function deleteEquipoOctavaB($id) {
        $this->model->deleteEquipoOctavaB($id);
        header("Location: ". BASE_URL."infantil-octava-edicion");
    }


    public function showSeptima() {
        $noticias = $this->model->filtrarSeptima();
        $equiposA = $this->model->getEquiposSeptimaA();
        $equiposB = $this->model->getEquiposSeptimaB();
        $this->view->showSeptima($noticias, $equiposA, $equiposB); 
    }
    public function showSeptimaEdicion() {
        $equiposA = $this->model->getEquiposSeptimaA();
        $equiposB = $this->model->getEquiposSeptimaB();
        $this->view->showSeptimaEdicion($equiposA, $equiposB); 
    }
    public function addEquipoSeptimaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSeptimaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-septima-edicion"); 
    }
    function deleteEquipoSeptimaA($id) {
        $this->model->deleteEquipoSeptimaA($id);
        header("Location: ". BASE_URL."infantil-septima-edicion");
    }
    public function addEquipoSeptimaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSeptimaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "infantil-septima-edicion"); 
    }
    function deleteEquipoSeptimaB($id) {
        $this->model->deleteEquipoSeptimaB($id);
        header("Location: ". BASE_URL."infantil-septima-edicion");
    }
}