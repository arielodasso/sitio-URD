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
    
}