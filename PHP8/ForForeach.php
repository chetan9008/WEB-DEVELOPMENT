<!DOCTYPE html>
<html>
    <head>
        <title>
            For loop 
        </title>
    </head>
    <body>
        <script>
            document.write("<h3>For loop in javascript</h3>");
            for(var i=0;i<10;i++)
            {
                document.write(i);
                document.write("  ");
            }
            document.write("<br>");
            var array = new Array("chetan","gaurav","mom","dad");
            array.forEach(display);         // foreach is another loop which takes only array
                                            // and give index as well as value
            
            function display(value,i)       // we can call function outside or inside
            {
                document.write("At " + i + ": " + value+ "<br>"); //foreach works with function
            }

            array.forEach(join);
            function join(value)
            {
                var j = "";
                j += value+" ";
                document.write(j);
            }
        </script>
        <?php
            echo"<h1>For loop in php</h1>";
            for($i=0;$i<10;$i++)        //for loop is same as before 
            {
                echo$i."<br>";
            }
            echo"<p></p>";
            echo"No divisible by 2 :<br>";
            for($i=2;$i<=30;$i++)
            {
                if($i%2 == 0)
                {
                    echo"$i"."<br>";
                }
            }
            echo"Reverse countdown is :<br>";
            for($i=10;$i>=0;$i--)
            {
                echo"$i<br>";
            }
            $family = array("bava","amma","chetan","gaurav","mom","dad");
            echo"My family : <br>";
            for($i=0;$i<sizeof($family);$i++)
            {
                echo $family[$i] ."<br>";
            }

            // foreach loop 

            foreach($family as $i => $value)
            {       
                $family[$i] = $value." kumar";
                echo$value." is at ".$i." index"."<br>";
            }
            echo"another example of foreach: <br>";
            foreach($family as $value)      //in foreach first take array and use (as) to give value or index 
            {
                echo$value."<br>";
            }
            $string = array();
            foreach($family as $index =>$value)
            {
                $string[$index] = $value." ";
            }
            echo"Concatenated string is :";
            foreach($string as $value)
            {
                echo$value." ";
            }
            for($i=0;$i<3;$i++)
            {
                for($j=0;$j<3;$j++)
                {
                    $martrix[$i][$j]  = $i;
                }
            }
            echo"<br>";
            for($i=0;$i<3;$i++)
            {
                for($j=0;$j<3;$j++)
                {
                    echo$martrix[$i][$j]."  " ;
                }
                echo"<br>";
            }
?>
    </body>
</html>