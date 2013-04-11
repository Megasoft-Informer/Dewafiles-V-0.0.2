<?PHP
include("koneksi.php"); #koneksi into database
############################Dapatkan info dari file berdasarkan id####################################
$id_file = $_GET['id'];
$sql = mysql_query("select * from file where id='$id_file'");
$data = mysql_fetch_array($sql);
$nama_file = $data['nama'];
$path_file = $data['path'];
$size_file = $data['size'];
$pemilik = $data['pemilik'];
$hits = $data['hits'];
$date = $data['date'];
#######################################################################################################
?>
<link rel='stylesheet' href="css/box.css" type="text/css"> <!--untuk style boxnya -->
<link rel="shortcut icon" href="images/favicon.ico"> <!--Pemanggilan gambar favicon-->
<title>Download File</title>
<body background="css/back.jpg">
<div class="wrap" style="margin-top:13%">
    <h1><?PHP echo $nama_file; ?></h1>   
        <p>
		<?PHP
		echo "<meta http-equiv='refresh' content='0; url=$path_file'>"; #auto download file
		$hits++;
		$sql = mysql_query("update file set hits='$hits' where id='$id_file'"); #tambah 1 angka untuk hits file
		?>
		<center>
        Thank's For Downloading This File
		<p>
		<center>Not Download? <a  style="text-decoration:underline" href="<?PHP echo $path_file; ?>">Try Again</a>
		</center>
        </p>
        </p>
</div>
