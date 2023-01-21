<?php

class MasculinoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }

    public function filtrarPrimera() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '1' ORDER BY fecha DESC");
        $consulta->execute();
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }

    public function getEquiposPrimeraA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'A' AND id_categoria_fk='1' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposPrimeraB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'B' AND id_categoria_fk='1' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoPrimeraA($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('1', ?, 'A', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoPrimeraA($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoPrimeraAById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoPrimeraA($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }



    public function insertEquipoPrimeraB($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('1', ?, 'B', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoPrimeraB($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoPrimeraBById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoPrimeraB($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }






    public function filtrarReserva() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '2' ORDER BY fecha DESC");
        $consulta->execute();
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }
    public function getEquiposReservaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'A' AND id_categoria_fk='2' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposReservaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'B' AND id_categoria_fk='2' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoReservaA($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('2', ?, 'A', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoReservaA($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoReservaAById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoReservaA($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }
    public function insertEquipoReservaB($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('2', ?, 'B', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoReservaB($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoReservaBById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoReservaB($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }








    public function filtrarQuinta() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '3' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }
    public function getEquiposQuintaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'A' AND id_categoria_fk='3' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposQuintaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'B' AND id_categoria_fk='3' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoQuintaA($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('3', ?, 'A', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoQuintaA($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoQuintaAById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoQuintaA($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }

    public function insertEquipoQuintaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('3', ?, 'B', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoQuintaB($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoQuintaBById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoQuintaB($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }






    public function filtrarSexta() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '4' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }
    public function getEquiposSextaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'A' AND id_categoria_fk='4' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposSextaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasMasculino WHERE zona = 'B' AND id_categoria_fk='4' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoSextaA($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('4', ?, 'A', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSextaA($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoSextaAById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSextaA($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }

    public function insertEquipoSextaB($equipo, $nombreEscudo) {
        $consulta = $this->db->prepare("INSERT INTO tablasMasculino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('4', ?, 'B', '0', '0', '0', ?)");
        $consulta->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSextaB($id) {
        $consulta = $this->db->prepare('DELETE FROM tablasMasculino WHERE id = ?');
        $consulta->execute([$id]);
    }
    function selectEquipoSextaBById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasMasculino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSextaB($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasMasculino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }


}