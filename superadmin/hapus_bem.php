<?php
	$no_urut = @$_GET['no_urut'];
	mysql_query("delete from ca_bem where no_urut = '$no_urut' ") or die(mysql_error());
?>
<script type="text/javascript">
	window.location.href="?page=tampilbem";
</script>