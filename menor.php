<?php 
$x=100;
for ($i=0; $i<10 ; $i++) { 
    $nums1[$i]=rand(0,100);
    $m= $nums1[$i];
    echo $nums1[$i]." , ";
   
    while ($x > $m) {
    $x = $m;
}
}


echo "<br>"."numero menor es :". $x;
?>