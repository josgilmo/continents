<?php

/*
function csv_to_array($filename = '', $delimiter = ',')
{
    if (! file_exists($filename) || ! is_readable($filename)) return FALSE;
 
    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if (! $header) $header = $row;
            else $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

$r = csv_to_array("data/continents.csv");
*/

$fichero = new SplFileObject("data/continents.csv");
while (!$fichero->eof()) {
    $c = $fichero->fgetcsv();
    if (!isset($c[0])) {
        continue;
    }
    echo "[ 'country' => '{$c[0]}', 'continent' => '{$c[1]}'] ," .PHP_EOL;
 }
