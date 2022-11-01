<?php
function Escenario($ListEscenario){
    //Se crea la tabla y sus encabezados
 echo "<section class='grid-1'>";
                /*-- Se crean los encabezados de las tabla*/
              
    //Se recorre el Array mediante con un foreach y se imprime cada fila y columna de la tabla
$i=1;
foreach ($ListEscenario as $fila) {
  


    foreach ($fila as $silla) {
       
       
        echo "<div class='item-1'>";
        echo $silla ;   
        echo "</div>";

    
       
    }
  
    $i++;
    }
    echo "</section>";

}
?>