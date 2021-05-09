<?php
include "conexion.php";
$link = mysqli_connect("localhost","root","");
  
  if($link){
    mysqli_select_db($link,"coviddb");
  }

  $checkbox1 = $_POST['checkbox'];
  if ($_POST["checkbox"]=="checkbox")  
    {  
    for ($i=0; $i<sizeof ($checkbox1);$i++) {  
    $query="INSERT INTO tblprueba (p1) VALUES ('".$checkboxl[$i]. "')";  
    mysql_query($query) or die(mysql_error());  
    }  
    echo "Datos insertados";  
    }else
    echo "datos no guardados";
?>
