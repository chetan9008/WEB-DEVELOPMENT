<!DOCTYPE html>
<html>
    <head>
        <title>
            While loop
        </title>
    </head>
    <body>
        <script>
            document.write("<h3>JAVASCRIPT WHILE LOOP</h3>");
            var i=1;
            while(i<=10)
            {
                document.write(i+"<br>");
                i++;
            }
        </script>
        <?php
            echo"<h2>PHP WHILE LOOP</h2>";
            $i = 0;
            while($i<=10)
            {
                echo("$i<br>");
                $i++;
            }
            echo("<h3>List of leap year:</h3>");
            $year = 1900;
            while($year!=2023)
            {
                if((($year%4==0)&&($year %100 !=0))||(($year%400==0)&&($year%100==0)))
                {
                    echo($year."<br>");
                }
                $year++;
            }
            echo("<h3>5 TABLE : </h3>");
            $year = 1;
            $i=0;
            while($year != 51)
            {
                if($year%5==0)
                {
                    $i++;
                echo("5 &times $i = $year"."<br>");
                }
                $year++;
            }
            echo("<h3>Family Array :</h3>");
            $array = array("mine" => "chetan","brother"=>"gaurav","mother"=>"mom","father"=>"dad");
            $family = array();
            array_push($family,"chetan");
            array_push($family,"gaurav");
            array_push($family,"mom");
            array_push($family,"dad");
            $i=0;
            while($i<sizeof($family))
            {
                echo($family[$i]."<br>");
                $i++;
            }
            echo("<h3>Displaying using foreach</h3>");
            foreach($family as $value)
            {
                echo("$value"."<br>");
            }
            echo("<h3>How many sundays in april</h3>");
            $i=1;
            while($i<=31)
            {
                if($i%7==0)
                echo("$i is Sunday"."<br>");
                $i++;
            }
        ?>
    </body>
</html>