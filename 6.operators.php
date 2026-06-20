<html>
    <head><title>PHP DATATYPES</title></head>
    <body>
        <center>
            <?php
            $a = 200;
            $b = 300;

            //BINARY OPERATORS - ARITHMETIC OPERATORS (+,-,*,/,%,**)
            echo ($a+$b);
            echo "<br>";

            echo ($a*$b);
            echo "<br>";

            echo ($a/$b);
            echo "<br>";

            echo ($a-$b);
            echo "<br>";

            echo ($a%$b);    // gives remainder
            echo "<br>";

            echo (2**3);    // 2 to the power 3 (exponential operator)
            echo "<br>";

            // BINARY OPERATORS - RELATIONAL OPERATORS (>,<,>=,<=,==,===,!=,<>,<=>)
            echo (3>7);          // ye false hai toh browser m kuch show nhi hoga, just blank space
            echo "<br>";
            echo gettype(3==7);  // boolean (or use var_dump())
            echo "<br>";

            echo (3<7);          // returns 1
            echo "<br>";

            echo (3!=7);         // returns 1
            echo "<br>";

            echo (3===7);
            echo "<br>";
            /* It checks 2 things:
            1. Value same hai ya nahi
            2. Data type same hai ya nahi
            */

            echo (3<>7);        // (<> : not equals to), returns 1
            echo "<br>";

            echo (3<=>7);       // (<=> : less than equal greater),
            echo "<br>";
            /* 
            <=> is called spaceship operator in PHP.
            It compares left side value and right side value.
            It gives output in 3 possible values:
            Condition	Output
            Left value is smaller :	-1
            Both values are equal :	0
            Left value is greater :	1
            */

            // BINARY OPERATORS - LOGICAL OPERATORS (LOGICAL AND (&), LOGICAL OR(||), LOGICAL NOT(!), XOR)
            $a = 30;
            $b = 40;
            $c = 50;

            if($a > $c && $b > $c) {
                echo "Hello";
            } else {
                echo "Byee";
            }

            echo "<br>";

            if($a > $c || $b < $c) {
                echo "Hi";
            } else {
                echo "Biee";
            }

            echo "<br>";

            // XOR (T,T->F, F,F->F), agr dono value same toh 0
            if($a > $c xor $b < $c) {
                echo "Hi";
            } else {
                echo "Biee";
            }

            echo "<br>";

            if ($a && $b){     // values ko true mano aur fir condition lgao, 0 is false
                echo "Hello";
            } else{
                echo "Bie";
            }

            echo "<br>";


            if(!($a > $c || $b < $c)) {
                echo "Hi";
            } else {
                echo "Biee";
            }

            echo "<br>";

            // Questiion1
            $per = 35;

            if($per >= 70){
                echo "Passed in I divison";
            } else if($per>=45 && $per<70) {
                echo "Passed in II division";
            } else if($per>=35 && $per <45){
                echo "Passed in III division";
            } else {
                echo "Failed";
            }

            echo "<br>";

            //Question2 : check vowel
            $ch = "S";

            if($ch>='A' && $ch<='Z'){
                echo "Upper case";
            } else if($ch>='a' && $ch<="z"){
                echo "Lower case";
            } else{
                echo "Not defined";
            }

            echo "<br>";

            ?>
        </center>
    </body>
</html>


<!-- TYPES OF OPERATORS
1. Unary : ++, --  (single operand is reuired)
2. Binary : *, +, -, /  (two operands are required)
3. Ternary : ?:  (conditional operator)