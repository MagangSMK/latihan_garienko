<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
	$tanggal = $_POST['tanggal'];
	$keterangan = $_POST['keterangan'];
	$karyawan_id = $_POST['karyawan_id'];
    $jumlah_gaji = $_POST['jumlah_gaji'];
    $jumlah_lembur = $_POST['jumlah_lembur'];
    $potongan = $_POST['potongan'];
    $total_gaji_diterima = $_POST['total_gaji_diterima'];
    // update user data
	$result5 = mysqli_query($mysqli, "UPDATE penggajian SET id='$id',
    tanggal = '$tanggal',
    keterangan = '$keterangan',
    karyawan_id = '$karyawan_id',
    jumlah_gaji = '$jumlah_gaji',
    jumlah_lembur = '$jumlah_lembur',
    potongan = '$potongan',
    total_gaji_diterima = '$total_gaji_diterima' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result5 = mysqli_query($mysqli, "SELECT * FROM penggajian WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result5))
{
        $id = $user_data['id'];
		$tanggal =$user_data['tanggal'];
		$keterangan = $user_data['keterangan'];
		$karyawan_id = $user_data['karyawan_id'];
        $jumlah_gaji = $user_data['jumlah_gaji'];
        $jumlah_lembur = $user_data['jumlah_lembur'];
        $potongan = $user_data['potongan'];
        $total_gaji_diterima = $user_data['total_gaji_diterima'];
}
?>
<html>
<head>	
	<title>Edit Data Golongan</title>
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
				<td>Tanggal</td>
				<td><input type="text" name="tanggal" value=<?php echo $tanggal;?>></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
			</tr>
			<tr> 
				<td>Karyawan Id</td>
				<td><input type="text" name="karyawan_id" value=<?php echo $karyawan_id;?>></td>
			</tr>
            <tr> 
				<td>Jumlah Gaji</td>
				<td><input type="text" name="jumlah_gaji" value=<?php echo $jumlah_gaji;?>></td>
			</tr>
            <tr> 
				<td>Jumlah Lembur</td>
				<td><input type="text" name="jumlah_lembur" value=<?php echo $jumlah_lembur;?>></td>
			</tr>
            <tr> 
				<td>Potongan</td>
				<td><input type="text" name="potongan" value=<?php echo $potongan;?>></td>
			</tr>
            <tr> 
				<td>Total Gaji Diterima</td>
				<td><input type="text" name="total_gaji_diterima" value=<?php echo $total_gaji_diterima;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>