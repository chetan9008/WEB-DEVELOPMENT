<?php
$name = "rob O'grady";
echo $name;
$query = "SELECT `name` FROM `information` WHERE `name` = '".mysqli_real_escape_string($link,$name)."' ";
if($result = mysqli_query($link,$query))
{
    $row = mysqli_fetch_array($result);
    echo $row[0];
}

$array = array();
$query = "SELECT email FROM `information` WHERE email LIKE '%c%' AND id >=4 ";
if($result = mysqli_query($link,$query))
{
    while($row = mysqli_fetch_array($result))
    {
        print_r($row);
    }
}


$query = "SELECT * FROM `information` WHERE `password` = 'chetan@1234' ";
if($result = mysqli_query($link,$query))
{
    while($row = mysqli_fetch_array($result))
    {
        print_r($row);
    }
}

if($result = mysqli_query($link,$query))
{
        while($row = mysqli_fetch_array($result))
        {
            for($i=0;$i<3;$i++)
            array_push($array,$row[$i]);
        }
}
print_r($array);
?>