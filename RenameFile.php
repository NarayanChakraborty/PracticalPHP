<?php   //movefile.php
if(!rename("textfile.txt","textfileorginal.txt"))
echo "could not rename file";
else
echo "File successfully renamed to 'textfileorginal.txt'";
?>