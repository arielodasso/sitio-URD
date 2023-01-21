<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class InfantilView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showUndecima($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-undecima.tpl');
    }
    function showUndecimaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-undecima-edicion.tpl');
    }




    function showDecima($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);

        $this->smarty->display('infantil/infantil-decima.tpl');
    }
    function showDecimaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-decima-edicion.tpl');
    }




    function showNovena($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-novena.tpl');
    }
    function showNovenaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-novena-edicion.tpl');
    }




    function showOctava($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-octava.tpl');
    }
    function showOctavaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-octava-edicion.tpl');
    }



    function showSeptima($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-septima.tpl');
    }
    function showSeptimaEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('infantil/infantil-septima-edicion.tpl');
    }

} 