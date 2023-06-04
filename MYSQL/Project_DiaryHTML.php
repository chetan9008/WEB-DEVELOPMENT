<?php
session_start();
include("connection.php");
if(array_key_exists("diary",$_POST))
{
    echo $_POST["diary"];
    $query = "UPDATE information SET diary = '".mysqli_real_escape_string($link,$_POST["diary"])."' WHERE  id = '".mysqli_real_escape_string($link,$_SESSION["id"])."'";
    if(mysqli_query($link,$query))
    {
        echo "successful";
    }
}
?>