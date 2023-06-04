<!DOCTYPE html>
<html>

<head>
    <title>
        Get variable in php
    </title>
</head>

<body>
    <script></script>
    <?php
    // $_GET is a array which takes information from url or input tag
    if($_GET["number"]&&$_GET["number"]>0&&$_GET["number"] == round($_GET["number"],0))
    {
        echo ($_GET["number"]);
        echo("<br>");
        $n = $_GET["number"];
        $count = 0;
        for ($i = 1; $i <= ($n); $i++) {
            if (($n % $i) == 0)
                $count++;
        }
        if (($count == 2) || ($n == 1))
            echo ($n . "is prime");
        else
            echo ($n . "is not prime");
    }
    else
    {
        echo("Please enter the valid number");
    }
    
    // echo("<p></p>");
    // echo("<h3>Form with php</h3>");
    // print_r($_GET);
    // echo ("<br>Name:");
    // echo ($_GET["name"]);
    // echo ("<br>Class:");
    // echo ($_GET["class"]);
    // echo ("<br>Gender:");
    // echo ($_GET["gender"]);
    // echo ("<h2>Form </h2>");


    ?>


    <p>Enter any number:</p>
    <form>
        <input type="text" name="number"><!--This (name) arrtibute give the index of element in $_GET array-->
        <input type="submit" value="Enter"> <!--Here we find the use of submit in input-->
    </form>
    <!-- <p>Enter your name:</p>
    <p>Enter your class:</p>
    <p>Enter your gender:</p>
    <form>

        <input type="text" name="name">
        <input type="text" name="gender">
        <input type="text" name="class">
        <p>
            <input type="submit" value="Submit">
        </p>
    </form> -->


</body>

</html>