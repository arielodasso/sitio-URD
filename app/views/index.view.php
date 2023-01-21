<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class HomeView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showHome($noticias,$ultimaNoticia,$ultimasNoticia) {
        $this->smarty->assign('count', count($noticias)); 
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('ultimaNoticia', $ultimaNoticia);
        $this->smarty->assign('ultimasNoticia', $ultimasNoticia);
        $this->smarty->display('index.tpl');
    }

    function showLogin() {
        $this->smarty->display('login.tpl');
    }

    function showTandil() {
        $this->smarty->display('tandilEquipos.tpl');
    }
    function showAyacucho() {
        $this->smarty->display('ayacuchoEquipos.tpl');
    }
    function showRauch() {
        $this->smarty->display('rauchEquipos.tpl');
    }
    function showJuarez() {
        $this->smarty->display('juarezEquipos.tpl');
    }

    function showHistoria() {
        $this->smarty->display('historia.tpl');
    }
    
    function showContacto() {
        $this->smarty->display('contacto.tpl');
    }
} 