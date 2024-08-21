<!-- //write the  php script to calculate the percentage in 5 subjects and print the grades acc -->
<!-- <?php
    $sub1 = 100;
    $sub2 = 90;
    $sub3 = 70;
    $sub4 = 100;
    $sub5 = 50;
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($total / 500) * 100;
    echo "Percentage is: " . $percentage . "<br>";
    if($percentage >= 90){
        echo "Grade A";
    }elseif($percentage >= 80){
        echo "Grade B";
    }elseif($percentage >= 70){
        echo "Grade C";
    }elseif($percentage >= 60){
        echo "Grade D";
    }elseif($percentage >= 40){
        echo "Grade E";
    }else{
        echo "Grade F";
    }
?> -->


<!-- write the php script to calculate area of circle rectangle traingle -->
<?php
    $radius = 10;
    $area = 3.14 * $radius * $radius;
    echo "Area of circle is: " . $area . "<br>";

    $length = 10;
    $breadth = 20;
    $area = $length * $breadth;
    echo "Area of rectangle is: " . $area . "<br>";

    $base = 10;
    $height = 20;
    $area = 0.5 * $base * $height;
    echo "Area of traingle is: " . $area . "<br>";
?>
