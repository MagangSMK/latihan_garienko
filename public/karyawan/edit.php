<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	    $id = $_POST['id'];
		$nip = $_POST['nip'];
		$nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $telpon = $_POST['telpon'];
        $agama = $_POST['agama'];
        $status_nikah = $_POST['status_nikah'];
        $alamat = $_POST['alamat'];
        $golongan_id = $_POST['golongan_id'];
        $foto = $_POST['foto'];
    // update user data
	$result3 = mysqli_query($mysqli, "UPDATE karyawan SET id='$id',
    nip = '$nip',
    nik = '$nik',
    nama = '$nama',
    jenis_kelamin = '$jenis_kelamin',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    telpon = '$telpon',
    agama = '$agama',
    status_nikah = '$status_nikah',
    alamat = '$alamat',
    golongan_id = '$golongan_id',
    foto ='$foto' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result3 = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result3))
{
        $id = $user_data['id'];
		$nip =$user_data['nip'];
		$nik =$user_data['nik'];
        $nama =$user_data['nama'];
        $jenis_kelamin =$user_data['jenis_kelamin'];
        $tempat_lahir =$user_data['tempat_lahir'];
        $tanggal_lahir =$user_data['tanggal_lahir'];
        $telpon =$user_data['telpon'];
        $agama =$user_data['agama'];
        $status_nikah =$user_data['status_nikah'];
        $alamat =$user_data['alamat'];
        $golongan_id =$user_data['golongan_id'];
        $foto =$user_data['foto'];
}
?>
<html>
<head>	
	<title>Edit Data Karyawan</title>
</head>
 
<body>
	<a href="../../login/homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id" disabled value=<?php echo $id;?>></td>
			</tr>
			<tr> 
				<td>Nip</td>
				<td><input type="text" name="nik" value=<?php echo $nip;?>></td>
			</tr>
			<tr> 
				<td>Nik</td>
				<td><input type="text" name="nip" value=<?php echo $nik;?>></td>
			</tr>
            <tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
            <tr> 
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
			</tr>
            <tr> 
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir" value=<?php echo $tempat_lahir;?>></td>
			</tr>
            <tr> 
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
			</tr>
            <tr> 
				<td>Telpon</td>
				<td><input type="text" name="telpon" value=<?php echo $telpon;?>></td>
			</tr>
            <tr> 
				<td>Agama</td>
				<td><input type="text" name="agama" value=<?php echo $agama;?>></td>
			</tr>
            <tr> 
				<td>Status Nikah</td>
				<td><input type="text" name="status_nikah" value=<?php echo $status_nikah;?>></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
            <tr> 
				<td>Golongan Id</td>
				<td><input type="text" name="golongan_id" value=<?php echo $golongan_id;?>></td>
			</tr>
            <tr> 
				<td>Foto</td>
				<td><input type="text" name="foto" value=<?php echo $foto;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>