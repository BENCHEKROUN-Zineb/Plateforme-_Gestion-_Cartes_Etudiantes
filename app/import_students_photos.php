<?php
$path = './photos/';
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
    echo 'Le fichier '.$fileName.' a bien été uploadé';
} else {
    echo 'Importation impossible';
}

$zip = new ZipArchive;
if ($zip->open($path.$fileName) === TRUE) {
    $zip->extractTo($path);
    $zip->close();
    echo 'ok';
} else {
    echo 'échec';
}

   ?>