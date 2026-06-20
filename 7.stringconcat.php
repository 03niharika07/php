<html>
<head>
    <title>PHP STRING CONCATENATION</title>
</head>
<body>
    <center>
        <?php
        // using . or .=
        $a = 50;
        $b = 30;
        $c = $a+$b;
        echo "Addition of ".$a." and ".$b." is ".$c;
        echo "<br>";

        $n1 = "Niharika";
        $n2 = "Bansal";
        $name = $n1." ".$n2;
        echo $name;
        echo "<br>";

        $x = "Niharika";
        $y = " Bansal";
        $x.=$y;
        echo $x;
        echo "<br>";

        $n=70;
        $m=30;
        echo ($n>$m) ? "Greater between ".$n." and ".$m." is ".$n : "Greater between ".$n." and ".$m." is ".$m;
        echo "<br>";

        ?>
    </center>
</body>
</html>