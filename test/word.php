<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>

 <?php function read_file_docx($filename)
	 {
		 $striped_content = ''; 
		 $content = ''; 
		 if(!$filename || !file_exists($filename)) 
			 return false; 
		 $zip = zip_open($filename); 
		 if (!$zip || is_numeric($zip))
			 return false;
		 while ($zip_entry = zip_read($zip))
			 { if (zip_entry_open($zip, $zip_entry) == FALSE) continue;
		 if (zip_entry_name($zip_entry) != "word/document.xml") continue; 
		 $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)); 
		 zip_entry_close($zip_entry);
		 }
		 // end while zip_close($zip);
		 //echo $content; 
		 //echo "<hr>"; 
		 //file_put_contents('1.xml', $content);
		 $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
		 $content = str_replace('</w:r></w:p>', "\r\n", $content);
		 $striped_content = strip_tags($content);
		 return $striped_content; 
		 }
 
 ?>
 



  <?php

$lines = NULL;
$docfile = 'docfile.doc'; 

/*
$doc = fopen($docfile, 'r');

for($lines = 1; $lines < 100; $lines++;)
{
$data = fread($doc, $lines);
}

fclose($data);


//$data = file_get_contents($docfile);
//echo $data;


$filename = "docfile.doc";// or /var/www/html/file.docx 
$content = read_file_docx($filename);
if($content !== false)
	{ echo nl2br($content); } 
else
	{ echo 'Couldn\'t the file. Please check that file.'; }

*/
?> 
<iframe src="http://docs.google.com/gview?url=www.ieor.berkeley.edu/~ieor215/PHP_MySQL_Lab3.doc"></iframe>
<!-- <iframe name="mainFrame" src="docfile.doc" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>  -->
 </body>
</html>
