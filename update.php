<?php


if(!empty($_GET)){


   
    $put = json_decode(file_get_contents("php://input"));
    
    
    if(!empty($put->pseudo) && !empty($put->mail)){
        $pseudo = htmlspecialchars($put->pseudo);
        $email = htmlspecialchars($put->mail);


        $insert = $bdd->prepare("UPDATE users SET mail = ? , pseudo = ? WHERE id = ?");
        $insert->execute([$email, $pseudo, htmlspecialchars($_GET["id"])]);

        
        echo json_encode([ "status" => 200, "message"=> "Update Success !" ]);

    }else{

        echo json_encode([ "status" => 500, "message"=> "please complet forms"]);

    }

}else{

    echo json_encode([ "status" => 500, "message"=> "error method !"]);
}
