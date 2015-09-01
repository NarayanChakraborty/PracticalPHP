<?php
echo "<pre>";  //enable viewing of the spaces
//pad to 15 spaces
printf("The result is $%15f\n ",163.56/23);
//pad to 15 spaces,fill with zeroes
printf("The result is $%015f\n ",163.56/23);
//pad to 15 spaces,2 decimal places precision
printf("The result is $%15.2f\n ",123.56/23);
//pad to 15 spaces,fill with *
printf("The result is $%'*15f\n ",123.56/23);
//pad to 15 spaces 3 decimal places precision,fill with!
printf("The result is $%'!15.3f\n ",123.56/23);
?>