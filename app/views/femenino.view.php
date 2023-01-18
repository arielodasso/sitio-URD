<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class FemeninoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showPrimera($noticias) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-primera.tpl');
    }
    function showPrimeraEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-primera-edicion.tpl');
    }




    function showSub15($noticias) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-sub15.tpl');
    }
    function showSub15Edicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-sub15-edicion.tpl');
    }




    function showSub14($noticias) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-sub14.tpl');
    }
    function showSub14Edicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        // mostrar el tpl
        $this->smarty->display('femenino/femenino-sub14-edicion.tpl');
    }
} 