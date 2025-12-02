<?php

$students=array("Thasni","Theja","Anjel","Arya","Nandana");
 
echo"<h2>Array Before Sorting:</h2>";
print_r($students);
echo"<br><br>";

asort($students);
echo"<h2>Array After Ascending Order:</h2>";
print_r($students);
echo"<br><br>";

arsort($students);
echo"<h2>Array After Descending Order:</h2>";
print_r($students);

?>