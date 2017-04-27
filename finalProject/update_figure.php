<?php
//echo exec('python make_figure.py');
//echo $_GET['start'];
$start = $_GET['start'];
$end = $_GET['end'];
echo exec('python update_figure.py ' . $start . " " . $end);
?>
