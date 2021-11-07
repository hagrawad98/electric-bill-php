<?php
echo '<h1> Electric bill calculator </h1>';
$unit =10 ;
if( $unit < 50){
echo (3.50 / $unit);
}
elseif($unit >50 && $unit <100){
echo (4.00 / $unit);
}
elseif($unit > 150){
echo (6.00 / $unit);
}
else{
    echo'error';
}
?>