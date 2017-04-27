<?php
$days = 3;

if(isset($_GET['predict_days'])){
	$days = $_GET['predict_days'];
}

echo exec('python predict.py ' . $days);
?>
