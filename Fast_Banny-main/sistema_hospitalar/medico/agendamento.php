<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >

  <title>Agendamento de Pacientes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 600px;
      margin: 0 auto;
    }
    
    h1 {
      text-align: center;
    }
    
    #calendar {
      display: inline-block;
      width: 400px;
      border: 1px solid #ccc;
      padding: 10px;
    }
    
    #calendar table {
      width: 100%;
    }
    
    #calendar th,
    #calendar td {
      text-align: center;
      padding: 5px;
    }
    
    #calendar th {
      background-color: #f2f2f2;
    }
    
    #calendar td:not(.disabled):hover {
      background-color: #f2f2f2;
      cursor: pointer;
    }
    
    .disabled {
      color: #ccc;
    }
    
    .selected {
      background-color: blue;
      color: white;
    }
    
    label {
      display: block;
      margin-top: 10px;
    }
    
    input[type="text"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
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
    <h1>Agendamento de Pacientes</h1>
    <div id="calendar"><a href=""></a></div>
    <form>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      
      <label for="data">Data:</label>
      <input type="text" id="data" name="data" readonly required>
      
      <input type="submit" value="Agendar">
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        selectable: true,
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        dateClick: function(info) {
          var dateStr = info.dateStr;
          document.getElementById('data').value = dateStr;
        }
      });
      calendar.render();
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</body>
</html>
