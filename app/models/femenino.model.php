<?php

class FemeninoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }

    public function filtrarPrimera() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '5' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
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




    public function filtrarSub15() {
        $consulta = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id WHERE b.id = '6' ORDER BY fecha DESC");
        $consulta->execute();
        // Obtengo los resultados
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
    
}