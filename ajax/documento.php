<?php 
session_start();
require_once "../modelos/Documento.php";
// require_once "../modelos/Camiones.php";
 
$Documento=new Documento();
//$NOUSUARIO=$_SESSION['nousuario'];
//$idusuario=$_SESSION["nousuario"];
 


$Fecha_I=isset($_GET["FECHA_I"])? limpiarCadena($_GET["FECHA_I"]):"";
$Fecha_F=isset($_GET["FECHA_F"])? limpiarCadena($_GET["FECHA_F"]):"";
$NoDoc=isset($_GET["NODOC"])? limpiarCadena($_GET["NODOC"]):"";
//$NOMINERAL=isset($_GET["NOMINERAL"])? limpiarCadena($_GET["NOMINERAL"]):"";
//$AI2O3=isset($_POST["AI2O3"])? limpiarCadena($_POST["AI2O3"]):"";
//$P2O5=isset($_POST["P2O5"])? limpiarCadena($_POST["P2O5"]):"";
//$HUMEDAD= isset($_POST["HUMEDAD"])? limpiarCadena($_POST["HUMEDAD"]):"";
//$GRANULOMETRIA=isset($_POST["GRANULOMETRIA"])? limpiarCadena($_POST["GRANULOMETRIA"]):"";


 
switch ($_GET["op"]){
   case 'guardaryeditar': 

        //$Fechanum=$Fecha_hora;
       // $Fechanum = date("Ymd");
    	$rspta=$Lote->validarEmbarque($VNOCONTROL);
        $fetch=$rspta->fetch_object();
        
        if (isset($fetch))
        { 
        $rspta=$Lote->insertar($idusuario,$VNOCONTROL,$_POST["nocontrol"]);
         //  echo $rspta;
        echo $rspta ? "Lote registrado" : "Lote no se pudo registrar";
           //debug_to_console("".$rspta);
    }
    else
      	echo "EMBARQUE NO LOCALIZADO";
       
        
    break;
    
     case 'listarDoc':
        $rspta=$Documento->listarDoc($Fecha_I,$Fecha_F,$NoDoc);
        $data= Array();
      
        while ($reg=$rspta->fetch_object()){
            
            $data[]=array(  
            "0"=>$reg->NUMERO,                                   
                "1"=>'<button class="btn btn-info"><a target="_blank" href="'.$reg->LINK.'"><i class="fas fa-book" title="Documento Relacionado"></i></button></a>',
                "2"=>$reg->ASUNTO,
                "3"=>$reg->AUTORIDAD,
                "4"=>'<button class="btn btn-light "> <a target="_blank" href="'.$reg->CONTENIDO.'"><i class="fa fa-bullhorn" title="Documento de Interés"></i></button></a>',
          
               );
        }
        $results = array(
            "sEcho"=>1, //Información para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
       // echo json_encode($results);
        echo json_encode($data);
      //  echo $data;
    break;
    
   

    
}
ob_end_flush();


function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "console" . $output ;
  //  echo $output;
     }
?>