<html>
<head>
    <title>PHP TYPECASTING</title>
</head>
<body>
    <center>
        <?php
         
        // Type casting - Implicit and Explicit
        // Implicit : apne aap ek data type se dusre m convert hona
        // Explicit : forcefully khud se change krna

        $a = '120';
        echo "Before type casting: ",gettype($a);
        echo "<br>";
        echo var_dump($a);
        echo "<br>";
        $a = (int)($a);
        echo "After type casting: ",gettype($a);
        echo "<br>";
        echo var_dump($a);
        echo "<br>";
        echo "<br>";

        $b=true;
        echo "Before type casting: ",gettype($b);
        echo "<br>";
        echo var_dump($b);
        echo "<br>";
        $b = (int)($b);
        echo "After type casting: ",gettype($b);
        echo "<br>";
        echo var_dump($b);
        echo "<br>";
        echo "<br>";

        $c=67;
        $c=(string)($c);
        echo var_dump($c);
        echo "<br>";
        echo "<br>";

        // except 0, every number is true even if it is in negative

        $d = "Rs 500";  // agr initially string hai toh 0 aaega int m convert krne k baad
        $e = "500 Rs";

        $d = (int)($d);
        $e = (int)($e);

        echo $d;        // return 0
        echo "<br>";
        echo $e;        // return 500;
        echo "<br>";

        ?>
    </center>
</body>
</html>