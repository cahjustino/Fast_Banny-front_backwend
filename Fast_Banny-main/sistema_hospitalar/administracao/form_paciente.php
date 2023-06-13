<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Formulário de Paciente</title>

  </head>

  <body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <h1>Formulário de Paciente</h1>
    <br><br>
      <form method="post" action="cadastrar_paciente.php">

        <label for="nome_completo">Nome Completo:</label><br>
        <input type="text" name="nome_completo" id="nome_completo" required>
        <br><br>
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" required>
        <br><br>
        <label for="rg">RG:</label><br>
        <input type="text" name="rg" id="rg" required>
        <br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" required>
        <br><br>
        <label for="telefone">Telefone:</label><br>
        <input type="tel" name="telefone" id="telefone" required>
        <br><br>
        <label for="telefone_adicional">Telefone Adicional:</label>  <br>
        <input type="tel" name="telefone_adicional" id="telefone_adicional">
        <br><br>
        <input type="submit" value="Cadastrar">
      </form>
      <footer>
        &copy; 2023 Sistema Hospitalar. Todos os direitos reservados.
      </footer>
  </body
</hmtl>

