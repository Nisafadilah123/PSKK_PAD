<?php
	$content = "
	<html> 
	<body>
		<h1>MPDF WORK !</h1> 
		Selamat datang di rachmat.ID
	</body>
	</html>
	";

	require_once "./mpdf_v8.0.3-master/vendor/autoload.php";
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($content);
	$mpdf->Output();