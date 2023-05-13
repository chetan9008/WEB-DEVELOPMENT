<?php
//here i stands for improved 
$link = mysqli_connect("localhost","id20612543_chetankumar","CHetan@12","id20612543_chetankumar");
// if(mysqli_connect_errno()==0)
// {

// }
// else
// {
//     exit("Connection is not connected<br>");
//     //die("connection is not done");
// }
if(mysqli_connect_error())
exit("Connection is not done");


$query = "SELECT * FROM information";//here * stands for all // here information is the name of table
if($result = mysqli_query($link,$query))
    {
        $result = mysqli_fetch_array($result);// fetch and retrieving meaning is same
    }
else
echo("Query is not connected");

echo("<br>Id:");
echo($result["id"]);
echo("<br>Email:");
echo($result["email"]);
echo("<br>Password:");
echo($result["password"]);
?>