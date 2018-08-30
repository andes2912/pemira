<?php 

	include "../koneksi.php";
	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['no']) 
	{
		
		$no = $_GET['no'];

		$data = mysql_query("select * from hasil_hima where NPM = '$_SESSION[NPM]' ");
		$cek = mysql_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysql_query("insert into hasil_hima (NPM,no,status) values ('$_SESSION[NPM]','$no','sudah') ");
			header("location: done.php");
		}

}

?>