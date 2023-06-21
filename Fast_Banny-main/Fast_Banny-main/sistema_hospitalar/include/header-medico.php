<?php 


include_once('includes.php'); 
include_once('validate.php');

#$medico = medico::getmedico($medico_id);

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Fastbunny -Página médico</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/main.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <a href="#top" class="navbar-brand">Olá,Doutor! <?php echo htmlspecialchars($_SESSION['user']); ?> </a>
               </div>

               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#contato" class="smoothScroll">admin</a></li>
                         a></li>
                         <li><a href="#contato" class="smoothScroll">Prontuario</a></li>
                         <li class="register-btn"><a href="prontuario.php">Consulta</a></li>
                         <li class="logout-btn"><a href="include/logout.php">Logout</a></li>
                    </ul>
               </div>

          </div>
     </section>