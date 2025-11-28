<?php

include 'PHPExcel/Classes/PHPExcel.php';

$mysqli = new mysqli("localhost","root","","images");

$path = './uploads/';
$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "Impossible d'uploadé le fichier";
    exit();
}
if(move_uploaded_file($fileTmpLoc, $path.$fileName)){
	$querydelete = "delete from student";
	$mysqli->query($querydelete);
    echo 'Le fichier '.$fileName.' a bien été uploadé';
} else {
    echo 'Importation impossible';
}

$inputFileName = $path.$fileName;
//Read your Excel workbook
try{
    $inputFileType  =   PHPExcel_IOFactory::identify($inputFileName);
    $objReader      =   PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel    =   $objReader->load($inputFileName);
}catch(Exception $e){
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}
 
//  Get worksheet dimensions
$sheet = $objPHPExcel->getActiveSheet(); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
 
//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
                                    FALSE);
    foreach($rowData as $val)
            {

				$queryinsert = "Insert into student VALUES ('".$val[0]."','".$val[1]."','".$val[2]."','".$val[3]."','".$val[4]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[8]."')";
				echo $queryinsert;
				$mysqli->query($queryinsert);
			}
     
}
   ?>