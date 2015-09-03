<?php
 $f=fopen("textfile.txt",'r') or die ("File does not exit or you lack permission to open it");
 $line=fgets($f);
 fclose($f);
 echo $line;
 echo '<br><br>';
 ?>
 <?php
 $f=fopen("textfile.txt",'r') or die ("File does not exit or you lack permission to open it");
 $text=fread($f,160);
 fclose($f);
 echo $text;
 ?>
 