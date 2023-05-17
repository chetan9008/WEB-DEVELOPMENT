<?php
    session_start();
    if($_SESSION["email"])
    {
        echo "You are signed in!";
    }
    else
    {
        header("Location: loopingIndata.php");
    }
?>