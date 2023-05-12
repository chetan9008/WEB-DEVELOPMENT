<?php
mysqli_connect("localhost","id20612543_chetankumar","CHetan@12");
echo mysqli_connect_error(); // gives nothing on success 
echo mysqli_connect_errno();// gives 0 on success
echo("<br>");
if(mysqli_connect_error())
{
    echo("<br>This is the error " . mysqli_connect_error());
}
else
echo("Connection is successful<br>");


if(mysqli_connect_errno() == 0)
{
    echo("Connection is successful<br>");
}
?>