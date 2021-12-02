<?php

if(!empty($_GET) && !empty($_GET["id"])){

    $insert = $bdd->prepare("DELETE FROM users WHERE id = ?");
    $insert->execute([htmlspecialchars($_GET["id"])]);

    
    echo json_encode([ "status" => 200, "message"=> "deleted succefull" ]);

}else{
    
    echo json_encode([ "status" => 500, "message"=> "error method !" ]);
}
