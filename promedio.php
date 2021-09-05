<?php 

$sum=0;
for ($i=0; $i<10 ; $i++) { 
    $nums1[$i]=rand(0,100);
    $m= $nums1[$i];
    echo $nums1[$i]." , ";
    $sum+=$nums1[$i];
   
}
$prom=$sum/10;

echo "<br>"."numero menor es :". $prom;
?>