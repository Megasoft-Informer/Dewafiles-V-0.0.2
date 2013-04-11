<?PHP
SESSION_START();
include("counter.php");
$nama=$_SESSION['my_name']; #get the name if members login
$host="localhost"; #your host
$user="root"; #username
$pswd=""; #your password
$db="my_sites"; #database name
mysql_connect($host, $user, $pswd);
mysql_select_db($db); #memilih database mysqlnya
?>