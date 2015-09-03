<?php
if(file_exists("testfile.txt"))
echo "File exists";
else
echo "File Doesnot exists";
?>
<?php
$f=fopen("textfile.txt",'w') or die("Failed to create file");
$text=<<<_END
Hi My Name is Sree Narayan Chakraborty,
I am studying in Noakhali Science & Technology University
on Computer Science & Telecommunication Engineering.
_END;
fwrite($f,$text) or die("Can not write");
fclose($f);
echo "File 'testfile.txt' written successfully";
?>