<?php
$no = $_GET['no'];
mysql_query("delete from ca_hima where no = '$no' ") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Data Berhasil di Hapus !");
	window.location.href="?page=tampilhima";
</script>