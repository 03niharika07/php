<html>
    <head><title>PHP ARRAYS</title></head>
    <body>
        <center>
            <?php

            // ARRAY - collection of homogeneous or heterogeneous data types

            /*
            Array ->
            Simple array
            Associate array 
            */

            // Simple Array
            $ar = array("One","Two","Three","Four",24.66,true);
            print_r($ar);  // print array with index
            echo "<br>";

            for($i=0;$i<count($ar);$i++){
                echo $ar[$i]," ";   // print array elements
            }
            echo "<br>";
            echo "<br>";


            // Associative Array - apne according index rkh skte
            $arr = ["a"=>"Indore","b"=>"Mumbai","c"=>"Delhi"];
            print_r($arr);
            echo "<br>";
            echo "<br>";

            // To use negative indexes
            $newArray = array_slice($ar,0,6);
            print_r($newArray);
            echo "<br>";

            $newArray = array_slice($ar,-4,6);
            print_r($newArray);
            echo "<br>";



            ?>
        </center>
</body>
</html>