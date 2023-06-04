<!DOCTYPE html>
<html>
    <head>
        <title>
            If statement
        </title>
    </head>
    <body>
        <script>
            document.write("<h3>Javascript</h3>")
            var check = "rob";
            if(check == "rob")
            {
                document.write("hello rob");
            }
            else
            {
                document.write("i don't know you");
            }
            document.write("<br><br>");
            document.write(Math.floor(Math.random()*100));
        </script>
        <?php
            echo"<h2>PHP </h2>";
            $check = true;
            if($check == true)
            {
                echo "you are saying true";
            }
            else
            {
                echo"you are saying false";
            }
            $check = rand(1,100);
            echo"<p></p>";
            if($check %2 == 0)
            {
                echo"$check is even no";
            }
            else
            {
                echo"$check is odd no";
            }
            $age = rand(10,30);
            $user = "chetan";
            echo"<p></p>";
            if($age < 18 && $user != "chetan")
            {
                echo"Your age is $age   ";
                echo"You are eligible for this";
            }
            else
            {
                echo"Your age is $age   ";
                echo"Welcome to the game";
            }
            echo"<p></p>";
            $year = rand(1900,2023);
            if(($year % 4 == 0 )||($year % 400 == 0 )&&($year % 100 == 0))
            {
                echo"$year is leap year";
            }
            else
            {
                echo"$year is not leap year";
            }
        ?>
    </body>
</html>