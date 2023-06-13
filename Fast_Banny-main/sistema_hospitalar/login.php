<?php
session_start();
include("include/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Pagina de Login da Administração</title>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" i>

    </head>
    <body style="background-image: url(/img/hospital.jpg);background-repeat:no-repeat;background-size:cover;">
        
        <div style="margin-top: 40px;"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-6 jumbotron">
                        <img src="/img/admin_login.jpg" class="col-md-12">
                        <form method="post" class="my-2">

                                <div class="alert alert-danger">
                                    <?php 
                                    if(isset($error['admin'])){
                                        $sh= $error['admin'];
                                        $show = "<h4 class='alert alert-danger'>$sh</h4>";

                                        echo $show;

                                    }else{
                                        $show ="";
                                    }

                                    echo $show;
                                    

                                    ?>
                                </div>
                            <div class="form-group">
                                <label>username</label>
                                
                                <input type="text" name="uname" class="form-control" 
                                autocomplete="off" placeholder="enter username">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>password</label>

                                <imput type="password" name="pass" class="form-control">

                            </div>

                            <input type="submit" name="login" class="btn btn-success" value="login">

                            
                        </form>
                    </div>
                    <div class="col-md-3"> 

                    </div>

                </div>

                </div>

            </div>
        </div>

    </body>
</htm>