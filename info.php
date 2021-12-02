<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- style bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            /* td{
                width: 20%;
            } */
        </style>
        <title>API Boomwerk</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Boomwerk API FAKE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?page=user">Page Read</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        

        <div class="container mt-5">

        <h1>Boomwerk API FAKE TRAINING</h1>
            
                
            <p>this api is a list of person where you can add, read, update and delete a datas, is good for training <br> the data is deleted everyday at 11pm and if you exceed 250 datas, Enjoy ! </p>
                

                
           

            <div class="card mt-5">
                <div class="card-body p-2">
                    <p>for use api you can access with this link: </p>

                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Links</th>
                                <th scope="col">data</th>
                                <th scope="col">Methods</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td colspan="1"><a href="index.php?page=user"> index.php?page=user </a></td>
                                <td></td>
                                <td>GET</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td colspan="1"><a href="index.php?page=user"> index.php?page=user&id=1</a></td>
                                <td></td>
                                <td>GET</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="1"> <a href="index.php?page=user&id=1">index.php?page=user</a></td>
                                <td> { "pseudo": "lorem" ,"mail": "lorem@lorem.fr"}</td>
                                <td>POST</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td colspan="1"> <a href="index.php?page=user&id=1">index.php?page=user&id=1</a></td>
                                <td> { "pseudo": "lorem" ,"mail": "lorem@lorem.fr"}</td>
                                <td>PUT / PATCH</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td colspan="1"> <a href="index.php?page=user&id=1">index.php?page=user&id=1</a></td>
                                <td></td>
                                <td>DELETE</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                
            </div>


        </div>
        <!-- script bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>