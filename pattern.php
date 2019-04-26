<?php

pattern();

trianglePattern();

sumArrayElementWithoutLoop();


function pattern(){
    for($i=0;$i<10;$i++){
        for($j=0;$j<=$i;$j++){
            echo '*';
        }
        echo '<br>';
        $i++;
    }
}

function trianglePattern(){
    for($i=0;$i<5;$i++){
        for($j=0;$j<=$i;$j++){
            echo '*';
        }
        echo '<br>';
    }

        for($j=0;$j<=$i;$j++){
            for($k=$i;$k>$j;$k--){
                echo '*';
            }
            echo '<br>';
        }
}

// function to print sum of array elements without using loop...
function sumArrayElementWithoutLoop(){
    // expected output be 15...
   $arr=[9,8,7,6,5];
   $sum=0;
   $index=0;

   sum:  $sum =$sum+$arr[$index];
   $index++;

   if($index<count($arr)){
       goto sum;
   }
   echo "sum of array elements is ".$sum;


}



?>