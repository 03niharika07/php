<html>
    <head><title>PHP DATA TYPES</title></head>
    <body>
        <center>

        <?php
        // dynamically typed variable
        // fixed nhi hai data type , we can change
        $a = 200;       // int
        $b = "Hello";   // string
        $c = 12.67;     // floating point

        // to find the type of data, var_dump($var) is used or gettype($var)
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";

        $c = "Hi";
        var_dump($c);
        echo "<br>";

        $e = 'A';
        var_dump($e);
        echo "<br>";

        $f = false;
        var_dump($f);
        echo "<br>";

        $g = null;
        var_dump($g);
        echo "<br>";

        // ARRAY DECLARATION
        $arr[] = array(1,2,3);
        var_dump($arr);
        echo "<br>";

        var_dump(12.55);
        echo "<br>";
        var_dump(12);
        echo "<br>";
        var_dump(true);
        echo "<br>";

        echo "<br>";
        echo gettype($a);
        echo "<br>";
        echo gettype($b);
        echo "<br>";
        echo gettype($c);
        echo "<br>";
        echo gettype($g);
        echo "<br>";
        echo gettype($e);
        echo "<br>";
        echo gettype($f);
        echo "<br>";

        ?>

        </center>
    </body>
</html>

<!-- DATA TYPES
1. Scalar -> Float, String, Integer, Bool
2. Compound -> Array, Objects
3. Special -> NULL, Resource -->