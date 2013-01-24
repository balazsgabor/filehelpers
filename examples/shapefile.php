<?php

require("../vendor/autoload.php");
use \tdt\filehelpers\ShapeFile;

$options = array('noparts' => false);
$shp = new ShapeFile("knoop_full_export.shp",$options); 

//Dump the ten first records
$i = 0;
while ($record = $shp->getNext() and $i<10) {
    $dbf_data = $record->getDbfData();
    $shp_data = $record->getShpData();
    //Dump the information
    var_dump($dbf_data);
    var_dump($shp_data);
    $i++;
}