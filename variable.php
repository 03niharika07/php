<html>
    <head><title>MY FIRST PHP PAGE</title></head>
    <body>
        <center>
        <?php
        // PHP code is written here
          $name = "Niharika";
          $age = 21;
          echo "<font color=red size=5> Name : </font>", "<font color=blue size=5> $name </font>" ;
          echo "<br>";
          echo "<font color=red size=5> Age : </font>", "<font color = blue size = 5> $age </font>" ;
          echo "<br>";

          $a = 500;
          $b = 300;
          $c = $a+$b;
          echo "$a + $b = ", $a+$b;
          echo "<br>Addition of $a and $b is $c";

        /*
        Rules for variables
        $-empname --> ok
        $name --> ok
        $12name --> wrong , cannot start with a number
        $name123 --> ok
        $ emp name --> wrong
        $ emp_name --> ok
        $ emp-name --> ok
        $ empName --> ok
        VARIABLES are CASE SENSITIVE
        */

        ?>
        </center>
    </body>
</html>