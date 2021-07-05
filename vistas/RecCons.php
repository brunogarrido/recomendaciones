
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Constancias</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link rel="stylesheet" href="../public/css/bootstrap.min.css">

     <!-- Style -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">




    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="LogoM" href="../public/img/LogoM.jpg">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
  </head>
  <body class="hold-transition skin-red sidebar-mini">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                         
                         
                          <div class="page-header">
                          <label id="titulo" class="display-4" >DOCUMENTOS</label> 
                          </div> 
                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA INICIO(*):</label>
                            <input type="date" class="form-control" name="FECHA_I" id="FECHA_I" required="">
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA FIN(*):</label>
                            <input type="date" class="form-control" name="FECHA_F" id="FECHA_F" required="">
                          </div> 
                          <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                             <label>TIPO DOCUMENTO(*):</label>
                             <select id="NODOC" name="NODOC" class="form-select
                             "  title="Elige alguno" data-live-search="true" data-style="btn-primary" required="">
                              <option  selected="" value="TIPO_DOCU">TODOS</option>
                              <option value="1">RECOMENDACIÓNES</option>
              							  <option value="2">CONSILIACIONES</option>
              							 </select>
                            </div>

                             <button class="btn btn-success" id="btbuscar" onclick="listar()">
                            BUSCAR</button> 
                         
                      </div>  
                   
                      <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table" >
                              
                          <thead >
                            
                            <th >DOC</th>
                            <th >CONTENIDO</th>
                            <th >ASUNTO</th>
                            
                          
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                     </div>

                   

                    <!-- /.box-header -->
                    <!-- centro -->
                    
                   
             <!--Fin centro -->
                 
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
 
<?php


require 'footer.php';

?>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>s
<script type="text/javascript" src="scripts/RecCons.js"></script>
