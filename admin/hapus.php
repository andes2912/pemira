<?php
	$NPM=$_GET['NPM'];
	mysql_query("delete from user where NPM = '$NPM' ") or die(mysql_error());
?>
<script type="text/javascript">
	window.location.href="?page=siswa";
</script>