<?php
   $a = $_POST['numero1'];
   $b = $_POST['numero2'];
   $op= $_POST['searchtype'];

   if ($op == "soma") {
    $c = $a + $b ;
    echo "Resultado: $c" ; 
   }
   else if ($op == "sub") {
    $c = $a  - $b ;
    echo "Resultado: $c";
    
   }
    else if ($op == "vezes") {
    $c = $a  * $b ;
    echo "Resultado: $c"; 
   }
    else if ($op == "divisao") {
    $c = $a/$b ;
    echo "Resultado: $c";
    
   }
?>