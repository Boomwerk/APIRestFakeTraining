<?php

$post = json_decode(file_get_contents("php://input"));
if(!empty($post)){

    $pseudo = htmlspecialchars( $post->pseudo);
    $email = htmlspecialchars($post->mail);

    if(!empty($pseudo) && !empty($email)){


        $insert = $bdd->prepare("INSERT INTO users(mail, pseudo) VALUES(?,?)");
        $insert->execute([$email, $pseudo]);

        
        echo json_encode([ "status" => 200, "message"=> "adding succefull !" ]);

    }else{

        echo json_encode([ "status" => 500, "message"=> "please complet the forms"]);

    }

}else{
    
    echo json_encode([ "status" => 500, "message"=> "Error method !" ]);
}

    
