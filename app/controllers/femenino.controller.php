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
        $equiposA = $this->model->getEquiposPrimeraA();
        $equiposB = $this->model->getEquiposPrimeraB();
        $this->view->showPrimera($noticias,$equiposA,$equiposB); 
    }
    public function showPrimeraEdicion() {
        $equiposA = $this->model->getEquiposPrimeraA();
        $equiposB = $this->model->getEquiposPrimeraB();
        $this->view->showPrimeraEdicion($equiposA, $equiposB); 
    }
    public function addEquipoPrimeraA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoPrimeraA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-primera-edicion"); 
    }
    function deleteEquipoPrimeraA($id) {
        $this->model->deleteEquipoPrimeraA($id);
        header("Location: ". BASE_URL."femenino-primera-edicion");
    }
    function editEquipoPrimeraFemA($id){
        $equipo = $this->model->selectEquipoPrimeraAById($id);
        $this->view->showFormEditPrimeraFemA($equipo);
    }
    function updateEquipoPrimeraFemA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoPrimeraA($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-primera-edicion"); 
    }
    public function addEquipoPrimeraB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoPrimeraB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-primera-edicion"); 
    }
    function deleteEquipoPrimeraB($id) {
        $this->model->deleteEquipoPrimeraB($id);
        header("Location: ". BASE_URL."femenino-primera-edicion");
    }
    function editEquipoPrimeraFemB($id){
        $equipo = $this->model->selectEquipoPrimeraBById($id);
        $this->view->showFormEditPrimeraFemB($equipo);
    }
    function updateEquipoPrimeraFemB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoPrimeraB($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-primera-edicion"); 
    }



    public function showSub15() {
        $noticias = $this->model->filtrarSub15();
        $equiposA = $this->model->getEquiposSub15A();
        $equiposB = $this->model->getEquiposSub15B();
        $this->view->showSub15($noticias,$equiposA,$equiposB); 
    }
    public function showSub15Edicion() {
        $equiposA = $this->model->getEquiposSub15A();
        $equiposB = $this->model->getEquiposSub15B();
        $this->view->showSub15Edicion($equiposA, $equiposB); 
    }
    public function addEquipoSub15A() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSub15A($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-sub15-edicion"); 
    }
    function deleteEquipoSub15A($id) {
        $this->model->deleteEquipoSub15A($id);
        header("Location: ". BASE_URL."femenino-sub15-edicion");
    }
    function editEquipoSub15FemA($id){
        $equipo = $this->model->selectEquipoSub15AById($id);
        $this->view->showFormEditSub15FemA($equipo);
    }
    function updateEquipoSub15FemA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSub15A($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-sub15-edicion"); 
    }

    public function addEquipoSub15B() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSub15B($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-sub15-edicion"); 
    }
    function deleteEquipoSub15B($id) {
        $this->model->deleteEquipoSub15B($id);
        header("Location: ". BASE_URL."femenino-sub15-edicion");
    }
    function editEquipoSub15FemB($id){
        $equipo = $this->model->selectEquipoSub15BById($id);
        $this->view->showFormEditSub15FemB($equipo);
    }
    function updateEquipoSub15FemB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSub15A($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-sub15-edicion"); 
    }



    public function showSub14() {
        $noticias = $this->model->filtrarSub14();
        $equiposA = $this->model->getEquiposSub14A();
        $equiposB = $this->model->getEquiposSub14B();
        $this->view->showSub14($noticias,$equiposA,$equiposB); 
    }
    public function showSub14Edicion() {
        $equiposA = $this->model->getEquiposSub14A();
        $equiposB = $this->model->getEquiposSub14B();
        $this->view->showSub14Edicion($equiposA, $equiposB); 
    }
    public function addEquipoSub14A() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSub14A($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-sub14-edicion"); 
    }
    function deleteEquipoSub14A($id) {
        $this->model->deleteEquipoSub14A($id);
        header("Location: ". BASE_URL."femenino-sub14-edicion");
    }
    function editEquipoSub14FemA($id){
        $equipo = $this->model->selectEquipoSub14AById($id);
        $this->view->showFormEditSub14FemA($equipo);
    }
    function updateEquipoSub14FemA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSub14A($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-sub14-edicion"); 
    }
    public function addEquipoSub14B() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSub14B($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "femenino-sub14-edicion"); 
    }
    function deleteEquipoSub14B($id) {
        $this->model->deleteEquipoSub14B($id);
        header("Location: ". BASE_URL."femenino-sub14-edicion");
    }
    function editEquipoSub14FemB($id){
        $equipo = $this->model->selectEquipoSub14BById($id);
        $this->view->showFormEditSub14FemB($equipo);
    }
    function updateEquipoSub14FemB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSub14B($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "femenino-sub14-edicion"); 
    }
}