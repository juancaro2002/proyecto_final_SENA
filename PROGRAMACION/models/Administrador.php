<?php

class Administrador extends DB{
/*consultas Usuarios*/
    public function all(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM contratista') ;
        $stm->execute(); 
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e)    {
     die($e->getMessage());
    }
}
    
 public function consultarDocumento(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM tipo_documento');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
 }

 public function consultarGenero(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM generos');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}
public function consultarCargo(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM cargo_contratista');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}
public function consultarLocalidad(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM localidad');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}

public function consultarEps(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM eps');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}

public function consultarSede(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM sedes');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}
/*fin Consultas Usuarios*/

/*Consultas a certificados */

public function contra(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM contrato') ;
        $stm->execute(); 
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e)    {
     die($e->getMessage());
    }
}
public function consultarContratista(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM contratista');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}

public function consultarEstado(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM estado_contrato');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}
public function consultarTipoContrato(){
    try{
        $stm=parent::conectar()->prepare('SELECT * FROM tipo_contrato');
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
}




/*fin a consultar de certificados*/

/*registro de contrato*/

public function registroContrato($Contratista,$NombresCompletos,$NumeroCedula,$FechaInicio,$FechaFin,$Estado,$TipoContrato){
    try{
        $stm = parent::conectar()->prepare("INSERT INTO contrato(fk_contratista,nombreCompleto,cedula,fecha_inicio,fecha_fin,fk_estado,fk_tipo_contrato) VALUES('$Contratista',' $NombresCompletos','$NumeroCedula','$FechaInicio','$FechaFin','$Estado','$TipoContrato')");
        $stm -> execute();
    }catch(Exception $e){
        die($e->getMessage());
        }
    }
    

/*fin registro de contrato*/


/*registro de usuarios*/ 
public function registro($Nombres,$Apellidos,$Clave,$Tipo_documento,$Numero_documento,$Genero,$Cargo,$Edad,$Direccion,$Localidad,$Email,$Celular,$Telefono,$Eps,$Sede_contratista){
    try{
        $stm = parent::conectar()->prepare("INSERT INTO contratista(nombres,apellidos,contraseña,fk_tipo_documento,numero_documento,fk_genero,fk_cargo,edad,direccion,fk_localidad,email,celular,telefono,fk_eps,fk_sede_contratista) VALUES('$Nombres','$Apellidos','$Clave','$Tipo_documento','$Numero_documento','$Genero','$Cargo','$Edad','$Direccion','$Localidad','$Email','$Celular','$Telefono','$Eps','$Sede_contratista')");
        $stm -> execute();
    }catch(Exception $e){
        die($e->getMessage());
        }
    }
/*fin de registro usuarios*/

/*eliminar usuario*/ 

    public function eliminardato($id){
    try{
        $stm=parent::conectar()->prepare("DELETE FROM contratista WHERE id_contratista = $id");
        $stm->execute();
    }catch(Exception $e){
        die($e->getMessage());
        }
            
    }
/*fin de eliminar usuario*/

/*update usuario*/

public function updateCertifi($id_contrato,$fk_estado){
    try{
        $stm = parent::conectar()->prepare("UPDATE contrato SET fk_estado = '$fk_estado' WHERE id_contrato = '$id_contrato'");
        $stm->execute();
            
    }catch(Exception $e){
        die($e->getMessage());
    }
}
/*fin update usuario*/ 


/*update usuario*/

    public function updateUsuario($id_contratista,$Nombres,$Apellidos,$Edad,$Direccion,$Localidad,$Email,$Clave,$Celular,$Telefono,$Eps){
    try{
        $stm = parent::conectar()->prepare("UPDATE contratista SET nombres = '$Nombres' , apellidos = '$Apellidos' , edad='$Edad', direccion='$Direccion', fk_localidad = '$Localidad' , email='$Email',contraseña='$Clave' , celular='$Celular' , telefono='$Telefono' , fk_eps='$Eps' WHERE id_contratista = '$id_contratista'");
        $stm->execute();
            
    }catch(Exception $e){
        die($e->getMessage());
    }
}
/*fin update usuario*/ 

}

 


?>