<?php
if(isset($_POST['valx1'])&&isset($_POST['valx2'])&&isset($_POST['valx3']))
{
    $json_response=array();
    $valor1=$_POST['valx1'];
    $valor2=$_POST['valx2'];
    $valor3=$_POST['valx3'];
    $json_response['n']=$valor1;
    $json_response['r']=$valor2*$valor3;
    echo json_encode($json_response);
    
}else
{
    echo "error";
}
?>