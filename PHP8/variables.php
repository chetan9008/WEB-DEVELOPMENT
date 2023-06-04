<!DOCTYPE html>
<html>
    <head>
        <title>
            Variables in php
        </title>
    </head>
    <body>
        <script>

        </script>
        <?php       // opening tag
        echo"<p>hello there</p>";   //to display echo is used 
        $name = "Chetan";           // $ sign is used to make any thing variable
        echo$name;                  //we also use $variable-name to display the contend of variable
        echo "<p>My name is $name</p>"; //we don't use \n we use paragraph tags for formatting
        $string1 = "<p>I love";
        $string2 = "php</p>";
        echo $string1." ".$string2;   // to cascade we use (.)

        $number;
        $number = 12;       //we can also store numbers
        echo$number;
        $sum =12;
        $sum += $number;
        echo"<p></p>";
        echo"Sum of Number is ".$sum;

        echo"<p></p>";
        $boolean = true;        //true value in php is 1
        echo"True value is :".$boolean;
        $false = false;         //false value in php is null or nothing
        echo"<p></p>";
        echo"False value is : ".$false;

        echo"<p></p>";
        $hidden = "string1";
        echo$$hidden." Mia Kalifa";     //Like this way we access other variable as well
      //closing tag  ?>      
    </body>
</html><!DOCTYPE html>
<html>
    <head>
        <title>
            Variables in php
        </title>
    </head>
    <body>
        <script>

        </script>
        <?php       // opening tag
        echo"<p>hello there</p>";   //to display echo is used 
        $name = "Chetan";           // $ sign is used to make any thing variable
        echo$name;                  //we also use $variable-name to display the contend of variable
        echo "<p>My name is $name</p>"; //we don't use \n we use paragraph tags for formatting
        $string1 = "<p>I love";
        $string2 = "php</p>";
        echo $string1." ".$string2;   // to cascade we use (.)

        $number;
        $number = 12;       //we can also store numbers
        echo$number;
        $sum =12;
        $sum += $number;
        echo"<p></p>";
        echo"Sum of Number is ".$sum;

        echo"<p></p>";
        $boolean = true;        //true value in php is 1
        echo"True value is :".$boolean;
        $false = false;         //false value in php is null or nothing
        echo"<p></p>";
        echo"False value is : ".$false;

        echo"<p></p>";
        $hidden = "string1";
        echo$$hidden." Mia Kalifa";     //Like this way we access other variable as well
      //closing tag  ?>      
    </body>
</html>