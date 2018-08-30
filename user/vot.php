<?php 

	include "../koneksi.php";

	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['no_urut']) 
	{
		
		$norut = $_GET['no_urut'];

		$data = mysql_query("select * from hasil_bem where NPM = '$_SESSION[NPM]' ");
		$cek = mysql_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysql_query("insert into hasil_bem (NPM,no_urut,status) values ('$_SESSION[NPM]','$norut','sudah') ");
			header("location: index.php?page=use");
			
		}
}

?>