<!DOCTYPE html>
<html>
<head>
	<title>XMOD</title>
	<link rel="stylesheet" type="text/css" href="sources/css/bootstrap.min.css">
</head>
<body>
<?php
	require_once 'library.php';
	$server = 'http://puis.president.ac.id/photo/';

	$num = 123;
	$str_length = 4;
	$formatA = "a.jpg";
	$formatB = "b.jpg";

	for ($i=1; $i <= 100; $i++): // For Start
		$SID = sprintf('%03d', $i);		
?>
	<img src="<?php echo $server.$class.$SID.$formatA?>" width="100%" class="col-md-3">
<?php
	endfor; //For End

	for ($i=1; $i <= 100; $i++): // For Start
		$SID = sprintf('%03d', $i);		
	?>
		<img src="<?php echo $server.$class.$SID.$formatB?>" width="100%" class="col-md-3">
<?php
	endfor //For End
?>
	</div>
</body>
</html>
