<?php

class LoginController extends login{

    private $usuarios;

    public function __construct(){
        try{

            $this->usuarios = new Usuarios();

        }catch(exception $e){

        }
        
    }
    
    public function auth(){

        $Email=$_POST['email'];
        $Clave=$_POST['contraseña'];
        $Cargo=$_POST['fk_cargo'];
        $_SESSION['contratista'] = $Email;
        
        $Entrar=$this->usuarios->requestCorreo($_POST['email']);
        if($Email==$Entrar->email && $Clave== $Entrar->contraseña && $Cargo==$Entrar->fk_cargo){
         
        $_SESSION['contratista']=$Entrar;
        header("location:?c=Admins&m=admins");

        }else{
        header("location:?c=Index&m=loginAD");
             
        }
      
    
    }

    public function auths(){
        
        $Email=$_POST['email'];
        $Clave=$_POST['clave'];
        $Cargo=$_POST['fk_cargo_contratista'];
        $_SESSION['contratista'] = $Email;
        
        $Entrar=$this->usuarios->requestCorreo($_POST['email']);
        if($Email==$Entrar->email && $Clave== $Entrar->contraseña && $Cargo==$Entrar->fk_cargo){
         
        $_SESSION['instructor']=$Entrar;
        header("location:?c=Instructores&m=instruc");

            
        }else{
            header("location:?c=Index&m=loginIns");
             
        }
      
    
    }
   
  
}




?>