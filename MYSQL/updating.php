<?php
    $link = mysqli_connect("localhost","id20612543_chetankumar","CHetan@12","id20612543_chetankumar");
    if($error = mysqli_connect_error())
    echo $error;
    $query = "UPDATE `information` SET `password` = 'chetan@1234' WHERE email = 'chetan@g.com' LIMIT 3 ";
    if(mysqli_query($link,$query))
    echo("<br>succesful");
?>