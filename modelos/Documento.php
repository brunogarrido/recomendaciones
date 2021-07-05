<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Documento
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	public function listarDoc($Fecha_I,$Fecha_F,$NoDoc)
	{
		$i=strtotime($Fecha_I);
		$f=strtotime($Fecha_F);
		$F_I=date("Ymd", $i);
		$F_F=date("Ymd", $f);
		$sql="SELECT CONCAT(A.NUMERO,'/',YEAR(FECHA)) NUMERO,ASUNTO, AUTORIDAD, CONTENIDO_RELACIONADO CONTENIDO,B.DESCRIPCION ESTADO,LINK
 			FROM DOCUMENTO A
 			INNER JOIN ESTADO B ON A.ID=B.ID";
 			 /*WHERE FECHANUM>=$F_I AND FECHANUM<=$F_F  

 			  AND TIPO_DOCU=$NoDoc";*/
 			//echo $sql;
		return ejecutarConsulta($sql);		
	}

}

?>