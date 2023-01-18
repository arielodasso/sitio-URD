<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class NoticiasView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // Inicializo Smarty
    }

    function showNoticias($noticias) {
        // Asigno variables al tpl smarty
         
        $this->smarty->assign('noticias', $noticias);
        // Mostrar el tpl
        $this->smarty->display('noticiasList.tpl');
    }

    function showNoticiasAdmin($noticias, $categorias) {
        // Asigno variables al tpl smarty
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('categorias', $categorias);

        // Mostrar el tpl
        $this->smarty->display('noticiasListAdmin.tpl');
    }

    function showNoticia($noticias) {
        // asigno variables al tpl smarty
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('noticiaCompleta.tpl');
    }


}