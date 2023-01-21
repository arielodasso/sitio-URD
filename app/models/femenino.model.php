<?php

class FemeninoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }

    public function filtrarPrimera() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '5' ORDER BY fecha DESC");
        $consulta->execute();
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposPrimeraA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'A' AND id_categoria_fk='5' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposPrimeraB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'B' AND id_categoria_fk='5' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoPrimeraA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('5', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoPrimeraA($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoPrimeraAById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoPrimeraA($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }

    public function insertEquipoPrimeraB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('5', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoPrimeraB($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoPrimeraById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoPrimeraB($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }


    public function filtrarSub15() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '6' ORDER BY fecha DESC");
        $consulta->execute();
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposSub15A() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'A' AND id_categoria_fk='6' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposSub15B() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'B' AND id_categoria_fk='6' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoSub15A($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('6', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSub15A($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoSub15AById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSub15A($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }

    public function insertEquipoSub15B($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('6', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSub15B($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoSub15BById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSub15B($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }








    public function filtrarSub14() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '7' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposSub14A() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'A' AND id_categoria_fk='7' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposSub14B() {
        $consulta = $this->db->prepare("SELECT * FROM tablasFemenino WHERE zona = 'B' AND id_categoria_fk='7' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoSub14A($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('7', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSub14A($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoSub14AById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSub14A($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }
    public function insertEquipoSub14B($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasFemenino (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('7', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSub14B($id) {
        $query = $this->db->prepare('DELETE FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
    }
    function selectEquipoSub14BById($id) {
        $query = $this->db->prepare('SELECT * FROM tablasFemenino WHERE id = ?');
        $query->execute([$id]);
        $equipo = $query->fetch(PDO::FETCH_LAZY);
        return $equipo;
    }
    function updateEquipoSub14B($equipo, $puntos, $pj, $dg, $id) {
        $query = $this->db->prepare("UPDATE tablasFemenino SET equipo = ?, puntos = ?, pj = ?, dg = ? WHERE id = ?");
        $query->execute([$equipo, $puntos, $pj, $dg, $id]);
    }
}