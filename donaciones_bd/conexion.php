<?php
function cargar_bd()
	{
		$server = "localhost";
		$user = "admin_donaciones";
		$pwd = "D0naci0nes";
		$bd = "donaciones";
		if($con = mysqli_connect($server,$user,$pwd,$bd)
		or die (mysqli_error($link)))
			return $con;
	}
?>