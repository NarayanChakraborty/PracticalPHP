 <?php
 echo "<pre>"; //enables viewing of the spaces
 $n='SNChakraborty';
 printf("[%s]\n",    $n);  //standard
 printf("[%18s]\n",  $n);  //right justify with space
 printf("[%-18s]\n",  $n);   //left justify with space
 printf("[%018s]\n",   $n);  //zero padding
 printf("[%'#18s]\n\n", $n);  //custom padding character '#'
 printf("[%'#18.8s]\n\n", $n);   //right justify ,cutoff of 8 characters
 printf("[%'$18.10s]\n\n",$n); //right justify ,cutoff of 10 characters
  printf("[%'$18.13s]\n\n",$n); //right justify ,cutoff of 13 characters
 ?>