<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class MasculinoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showPrimera($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);

        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('masculino/masculino-primera.tpl');
    }
    function showPrimeraEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('masculino/masculino-primera-edicion.tpl');
    }
        



    function showReserva($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);

        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('masculino/masculino-reserva.tpl');
    }
    function showReservaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('masculino/masculino-reserva-edicion.tpl');
    }



    function showQuinta($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);

        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);

        $this->smarty->display('masculino/masculino-quinta.tpl');
    }
    function showQuintaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('masculino/masculino-quinta-edicion.tpl');
    }




    function showSexta($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);

        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);

        // mostrar el tpl
        $this->smarty->display('masculino/masculino-sexta.tpl');
    }
    function showSextaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        // mostrar el tpl
        $this->smarty->display('masculino/masculino-sexta-edicion.tpl');
    }
} 