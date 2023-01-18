<?php

class HomeModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de equipos completa.
     */
    public function getAllNoticias() {
        // Ejecuto la sentencia (2 subpasos)
        $consulta = $this->db->prepare("SELECT * FROM noticias");
        $consulta->execute();

        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }

    // Muestra la ultima noticia
     public function getUltimaNoticia() {
         $query = $this->db->prepare("SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1");
         $query->execute();

         $ultimaNoticia = $query->fetchAll(PDO::FETCH_OBJ);
         return $ultimaNoticia;
     }

     // Muestra de la penultima y dos más
     public function getUltimasNoticia() {
        $query = $this->db->prepare("SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1,4");
        $query->execute();

        $ultimasNoticia = $query->fetchAll(PDO::FETCH_OBJ);
        return $ultimasNoticia;
    }

}