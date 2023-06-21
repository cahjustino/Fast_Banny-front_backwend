<?
include_once('include/header-medico.php'); 
include_once('include/includes.php'); 

 
?>

<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Suas Consultas</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <?php
                    $resultados = '';
                    $consultas = Consulta::getConsultas();
                    foreach($medico as $consulta) { 
                    $agenda = Agenda::getAgenda($medico_id_fk);
                    $medico = Medico::getMedico($agenda->medico_id_fk);
                     $resultados .= 
                '<div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/appointment.jpeg" class="img-responsive" alt="">
                <div class="team-info">
                    <h3>'.$consulta->consulta_data.'</h3>
                    <h5>'.$agenda->agenda_hora.'</h5>
                    <p>'.$medico->medico_nome.'</p>
                    <ul class="social-icon">
                        <li><a href="editar_consulta.php?id='.$consulta->consulta_id.'" class="fa fa-pencil"></a></li>
                    </ul>
                </div>
            </div>
        </div>';
}
echo $resultados;
?>

        
        </div>
    </div>
</section>

<!-- Dados da página seguinte -->

  <h1>Bem-vindo à Página do Médico</h1>


  <img src="images/medical-record.jpg" class="img-responsive" alt="">
  <h5>use os links no menu para acessar as páginas<h5>

<?php include_once('include/footer.php'); ?>


