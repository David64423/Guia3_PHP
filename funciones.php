<?php
function sacarAntiguedad($fechaIn){

    $diaActual= date('d')-1;
    $mesActual= date('m');
    $anioActual= date('Y');

    $fechaActual = $anioActual."-".$mesActual."-".$diaActual;
        $date1 = new DateTime($fechaActual);
        $date2 = new DateTime($fechaIn);

        $diff = $date1->diff($date2);

        if($date1>$date2){ //$diff->days
                if($diff->days <365){
                    return $diff->days." dias";
                }
                else{
                    return bcdiv($diff->days, '365', 2)." años";
                }
        }

        if($date1<$date2){
            return "error al definir";
        }}
    
    ?>