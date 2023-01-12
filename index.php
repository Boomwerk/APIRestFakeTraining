<?php
// access control
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    // pdo Connection
    $bdd = new PDO("mysql:host=localhost;dbname=api", "root", "");


    if(isset($_GET) && isset($_GET["page"])){

        if($_GET["page"] === "user" && $_SERVER['REQUEST_METHOD'] === "GET"){

            require "read.php";
        }
        else if($_GET["page"] === "user" && $_SERVER['REQUEST_METHOD'] === "POST"){

            require "insert.php";
        }
        else if($_GET["page"] === "user" && isset($_GET["id"]) && ($_SERVER['REQUEST_METHOD'] === "PUT" || $_SERVER['REQUEST_METHOD'] === "PATCH")){

            require "update.php";

        }else if($_GET["page"] === "user" && isset($_GET["id"]) && $_SERVER['REQUEST_METHOD'] === "DELETE"){
            
            require "delete.php";
        }else{
            if($_GET["page"] != "user"){
                http_response_code(404);
                echo json_encode(["status" => 404,
                "message" => "page not found !"]);
            }else{
                http_response_code(403);
                echo json_encode(["status" => 403,
                "message" => "the key ID is missing !"]);
            }
        }

    }else{
        require "info.php";
    }
    ?>
   