<?php


class Usuarios extends DB{

    public function requestCorreo($Email){

    try{
        $stm=parent::conectar()->prepare("SELECT * FROM contratista where email = ? ");
        $stm->bindParam(1,$Email,PDO::PARAM_STR);
        $stm->execute();
        return$stm->fetch(PDO::FETCH_OBJ);

    }catch(Exception $e){
        die($e->getMessage());
    }
}

    


}



?>