<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css" >

  <title>Sistema de Agendamento de Consultas</title>
  <style>
    /* Estilos CSS */
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      text-align: center;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    form {
      margin-bottom: 20px;
    }
    label, input, select {
      display: block;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <div class="container">
    <h1>Sistema de Agendamento de Consultas</h1>

    <!-- Formulário de Agendamento -->
    <form action="agendamento.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="data">Data:</label>
      <input type="date" id="data" name="data" required>

      <label for="hora">Hora:</label>
      <input type="time" id="hora" name="hora" required>

      <input type="submit" value="Agendar Consulta">
    </form>

    <!-- Tabela de Visualização de Consultas -->
    <h2>Consultas Agendadas</h2>
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Data</th>
          <th>Hora</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aqui você precisará inserir os dados das consultas dinamicamente usando PHP -->
        <tr>
          <td>John Doe</td>
          <td>john@example.com</td>
          <td>2023-06-10</td>
          <td>14:00</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>jane@example.com</td>
          <td>2023-06-12</td>
          <td>10:30</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
