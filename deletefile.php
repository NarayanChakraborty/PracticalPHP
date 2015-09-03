<?php
if(!unlink('textfile1.txt')) echo "could not delete file";
else echo "File 'textfile1.txt' successfully deleted";
?>