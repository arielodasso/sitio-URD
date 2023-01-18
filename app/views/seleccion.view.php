<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SeleccionView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showSeleccionFemenina($noticias) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('selecciones/seleccion-femenina.tpl');
    }
    function showSeleccionSub15($noticias) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('selecciones/seleccion-sub15.tpl');
    }
} 