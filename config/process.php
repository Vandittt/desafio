<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if(!empty($data)){

    if($data["type"] == "register"){

        $nome = $data["nome"];
        $idade = $data["idade"]; 
        $cidade = $data["cidade"];
        $nickname = $data["nickname"];
        $password = $data["password"];

        $query = "INSERT INTO usuario (nickname, password, nome, idade, cidade ) VALUES (:nickname,:password,:nome, :idade, :cidade)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nickname", $nickname);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->bindParam(":cidade", $cidade);

        try{
        
            $stmt->execute();
            
           
        
        }catch(PDOException $e){
            // erro na conexão
            $error = $e ->getMessage();
            echo "Erro: $error";

        }
    } else if($data["type"] == "login"){

        $nickname = $data["nickname"];
        $password = $data["password"];
        

       


        $query = "SELECT * FROM usuario WHERE password = :password AND nickname = :nickname";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nickname", $nickname);
        $stmt->bindParam(":password", $password);

        try{
        
            $stmt->execute();
            
           
        
        }catch(PDOException $e){
            // erro na conexão
            $error = $e ->getMessage();
            echo "Erro: $error";
        



        }

        $quantidade = $stmt->rowCount();

        

        if($quantidade > 0){

            $_SESSION["nickname"] = $data["nickname"];

            
            

            header("Location:" . $BASE_URL . "../home.php");
        }else{

            header("Location:" . $BASE_URL . "../index.php");

        }

    } else if($data["type"] == "edit"){

        $nome = $data["nome"];
        $idade = $data["idade"]; 
        $cidade = $data["cidade"];
        $nickname = $data["nickname"];
        $password = $data["password"];
        $id = $data["id"];

        $query ="UPDATE usuario
             SET nome = :nome, idade = :idade, cidade = :cidade, nickname = :nickname, password = :password
             WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nickname", $nickname);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":id", $id);


        try{
        
            $stmt->execute();
            
           
        
        }catch(PDOException $e){
            // erro na conexão
            $error = $e ->getMessage();
            echo "Erro: $error";
        



        }

    







    } else if($data["type"] == "delete"){


        $id = $data["id"];

        $query ="DELETE FROM usuario WHERE id = :id";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(":id", $id);
    
    
        try{
        
            $stmt->execute();
            
        
        }catch(PDOException $e){
            // erro na conexão
            $error = $e ->getMessage();
            echo "Erro: $error";
    
    
    }
    




    }

        header("Location:" . $BASE_URL . "../index.php");



       

      



    

    

}else {

    $id;

    if(!empty($_GET["id"])){

        $id = $_GET["id"];

    }

    if(!empty($id)) {

        $query = "SELECT * FROM usuario WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $cliente = $stmt->fetch();

    } else {

    $clientes = [];

    $query = "SELECT * FROM usuario";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $clientes = $stmt->fetchAll();

    }


}