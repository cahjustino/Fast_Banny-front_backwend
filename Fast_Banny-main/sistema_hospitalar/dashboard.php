<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
    body {
      font-family: Arial, sans-serif;
    }

    .dashboard {
      display: flex;
    }

    .section {
      flex: 1;
      padding: 20px;
      background-color: #f1f1f1;
    }

    .section h2 {
      margin-top: 0;
    }

    .menu {
      list-style-type: none;
      padding: 0;
    }

    .menu li {
      margin-bottom: 10px;
    }

    .menu a {
      text-decoration: none;
      background-color: #3d89d1;
      color: #333;
      padding: 10px;
      display: block;
      border-radius: 5px;
    }

    .menu a:hover {
      background-color: #ccc;
    }
  </style>
  
  <title>Dashboard</title>
  
  
</head>
<body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <div class="dashboard">
    <div class="section">
      <h2>Administração</h2>
      <ul class="menu">
        <li><a href="./administracao/form_paciente.php">Formulário de Paciente</a></li>
        <li><a href="./administracao/gernciamento.php">Gerenciamento</a></li>
        <li><a href="./administracao/resgistrar.php">Registrar</a></li>
      </ul>
    </div>
    <div class="section">
      <h2>Médico</h2>
      <ul class="menu">
        <li><a href="./medico/prontuario.php">Prontuário</a></li>
        <li><a href="./agendamento.html">Agendamento</a></li>
      </ul>
    </div>
    <div class="section">
      <h2>Paciente</h2>
      <!-- Conteúdo da seção do Paciente -->
      <ul class="menu">
        <li><a href="./paciente/agendamento_paciente.php">Agendamento</a></li>
      </ul>
    </div>
  </div>
  <footer>
    &copy; 2023 Sistema Hospitalar. Todos os direitos reservados.
  </footer>
</body>
</html>
