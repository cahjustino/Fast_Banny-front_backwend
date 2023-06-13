
    <!-- Font Awesome -->
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css" >

   
  <body class="nav-md">
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>

 <button type="button" class="btn btn-primary btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  Inserir
</button>
    
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="horario_medico_add.php" enctype="multipart/form-data" class="form-horizontal">
       
      <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Medico</label>
                        <div class="input-group col-sm-8">
       <select class="form-control select2" name="id_medico" required>
                    
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>

          

   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Dia de Trabalho</label>
                        <div class="input-group col-sm-8">
                          <select class="form-control select2" name="dia_laborable" required>

                  <option value="lunes">segunda</option>
                       <option value="martes">terça/option>
               <option value="miercoles">quarta</option>
                <option value="jueves">quinta</option>
                <option value="viernes">sexta</option>
                  <option value="sabado">sabado</option>
        <option value="domingo">domingo</option>
              </select>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>


   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Hora de Inicio</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="hora_inicio" name="hora_inicio" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>


   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Hora final</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="hora_fin" name="hora_fin" required >
                        </div><!-- /.input group -->
                      </div>

     </div>

        <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Tempo de duração</label>
                        <div class="input-group col-sm-8">
                          <select class="form-control select2" name="cita_duracion" required>

                  <option value="15 minutos">15 minutos</option>
                       <option value="20 minutos">20 minutos</option>
               <option value="30 minutos">15 minutos</option>
                <option value="45 minutos">45 minutos</option>
                <option value="60 minutos">60 minutos</option>
      
              </select>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                    

                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="">inserir</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>
 <!--end of modal-->

<br>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impressão</a>

<br>
<form class = "btn btn-white btn-print">
                      busca: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

</form>


                  <div class="box-header btn btn-primary" >
                  <h3 class="box-title"> LISTA HORARIO</h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                
                  <table id="example22" class="table table-bordered table-striped">
                    <thead>
                      <tr class=" btn-success">
                          <th> Dia de trabalho </th>
                          <th> Hora inicio </th>
                  <th> Hora termino </th>
                  <th> Duração </th>
                       <th class="btn-print"> ação </th>

                      </tr>
                    </thead>
                    <tbody>

   

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_empresas'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Detalhes de Ação da EMPRESA</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="empresa_update.php" enctype='multipart/form-data'>

        <div class="form-group">
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id" name="id_empresas" value="<?php echo $row['id_empresas'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">conta</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="cuenta" value="<?php echo $row['cuenta'];?>"   required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Nota/Id fiscal</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="ruc_nit" name="ruc_nit" value="<?php echo $row['ruc_nit'];?>"   required>
          </div>
        </div>
                      <div class="form-group">
          <label class="control-label col-lg-3" for="price">Rasão Social</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="razon_social" name="razon_social" value="<?php echo $row['razon_social'];?>"   required>
          </div>
        </div>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Gravar</button>
                <button type="button" class="btn btn-primary" data-dismiss="mgraodal">Fechar</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->


                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->


                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <footer>
    &copy; 2023 Sistema Hospitalar. Todos os direitos reservados.
  </footer>

  
  </body>
</html>
