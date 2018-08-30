<?php 
  @session_start();
  include"../koneksi.php";

  if( @$_SESSION['NPM']){
$sql = mysql_query("select * from user where NPM = '$_SESSION[NPM]'") or die(mysql_error());
$id = mysql_fetch_array($sql);
?>


<center><h1>Terima kasih sudah memilih<br>
Klik tulisan ini untuk memilih HIMA <br><a href="?page=hima&id=<?php echo $id['id'];?>"/><font color="red"> Pilih Hima</font></a></h1>
<?php 
}
?>