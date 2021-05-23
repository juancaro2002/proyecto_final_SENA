<?php

class AdminsController extends Administrador{

    public function admins(){
        require_once('paginasprincipales/admin.php');
    }

    public function crear(){
        
        require_once('componentes/admins/crearCertificados.php');
    }
    public function crear_Contrato(){
        
        $Contratista = ($_POST['fk_contratista']);
        $NombresCompletos = ($_POST['nombreCompleto']);
        $NumeroCedula = ($_POST['cedula']);
        $FechaInicio = ($_POST['fecha_inicio']);
        $FechaFin = ($_POST['fecha_fin']);
        $Estado = ($_POST['fk_estado']);
        $TipoContrato = ($_POST['fk_tipo_contrato']);
        
        
        

        
        parent::registroContrato($Contratista,$NombresCompletos,$NumeroCedula,$FechaInicio,$FechaFin,$Estado,$TipoContrato);
        header("location:?c=Admins&m=consultarCer");
        
    }


    public function consultarCer(){
        require_once('componentes/admins/consultarCertificaos.php');
    }

    public function verCer(){
        require_once('componentes/admins/verCertificado.php');
    }

    public function vistaCer(){
        require_once('componentes/instructores/vistaCertificados.php');
    }

    public function verCertificaPDF(){
        require_once('componentes/paginas/paginasInstructores/certificado.php');
    }

    

    public function modificarCer(){

        require_once('componentes/admins/modificarCertificado.php');

    }

    public function newUser(){

        require_once('componentes/admins/crearUsuarios.php');

    }
    public function registrar_usuario(){
        

        $Nombres = ($_POST['nombres']);
        $Apellidos = ($_POST['apellidos']);
        $Clave = ($_POST['contraseña']);
        $Tipo_documento = ($_POST['fk_tipo_documento']);
        $Numero_documento = ($_POST['numero_documento']);
        $Genero = ($_POST['fk_genero']);
        $Cargo = ($_POST['fk_cargo']);
        $Edad = ($_POST['edad']);
        $Direccion = ($_POST['direccion']);
        $Localidad = ($_POST['fk_localidad']);
        $Email = ($_POST['email']);
        $Celular = ($_POST['celular']);
        $Telefono = ($_POST['telefono']);
        $Eps = ($_POST['fk_eps']);
        $Sede_contratista = ($_POST['fk_sede_contratista']);
        
        

        
        parent::registro($Nombres,$Apellidos,$Clave,$Tipo_documento,$Numero_documento,$Genero,$Cargo,$Edad,$Direccion,$Localidad,$Email,$Celular,$Telefono,$Eps,$Sede_contratista);
        header("location:?c=Admins&m=consultarUser");
    }

    public function eliminar(){
        parent::eliminardato($_REQUEST['id']);
        header("location:?c=Admins&m=consultarUser");
    }
    public function consultarCERT(){
        require_once('componentes/instructores/consultarCert.php');
    }

    public function consultarUser(){

        require_once('componentes/admins/consultarUsuarios.php');

    }
    public function VerUser(){

        require_once('componentes/admins/VisualizarUsario.php');

    }

    public function editarPerfil(){

        require_once('componentes/admins/editarPerfil.php');
    }


    public function updateUsser(){
        $updateid=$_POST['updateid'];
        $Nombres=$_POST['nombres'];
        $Apellidos=$_POST['apellidos'];
        $Edad=$_POST['edad'];
        $Direccion=$_POST['direccion'];
        $Localidad=$_POST['fk_localidad'];
        $Email=$_POST['email'];
        $Clave=$_POST['contraseña'];
        $Celular=$_POST['celular'];
        $Telefono=$_POST['telefono'];
        $Eps=$_POST['fk_eps'];
        parent::updateUsuario($updateid,$Nombres,$Apellidos,$Edad,$Direccion,$Localidad,$Email,$Clave,$Celular,$Telefono,$Eps);
        header('location:?c=Admins&m=consultarUser');
    }

    public function editarCertificados(){

        require_once('componentes/admins/modificarCertificado.php');
    }

    public function updateCerti(){
        $updateid=$_POST['updateid'];
        $Estado=$_POST['fk_estado'];
       
        parent::updateCertifi($updateid, $Estado);
        header('location:?c=Admins&m=consultarCer');
    }
    


}


?>