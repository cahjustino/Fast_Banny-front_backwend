<!doctype html>
<html lang="pt-br">
<header>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

  <title>Página de Informações do Hospital</title>
</header>
<body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <header>
        <h1>Sobre o Hospital</h1>
    </header>
    <section id="about">
        <h2>Sobre o Hospital</h2>
        <p>O hospitam Geral conta com uma ampla estrutura ,totalmente equipado e atualizado com a melhor tecnologia na area médica cirurgica</p>
    </section>
    
    <section id="team">
        <h2>Equipe Médica</h2>
        <ul>
            <?php include 'team.php'; ?>
        </ul>
        <p>Equipe medica totalmente dedicada aos paciententes</p>
    </section>
    
    <section id="services">
        <h2>Serviços</h2>
        <p>Informações sobre os serviços oferecidos pelo hospital.</p>
        <p>
            <ol>
                <li>clinica Médica</li>
                <li>Centro Cirurgico</li>
                <li>Pediatria</li>
                <li>Obstetricia</li>
            <Ol>
        </p>
    </section>
    
    <section id="facilities">
        <h2>Instalações</h2>
        <p>Informações sobre as instalações e recursos do hospital.</p>
        <p></p>
    </section>
    
    <section id="hours">
        <h2>Horário de Funcionamento</h2>
        <p>Horário de funcionamento do hospital e informações de emergência.</p>
        <p></p>
    </section>
    
    <section id="appointments">
        <h2>Agendamento de Consultas</h2>
        <p>Informações sobre como agendar consultas no hospital.
        </p>
        <p>Agendamentos podem ser feito diretamente na pagina  de login do paciente</p>

    </section>
    
    <section id="insurance">
        <h2>Planos de Saúde</h2>
        <p>Informações sobre os planos de saúde aceitos pelo hospital.</p>
        <p>unimed</p>
        <p>apvida</p>
        <p>bradesco saúde</p>
        

    </section>
    
    <section id="contact">
        <h2>Informações de Contato</h2>
        <p>Informações de contato do hospital.</p>
        <p>
        end: av das Gaivotas
        N°:124
        bairo:Jd Tesouro
        cidade:divinópolis
        tel:11-2568453
        </p>
    </section>

</body>
<footer>
    &copy; 2023 Sistema Hospitalar. Todos os direitos reservados.
  </footer>
</html>