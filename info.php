<?PHP
include("koneksi.php");
$nama_user = $_GET['nama'];
$sql = mysql_query("select * from anggota where nama='$nama_user'");
$hasil = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);
$email = $data['email'];
$lahir = $data['lahir'];
$gender = $data['gender'];
$online =  $data['online'];
$photo = $data['photo'];
if ($online=='Y'){
$online = "Online";
}
else{
$online = "Offline";
}
if ($hasil==0){
header("location:index.php");
}
?>
<link rel='stylesheet' href="css/mos-style.css" type="text/css"> <!--untuk style boxnya -->
<link rel='stylesheet' href="css/box.css" type="text/css"> <!--untuk style boxnya -->
<div class="wrap" style="margin-top:8%">
<title>Info User</title>
<body background="css/back.jpg">
<link rel="shortcut icon" href="images/favicon.ico"> <!--Pemanggilan gambar favicon-->
    <h1><?PHP echo $nama_user; ?></h1>   
        <p>
		<center>
		<img src="<?PHP echo $photo; ?>" width="50" height="50">
		<table border='0'>
		<tr>
		<td width="100px">Nama</td>
		<td><?PHP echo $nama_user; ?></td>
		</tr>
		<tr>
		<td width="100px">Email</td>
		<td><?PHP echo $email; ?></td>
		</tr>
		<tr>
		<td width="100px">Gender</td>
		<td><?PHP echo $gender; ?></td>
		</tr>
		<tr>
		<td width="100px">Lahir</td>
		<td><?PHP echo $lahir; ?></td>
		</tr>
		<tr>
		<td width="100px">Status</td>
		<td><?PHP echo $online; ?></td>
		</tr>
		</table>
		</center>
        </p>
</div>
