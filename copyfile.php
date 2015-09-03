<?php
copy("textfile.txt","textfile2.txt") or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";
?>
<?php
if(!copy("textfile.txt","textfile2.txt"))
echo "Sorry,Can not copy File";
else
echo "Successfully copied to 'Textfile2.txt'";
?>