<?php

class InfantilModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }


    public function filtrarUndecima() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '12' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    
    public function getEquiposUndecimaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'A' AND id_categoria_fk='12' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposUndecimaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'B' AND id_categoria_fk='12' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoUndecimaA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('12', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoUndecimaA($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertEquipoUndecimaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('12', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoUndecimaB($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }



    public function filtrarDecima() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '8' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposDecimaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'A' AND id_categoria_fk='8' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposDecimaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'B' AND id_categoria_fk='8' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoDecimaA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('8', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoDecimaA($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertEquipoDecimaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('8', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoDecimaB($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }



    public function filtrarNovena() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '9' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposNovenaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'A' AND id_categoria_fk='9' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposNovenaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'B' AND id_categoria_fk='9' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoNovenaA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('9', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoNovenaA($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertEquipoNovenaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('9', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoNovenaB($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }



    public function filtrarOctava() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '10' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposOctavaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'A' AND id_categoria_fk='10' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposOctavaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'B' AND id_categoria_fk='10' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoOctavaA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('10', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoOctavaA($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertEquipoOctavaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('10', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoOctavaB($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }




    public function filtrarSeptima() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '11' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $noticias;
    }
    public function getEquiposSeptimaA() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'A' AND id_categoria_fk='11' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposA = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposA;
    }
    public function getEquiposSeptimaB() {
        $consulta = $this->db->prepare("SELECT * FROM tablasInfantil WHERE zona = 'B' AND id_categoria_fk='11' ORDER BY puntos DESC");
        $consulta->execute();
        $equiposB = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $equiposB;
    }
    public function insertEquipoSeptimaA($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('11', ?, 'A', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSeptimaA($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertEquipoSeptimaB($equipo, $nombreEscudo) {
        $query = $this->db->prepare("INSERT INTO tablasInfantil (id_categoria_fk, equipo, zona, puntos, pj, dg, escudo) VALUES ('11', ?, 'B', '0', '0', '0', ?)");
        $query->execute([$equipo, $nombreEscudo]);
        return $this->db->lastInsertId();
    }
    public function deleteEquipoSeptimaB($id) {
        $query = $this->db->prepare('DELETE FROM tablasInfantil WHERE id = ?');
        $query->execute([$id]);
    }
}