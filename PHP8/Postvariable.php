<?php echo ("<h1>Pallindrome section</h1>");
if ($_POST["name"]) {
    $temp = strrev($_POST["name"]);
    if (strcmp($temp, $_POST["name"]) == 0) echo ("$temp is pallindrome");
    else echo ($_POST["name"] . " is not pallindrome");
}

echo("<h1>Taj Hotel </h1>");

if($_POST["name"])
{
    $vip = array("chetan","gaurav","shashi","sunil","sparsh","aman");
    $check = false;
    foreach($vip as $value)
    {
        if($value == $_POST["name"])
        {
            $check = true;
        }
    }
    if($check == true)
    {
        echo("Welcome! " . $_POST["name"] . "<br>");
    }
    else
    {
        echo("Sorry! you are not in list");
    }
}
?>
<form method="post">
    <p>Enter the name:</p> <input type="text" name="name"> <input type="submit" value="Enter">
</form>

<!-- post variable is same as get variable but it is more secure than it
    because it don't inject to the url 
-->