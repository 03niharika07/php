<html>
    <head><title>PHP</title><head>
            <body>
                <center>
                <?php
                $a = 100; // variable 
                $b = 200;
                $c = $a + $b;

                /*
                CONSTANT DECLARATION SYNTAX
                define(string name,value,case sensitive) 
                (by default case sensitive value false hoti h mtlb case sensitive hota hai)
                */

                define("pi",3.14, false);
                echo pi;   // by default case sensitive hota hai
                echo "<br>";

                // ANOTHER METHOD OF DECLARATION
                const PI = 3.14;
                echo PI;
                echo "<br>";

                // FINDING RADIUS OF A CIRCLE
                $r = 2;
                $A = PI*$r*$r;
                echo "Area of circle with radius $r is $A";

                ?>
                </center>
            </body>
</html>
