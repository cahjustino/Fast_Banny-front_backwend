<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Formulário de Prontuário Médico</title>

  </head>
  <body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <h2>Formulário de Prontuário Médico</h2>
    
    <form action="processar_formulario.php" method="post">
       
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="idade">Idade:</label><br>
    <input type="number" name="idade" id="idade" required><br><br>

    <label for="sintomas">Sintomas:</label><br>
    <textarea name="sintomas" id="sintomas" rows="4" cols="50" required></textarea><br><br>

    <label for="diagnostico">Diagnóstico:</label><br>
    <textarea name="diagnostico" id="diagnostico" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Enviar">
    
    </form>

</body>

</html>

