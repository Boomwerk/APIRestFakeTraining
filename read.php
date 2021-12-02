<?php

if(isset($_GET['id'])){
    $select = $bdd->prepare("SELECT * FROM users WHERE id = ?");
    $select->execute([htmlspecialchars($_GET['id'])]);

    $resultat= $select->fetchAll();
    if($resultat){
        echo json_encode(["status" => 200, "data" => $resultat]);
    }else{
        echo json_encode(["status" => 200, "data" => "la personne n'exite pas !"]);
    }

     
}else{

    $select = $bdd->prepare("SELECT * FROM users");
    $select->execute();

    $resultat= $select->fetchAll();


    echo json_encode(["status" => 200, "data" => $resultat]); 
    
}
