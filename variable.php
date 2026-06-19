<html>
    <head><title>MY FIRST PHP PAGE</title></head>
    <body>
        <center>
        <?php
        // PHP code is written here
          $name = "Niharika";
          $age = 21;
          echo "<font colour = red size=5>Name : </font>", $name ;
          echo "Age : $age ";

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