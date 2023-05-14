<?php
$link = mysqli_connect("localhost","id20612543_chetankumar","CHetan@12","id20612543_chetankumar");
if($error = mysqli_connect_error())
echo $error;
else
echo "Successful<br>";
$email = "chetan@dskjflka.com";
$password = "kda;lkakfalkdjflak";
$query = "INSERT INTO `information` (`email`,`password`) VALUES('$email','$password')";//here single quotest is required 
if(mysqli_query($link,$query))
echo("Query is successful");
$query = "SELECT * FROM `information`";
if($result = mysqli_query($link,$query))
{
    $result = mysqli_fetch_array($result);
    echo $result['email'];
}
?>