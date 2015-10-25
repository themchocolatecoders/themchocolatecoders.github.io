<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$email = @$_POST['email'];
$comment = @$_POST['comment'];
$file = @$_POST['file'];

// Get the name of text file where data will be store
$filename = $file.".txt";

// Marge all the variables with text in a single variable.
$f_data= '
Name : '.$name.'
Email :  '.$email.'
Comments: '.$comment.' 
==============================================================================
';



echo 'Form data has been saved to '.$filename.'  <br>
<a href="'.$filename.'">Click here to read </a> ';
$file = fopen($filename, "a");
fwrite($file,$f_data); 
fclose($file);
?>