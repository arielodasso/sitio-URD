<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class FemeninoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showPrimera($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-primera.tpl');
    }
    function showPrimeraEdicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-primera-edicion.tpl');
    }
    function showFormEditPrimeraFemA($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editPrimeraFemA.tpl');
    }
    function showFormEditPrimeraFemB($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editPrimeraFemB.tpl');
    }


    function showSub15($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-sub15.tpl');
    }
    function showSub15Edicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-sub15-edicion.tpl');
    }
    function showFormEditSub15FemA($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editSub15FemA.tpl');
    }
    function showFormEditSub15FemB($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editSub15FemB.tpl');
    }




    function showSub14($noticias, $equiposA, $equiposB) {
        $this->smarty->assign('count', count($noticias));
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-sub14.tpl');
    }
    function showSub14Edicion($equiposA, $equiposB){
        $this->smarty->assign('equiposA', $equiposA);
        $this->smarty->assign('equiposB', $equiposB);
        $this->smarty->display('femenino/femenino-sub14-edicion.tpl');
    }
    function showFormEditSub14FemA($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editSub14FemA.tpl');
    }
    function showFormEditSub14FemB($equipo){
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('formularios/form-editSub14FemB.tpl');
    }

} 