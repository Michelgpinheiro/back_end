<?php 
$n_briquedos=6;
$altura_briquedos=120;
$altura_calitos=[200, 90, 100, 123, 120, 169];
$pode_ir_no_briquedo=0;

for($i=0; $i< $n_briquedos; $i++){
    if($altura_calitos>=$altura_briquedos[$i]){
        $pode_ir_no_briquedo++;

    }

}
echo $pode_ir_no_briquedo;
readline()
?>