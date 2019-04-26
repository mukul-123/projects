<?php
fibonacciSeries();
Zpattern();

// function to print fibonacci series....
function fibonacciSeries(){
    $a=0;
     $b=1;
    $c;
    echo "fibonacci series of the first 6 number is ";
    for($i=0;$i<6;$i++){
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo $c.',';
    }
    echo '<br>';
}

// function to print z pattern...
function Zpattern(){
    echo 'Trying to print z pattern <br>';
    for($i=0;$i<5;$i++){
        echo '*';
    }
    echo "<br>";
    for($j=$i;$j>4;$j--){
        echo '*';
    }
}
?>