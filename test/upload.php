<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

print "<pre>";
//print_r($_FILES);

$uploaddir = 'd:/test2/';
$uploadfile = $uploaddir . $_FILES['userfile']['name'];
print_r( $_FILES['userfile']);	

if( $_FILES['userfile']['size'] > 25428800 )
{
	die("File  size greater than 25 MB is not allowed");
}


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?> 

