<?php

/*
 //open CSV file
        $CSVFile =  fopen("TO105777_2013_09_03_14_32_46 A-E.csv", "r");
        //if the CSV file is opened, catch domain and reference
        if ($CSVFile !==false) { 
            $line=fgetcsv($CSVFile, 0, ';');
			$PDCR_Data = Array();
			$i = 0;
            while ($line=fgetcsv($CSVFile, 0, ';')) {
				$PDCR_Data[$i] =  $line;
				$pddsRef = "";
				$pddsRef = $line[0].$line[2];
			//	print $pddsRef."<br>";
				$i++;

            }
            fclose($CSVFile);
        }

print "test";
print "<pre>";
print_r($PDCR_Data);
*/
$homepage = file_get_contents('docfile.doc');
echo filetype('docfile.doc');
?> 

