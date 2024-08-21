<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?php
        $x = "amit";
        var_dump($x);
    ?>
    <p>My name is <?php echo $x;?></p>
    <!-- get the data types of all the php  -->
    <?php
        $x = 10.5;
        var_dump($x);
    ?><br>
    <?php
        $x = 10;
        var_dump($x);
    ?><br>
    <?php
        $x = true;
        var_dump($x);
    ?><br>
    <?php
        $x = array("amit", "sumit", "ram");
        var_dump($x);
    ?><br>
    <?php
        $x = null;
        var_dump($x);
    ?><br>
    <?php
        $x = "amit";
        $y = "sumit";
        var_dump($x == $y);
    ?><br>
    <?php
        $x = "amit";
        $y = "sumit";
        var_dump($x === $y);
    ?><br>
    <?php
        $x = "amit";
        $y = "sumit";
        var_dump($x != $y);
    ?><br>
    <?php
        $x = "amit";
        $y = "sumit";
        var_dump($x !== $y);
    ?><br>
    <!-- php script to check number is negative or not -->
    <?php
        $x = 10;
        if($x < 0){
            echo "Number is negative" .PHP_INT_MAX;
        }else{
            echo "Number is positive";
        }
    ?><br>
    <!-- check number is postive negative or zero -->
    <?php
        $x = 0;
        if($x < 0){
            echo "Number is negative";
        }elseif($x > 0){
            echo "Number is positive";
        }else{
            echo "Number is zero";
        }
    ?><br>
    <!-- all php for string functions -->
    <?php
        $x = "amit";
        echo strlen($x);
    ?><br>
    <?php
        $x = "amit";
        echo str_word_count($x);
    ?><br>
    <?php
        $x = "amit";
        echo strrev($x);
    ?><br>
    <?php
        $x = "amit";
        echo strpos($x, "t");
    ?><br>
    <?php
        $x = "amit";
        echo str_replace("amit", "sumit", $x);
        print "hello";
    ?><br>
    <!-- all php for array functions -->  
</body>
</html>