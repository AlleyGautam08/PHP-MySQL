<?php

$var = 6;
if($var % 2 ==0 && $var % 3 ==0){
     echo "Divisible by both";
}
elseif($var % 2 ==0){
     echo "divisible by 2";
}
elseif($var % 3 ==0){
     echo "divisible by 3";
}
else{
     echo "Not divisible by both value givin";
}

?>