<html>
<head>
    <title>PHP FUNCTIONS</title>
</head>
<body>
    <center>
        <?php

        // FUNCTION 1

        function display(){      // definition
            echo "this is function code <br>";
        }

        // main
        display();  // function ca;;
        display();
        display();
        display();
        echo "End of program <br><br>";


        // FUNCTION 2

        function add($a, $b){          // in bracket - parameters (parameterized function)
            echo "Sum : ",$a+$b,"<br>";
        }

        add(5,6);     // in bracket - arguments
        add(10,289);
        echo "End of program <br><br>";


        // FUNCTION 3

        // when we want to send multiple arguments
        function multipleValuesAdd(...$a){    // parameter var args
            $sum = 0;  
            foreach($a as $m){
                $sum = $sum + $m;
            }
            echo "Sum : ",$sum,"<br>";    // call by value
        }

        multipleValuesAdd(10,20,30,40);
        multipleValuesAdd(10,2);
        multipleValuesAdd(110,90,100);
        echo "End of program <br><br>";


        // FUNCTION 4

        function factorial($n){
            $fact = 1;
            while($n!=0){
                $fact = $fact*$n;
                $n--;
            }
            return $fact;               // return by value
        }

        $fact=factorial(4);
        echo "Factorial is : ", $fact,"<br>";
        $fact2=factorial(5);
        echo "Factorial is : ", $fact2,"<br>";
        echo "End of program <br><br>";


        // CONCEPT OF COPY BY VALUE AND COPY BY REFERENCE (PASS BY VALUE AND PASS BY REFERENCE)

        // Pass By value - copy bnegi 
        function show1($a, $b){
            $a = $a +100;
            $b = $b + 100;
        }

        $a = 10;
        $b = 20;
        show1($a,$b);
        echo $a." ",$b."<br>";    // return 10,20 (copy bnegi toh original value change nhi hogi)

        // Pass By Reference - actual value m changes honge
        function show(&$a, &$b){
            $a = $a +100;
            $b = $b + 100;
        }

        $a = 10;
        $b = 20;
        show($a,$b);
        echo $a." ",$b."<br>";   // returns 110,120 (copy nhi bnegi toh actual value m changes honge)

        // Example
        function swap1($a, $b){
            $c = $a;
            $a = $b;
            $b = $c;
        }

        $n1 = 10;
        $n2 = 20;
        swap1($n1, $n2);
        echo $n1." ".$n2,"<br>";    // returns 10 20 , because pass by value

        function swap2(&$a, &$b){
            $c = $a;
            $a = $b;
            $b = $c;
        }

        $n1 = 10;
        $n2 = 20;
        swap2($n1, $n2);
        echo $n1." ".$n2,"<br>";   // returns 20 10, because pass by reference

        ?>
    </center>
</body>
</html>