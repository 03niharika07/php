<html>
    <head><title>PHP STRING RELATED FUNCTIONS</title></head>
    <body>
        <center>
        <?php
        // String is immutable

        // 1. strlen()
        $str = "My Name Is Niharika";
        $length = strlen($str);
        echo $str."<br>";
        echo "length : ",$length."<br>";  // returns 19 , count spaces also

        // 2. str_word_count
        $word_count = str_word_count($str);
        echo "Word Count : ",$word_count."<br>";
        echo "<br>";

        // 3. chunk_split()
        $split = chunk_split($str,2,'.');
        echo $split,"<br>";

        $split2 = chunk_split($str,2,'*');
        echo $split2,"<br>";
        echo "<br>";

        // 4. str_split() - returns an array
        $s = "NameNehaAge Twenty";
        $newArray = str_split($s,4);
        echo $s."<br>";
        print_r($newArray);   // for array print_r is used
        echo "<br>";
        echo "<br>";

        // 5. strtoupper() - converts to upper case
        // 6. strtolower() - converts to lower case
        $upper = strtoupper($str);
        echo $upper,"<br>";

        $lower = strtolower($str);
        echo $lower,"<br>";
        echo "<br>";

        // 7. substr_count() - to count specific substring
        $mystr = "Name name Name name Age Niharika bansal";
        $count = substr_count($mystr,'name');
        echo $mystr,"<br>";
        echo "name count : ",$count,"<br>";

        $count2 = substr_count($mystr,'name',14);
        echo "name count after index 14 : ",$count2,"<br>";
        echo "<br>";

        // 8. ucwords() - converts first character to upper case
        $myystr = "my name is neha";
        $u = ucwords($myystr);
        echo $myystr,"<br>";
        echo "After ucwords() function : ", $u, "<br>";

        // 9. ucfirst() - converts first word first character to upper case
        // 10. lcfirst() - converts first word first character to lower case
        $u2 = ucfirst($myystr);
        echo $myystr,"<br>";
        echo "After ucfirst() function : ", $u2, "<br>";

        $u3 = lcfirst($u2);
        echo "After lcfirst() function : ", $u3,"<br>";
        echo "<br>";

        // 11. strcmp() - for comparison
        // 12. strcasecmp() - for comparison, not case sensitive
        $str1 = "Mumbai";
        $str2 = "mumbai";

        if(strcmp($str1,$str2)==0){
            echo "same";
        } else{
            echo "not same";
        }
        echo "<br>";

        if(strcasecmp($str1,$str2)==0){
            echo "same";
        } else{
            echo "not same";
        }
        echo "<br>";


        ?>
        </center>
    </body>
</html>