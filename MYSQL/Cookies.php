<?php
    $link = mysqli_connect("localhost","id20612543_chetankumar","CHetan@12","id20612543_chetankumar");
    if(mysqli_connect_error())
    die("Can't connect");
    // first argument of setcookie is index and secnd is value and third is time 
    // setcookie("name","chetan",time()+60*60*24);//set cookie
    // setcookie("name","",time()-60*60);//reset cookie
    // echo $_COOKIE["name"];

    if($_COOKIE["email"])
    {
        echo "You are sign in ";
    }
    else
    header("Location: loopingIndata.php");
?>