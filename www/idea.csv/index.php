<?php
define('FILE_MEM_LIMIT', 10); // in MiB

header('Content-Type: application/csv');
$csv_file = fopen('php://temp/maxmemory:'.(FILE_MEM_LIMIT * 1024 * 1024), 'r+');
# for header line
fputcsv(
    $csv_file, array(
        'name1', 'name2', 'name3', 
        'email1', 'email2', 'email3',
        'phone1', 'phone2', 'phone3', 
        'university', 'state', 'pincode',
        'city', 'title', 'idea_desc',
        'stage', 'paytm'
    )
);

require('../../vendor/autoload.php');

# for registration record(s) line(s)
foreach(Idea::reglist() as $reg_record) {
    fputcsv($csv_file, $reg_record);
}

rewind($csv_file);
$out = stream_get_contents($csv_file);
echo $out;
?>