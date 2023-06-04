<!DOCTYPE html>
<html>
    <head>
        <title>
            Array in php 
        </title>
    </head>
    <body>
        <script>
            
            document.write("<h3>Javascript array</h3>");
            var array = [];
            for(var i=0;i<10;i++)
            {
                array.push(i);
            }
            document.write(array);
            array.splice(0,1);
            array.pop();
            array.splice(0,9);
            document.write(array);
            document.write("<p></p>");
            document.write(array.length);
            var anotherarray = new Array(10,20,30);
            // for(var i=0;i<10;i++)
            // {
            //     anotherarray[i] = i;
            // }
            for(var i=0;i<anotherarray.length;i++)
            {
                document.write("<br>");
                document.write(anotherarray[i]);
            }
        </script>
        <?php
            echo"<h1>PHP array</h1>";   //write on page
            $array = array(1,2,3,4,5);      //here we initilize array
            print_r($array);       // here r stands for receipt 
            
            $anotherArray = array();
            $anotherArray[0] = "chetan";
            $anotherArray[1] = "gaurav";
            $anotherArray[2] = "sparsh";
            $anotherArray[3] = "hanuman ji";
            echo"<br><br>";
            $anotherArray["Friend"] = "Aman";   //we can also give userdefine index to array
            print_r($anotherArray);             //this is special type to print array
            echo"<br><br>";
            $thirdArray = array("classmate" => "harsh","collegemate" => "Sourabh","friend" => "Aman");  // to initize user define index at initially 
            print_r($thirdArray);
            echo"<br><br>";
            echo"Size of another array is :";
            echo sizeof($anotherArray);     //sizeof() used to give the no of elements in array 
            $anotherArray[] = "cheetah";
            array_push($anotherArray,1,2);  //array_push() to push at end
            array_splice($anotherArray,0,sizeof($thirdArray),$thirdArray); // array_splic for editing 
            array_splice($anotherArray,3,5);
            echo"<br><br>";
            print_r($anotherArray);

            $specialindex = array();

            $specialindex["first"] = "chetan";
            $specialindex["second"] = "gaurav";
            $specialindex["third"]  = "aman";
            
            echo("<br><br>");
            print_r($specialindex);
            echo("<br><br>");
            echo $specialindex["third"];
        ?>
    </body>
</html>