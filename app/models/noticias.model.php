<?php

class NoticiasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=liga;charset=utf8', 'root', '');
    }

    // Devuelve la lista de noticias completa.
     
    public function getAllNoticias() {
        $query = $this->db->prepare("SELECT * FROM noticias ORDER BY fecha DESC");
        $query->execute();

        $noticias = $query->fetchAll(PDO::FETCH_OBJ);
        return $noticias;
    }

    public function getAllCategorias() {
        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        // Obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }


    public function getNoticiaById($id) {
        $query = $this->db->prepare("SELECT `id`, `id_categoria_FK`, `titulo`, `fecha`, `imagen`, `descripcion` FROM `noticias` WHERE id = id");
        $query->execute();

        $noticia = $query->fetch(PDO::FETCH_OBJ);
        return $noticia;
    }


    /**
     * Inserta una noticia en la base de datos.
     */
    public function insertNoticia($categoria, $titulo, $fecha, $nombreArchivo, $descripcion) {
        if ($nombreArchivo){
            $pathImg = $this->uploadImage($nombreArchivo);


        $query = $this->db->prepare("INSERT INTO noticias (id_categoria_FK, titulo, fecha, imagen, descripcion) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$categoria, $titulo, $fecha, $nombreArchivo , $descripcion]);
        }else {
            $query = $this->db->prepare("INSERT INTO noticias (id_categoria_FK, titulo, fecha, descripcion) VALUES (?, ?, ?, ?)");
            $query->execute([$categoria, $titulo, $fecha, $descripcion]);
        }
    }

    private function uploadImage(){
        $nombreArchivo = "imagenes/" . uniqid(). "." . strtolower(pathinfo($_FILES['imagen']['name'],PATHINFO_EXTENSION));
        move_uploaded_file($pathImg, $filePath);
        return $filePath;
    }

    // Selecciona noticia

    public function selectNoticiaById($id) {

        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id]);
        $noticia = $consulta->fetch(PDO::FETCH_LAZY);

        $categoria = $noticia['id_categoria_FK'];
        $titulo = $noticia['titulo'];
        $fecha = $noticia['fecha'];
        $imagen = $noticia['imagen'];
        $descripcion = $noticia['descripcion'];

        return $noticia;
    }

    // Actualizar una categoria
    public function editNoticia($categoria, $titulo, $fecha, $descripcion, $id){
        $consulta = $this->db->prepare('UPDATE noticias SET id_categoria_FK = ?, titulo = ?, fecha = ?, descripcion = ?  WHERE id = ?');
        $consulta->execute([$categoria, $titulo, $fecha, $descripcion, $id]);
        header("Location: " . BASE_URL . "noticiaList");
    }

    //Elimina una noticia por su id.
    function deleteNoticiaById($id) {
        $query = $this->db->prepare('DELETE FROM noticias WHERE id = ?');
        $query->execute([$id]);
    }

    function seleccionarNoticiaById($id) {
        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id]);
        $noticias = $query->fetchAll(PDO::FETCH_OBJ);
        return $noticias;
    }



}