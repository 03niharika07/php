<html>
    <head><title>PHP ARRAY INBUILT FUNCTIONS</title></head>
    <body>
        <center>
            <?php

            $a1 = array("Mon","Tues","Wed","Sat");
            $a2 = array("Mon","Wed","Thurs","Feb","Tues");
            $a3 = array("Mon","Wed","Fri","Jan","Sat");

            // 1. array_intersect() - gives common values betwween arrays
            $nA1 = array_intersect($a1,$a2);
            print_r($nA1);
            echo "<br>";

            $nA2 = array_intersect($a1,$a2,$a3);
            print_r($nA2);
            echo "<br>";
            echo "<br>";

            // 2. array_diff() - return values that are present in first array and not in second array
            $nA3 = array_diff($a1,$a2);
            print_r($nA3);
            echo "<br>";

            $nA4 = array_diff($a1,$a2,$a3);
            print_r($nA4);
            echo "<br>";

            $nA5 = array_diff($a2,$a1);
            print_r($nA5);
            echo "<br>";
            echo "<br>";

            // 3. array_unique() - returns unique values from an array
            $a4 = array("Btech","BSC","Btech","BBA","BSC");
            $nA6 = array_unique($a4);
            print_r($nA6);
            echo "<br>";
            echo "<br>";

            // 4. array_map() - used to perform operations to each element in the array
            function multiply($n){
                return $n*5;
            }

            $a5 = array(5,10,15,20,30,40,50);
            $nA7 = array_map('multiply',$a5);
            print_r($nA7);
            echo "<br>";

            function evenOdd($n){
                if($n%2 == 0){
                    return "even";
                } else {
                    return "odd";
                }
            }

            $nA8 = array_map('evenOdd',$a5);
            print_r($nA8);
            echo "<br>";
            echo "<br>";

            // 5. range() - creates an array of specific range
            $nA9 = range(1,20);
            print_r($nA9);
            echo "<br>";

            $nA10 = range(1,20,5);
            print_r($nA10);
            echo "<br>";

            for($i=0; $i<count($nA9);$i++){
                echo $nA9[$i]," ";
            }
            echo "<br>";

            for($i=0; $i<count($nA10);$i++){
                echo $nA10[$i]," ";
            }
            echo "<br>";

            ?>
        </center>
</body>
</html>