<?php
$link = mysqli_connect("localhost","","CHetan@12","");
$salt = 77;
$password = "chetan";
$password = md5(md5($salt).$password);
$query  = "UPDATE information SET `password` = '$password' WHERE id = 16 LIMIT 1 ";
if(mysqli_query($link,$query))
{
    echo ("updated");
}
else
{
        echo("not updated");
}
?>