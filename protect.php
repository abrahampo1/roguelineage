<?php
include("database.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION["user_id"]))
{
    $usuario = $_SESSION["user_id"];
    $sql = "SELECT * FROM users WHERE id = '$usuario'";
    $do = mysqli_query($link , $sql);
    if($do->num_rows != 1)
    {
        echo 'You seem to love COCKies... - Abrahampo1';
        exit;
    }
}else
{
}
?>