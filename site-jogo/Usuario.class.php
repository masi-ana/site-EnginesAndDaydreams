<?php
class Usuario{

    public function login($email,$senha){
        global $conn;

        $sql = "SELECT * FROM sitejogo WHERE email = :email AND senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue("email",$email);
        $sql->bindValue("senha",$senha);
        $sql->execute();

        if ($sql->rowCount() > 0){ return true;}
        else{ return false;}

    }
}


?>