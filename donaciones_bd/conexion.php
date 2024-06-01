<?php
function cargar_bd()
	{
		$server = "mx128.hostgator.mx";
		$user = "iamayaco_mgrdonacion";
		$pwd = "Don@ci0n3s";
		$bd = "iamayaco_donaciones";
		if($con = mysqli_connect($server,$user,$pwd,$bd)
		or die (mysqli_error($link)))
			return $con;
	}
?>