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
    public function addEquipoPrimeraA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoPrimeraA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-primera-edicion"); 
    }
    function deleteEquipoPrimeraA($id) {
        $this->model->deleteEquipoPrimeraA($id);
        header("Location: ". BASE_URL."masculino-primera-edicion");
    }
    function editEquipoPrimeraA($id){
        $equipo = $this->model->selectEquipoPrimeraAById($id);
        $this->view->showFormEditPrimeraA($equipo);
    }
    function updateEquipoPrimeraA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoPrimeraA($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-primera-edicion"); 
    }

    public function addEquipoPrimeraB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoPrimeraB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-primera-edicion"); 
    }
    function deleteEquipoPrimeraB($id) {
        $this->model->deleteEquipoPrimeraB($id);
        header("Location: ". BASE_URL."masculino-primera-edicion");
    }
    function editEquipoPrimeraB($id){
        $equipo = $this->model->selectEquipoPrimeraBById($id);
        $this->view->showFormEditPrimeraB($equipo);
    }
    function updateEquipoPrimeraB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoPrimeraB($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-primera-edicion"); 
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
    public function addEquipoReservaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoReservaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-reserva-edicion"); 
    }
    function deleteEquipoReservaA($id) {
        $this->model->deleteEquipoReservaA($id);
        header("Location: ". BASE_URL."masculino-reserva-edicion");
    }
    function editEquipoReservaA($id){
        $equipo = $this->model->selectEquipoReservaAById($id);
        $this->view->showFormEditReservaA($equipo);
    }
    function updateEquipoReservaA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoReservaA($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-reserva-edicion"); 
    }
    public function addEquipoReservaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoReservaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-reserva-edicion"); 
    }
    function deleteEquipoReservaB($id) {
        $this->model->deleteEquipoReservaB($id);
        header("Location: ". BASE_URL."masculino-reserva-edicion");
    }
    function editEquipoReservaB($id){
        $equipo = $this->model->selectEquipoReservaBById($id);
        $this->view->showFormEditReservaB($equipo);
    }
    function updateEquipoReservaB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoReservaB($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-reserva-edicion"); 
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
    public function addEquipoQuintaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoQuintaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-quinta-edicion"); 
    }
    function deleteEquipoQuintaA($id) {
        $this->model->deleteEquipoQuintaA($id);
        header("Location: ". BASE_URL."masculino-quinta-edicion");
    }
    function editEquipoQuintaA($id){
        $equipo = $this->model->selectEquipoQuintaAById($id);
        $this->view->showFormEditQuintaA($equipo);
    }
    function updateEquipoQuintaaA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoQuintaA($equipo, $puntos, $pj, $dg, $id);

        header("Location: " . BASE_URL . "masculino-quinta-edicion"); 
    }

    public function addEquipoQuintaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoQuintaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-quinta-edicion"); 
    }
    function deleteEquipoQuintaB($id) {
        $this->model->deleteEquipoQuintaB($id);
        header("Location: ". BASE_URL."masculino-quinta-edicion");
    }
    function editEquipoQuintaB($id){
        $equipo = $this->model->selectEquipoQuintaBById($id);
        $this->view->showFormEditQuintaB($equipo);
    }
    function updateEquipoQuintaB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoQuintaB($equipo, $puntos, $pj, $dg, $id);

        header("Location: " . BASE_URL . "masculino-quinta-edicion"); 
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
    public function addEquipoSextaA() {
        $equipo = $_POST['equipoA'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSextaA($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-sexta-edicion"); 
    }
    function deleteEquipoSextaA($id) {
        $this->model->deleteEquipoSextaA($id);
        header("Location: ". BASE_URL."masculino-sexta-edicion");
    }
    function editEquipoSextaA($id){
        $equipo = $this->model->selectEquipoSextaAById($id);
        $this->view->showFormEditSextaA($equipo);
    }
    function updateEquipoSextaA(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSextaA($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-sexta-edicion"); 
    }
    public function addEquipoSextaB() {
        $equipo = $_POST['equipoB'];
        $nombreEscudo = $equipo.'.png';
        $id = $this->model->insertEquipoSextaB($equipo, $nombreEscudo);
        header("Location: " . BASE_URL . "masculino-sexta-edicion"); 
    }
    function deleteEquipoSextaB($id) {
        $this->model->deleteEquipoSextaB($id);
        header("Location: ". BASE_URL."masculino-sexta-edicion");
    }
    function editEquipoSextaB($id){
        $equipo = $this->model->selectEquipoSextaBById($id);
        $this->view->showFormEditSextaB($equipo);
    }
    function updateEquipoSextaB(){
        $equipo = $_POST['equipo'];
        $puntos = $_POST['puntos'];
        $pj = $_POST['pj'];
        $dg = $_POST['dg'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
        $this->model->updateEquipoSextaB($equipo, $puntos, $pj, $dg, $id);
        header("Location: " . BASE_URL . "masculino-sexta-edicion"); 
    }
}