<?php

class PagController extends paginas{

    public function inicio(){
        require_once('componentes/paginas/contacto.php');
    }

    public function quienesSomos(){
        require_once('componentes/paginas/quienesSomos.php');
    }

    public function desarro(){
        require_once('componentes/paginas/desarrolladores.php');
    }

    public function contacto(){
        require_once('componentes/paginas/contacto.php');
    }




    public function quienesSomosIns(){
        require_once('componentes/paginas/paginasInstructores/quienesSomos.php');
    }

    public function desarroIns(){
        require_once('componentes/paginas/paginasInstructores/desarrolladores.php');
    }

    public function contactoIns(){
        require_once('componentes/paginas/paginasInstructores/contacto.php');
    }




    

}

?>