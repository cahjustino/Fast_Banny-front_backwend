<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
        <title>Admin Dashboard</title>
    </head>
    <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <div class="container-fluid">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-2" style="margin-left: -30px;">
                        <?php
                        include("sidenav.php");
                         ?>
                    </div>
                    <div class="col-md-10">
                        <h4 class="my-2">Admin Dashboard</h4>

                        <div class="col-md-12 my-1>
                            <div class="row">
                            <div class="col-md-3 bg-success   mx-2" style="height: 130px;">   
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2  text-white text-center" style=font-size:30px; >0</h5>
                                             <h5 class="text-White">total</h5>
                                             <h5 class="text-White">Admin</h5>
                                        </div>
                                        <div class="col-md-3">
                                        <i class="fa"></i>
                                        </div>
                                    </div>
                                </div>     

                            </div>
                                <div class="col-md-3 bg-info mx-2" style="height: 130px;">
                                    

                                </div>
                                <div class="col-md-3 bg-warning mx-2 " style="height: 130px;">
                                    

                                </div>
                                <div class="col-md-3 bg-danger mx-2 mix-1" style="height: 130px;">
                                    

                                </div>
                                <div class="col-md-3 bg-warning mx-2 mix-1" style="height: 130px;">
                                    

                                </div>
                                <div class="col-md-3 bg-success mx-2 mix-1" style="height: 130px;">
                                    

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
 