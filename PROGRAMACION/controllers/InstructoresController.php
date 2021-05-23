<?php

class InstructoresController extends instructores{

    public function instruc(){
        require_once('paginasPrincipales/instructores.php');
    }
    public function certiInstru(){
        require_once('componentes/instructores/consultarCert.php');
    }


  


}

?>