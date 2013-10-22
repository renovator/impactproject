<?php
    // https://github.com/anandkunal/ToroPHP
    require_once('../../lib/ToroPHP/src/Toro.php');

    // http://www.codedevelopr.com/articles/reading-csv-files-into-php-array/
    function readCSV($csvFile){
        $file_handle = fopen($csvFile, 'r');
        while (!feof($file_handle) ) {
            $line_of_text[] = fgetcsv($file_handle, 1024);
        }
        fclose($file_handle);
        return $line_of_text;
    }

    // NEITI data - http://followthedata.github.io/data/
    // Export required sheets as CSVs
    $oilDataSource = 'data/NEITI_Oil_Revenue.csv';
    $gasDataSource = 'data/NEITI_Gas_Revenue.csv';

    $oilData = readCSV($oilDataSource);
    $gasData = readCSV($gasDataSource);

    $data = array('oil'=>$oilData, 'gas'=>$gasData);
    echo json_encode($data);
