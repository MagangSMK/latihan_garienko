<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	    $id = $_POST['id'];
		$karyawan_id = $_POST['karyawan_id'];
		$tanggal_lembur = $_POST['tanggal_lembur'];
		$jumlah = $_POST['jumlah'];
	// update user data
	$result4 = mysqli_query($mysqli, "UPDATE lembur SET id='$id',
    karyawan_id ='$karyawan_id',
    tanggal_lembur ='$tanggal_lembur',
    jumlah='$jumlah' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result4 = mysqli_query($mysqli, "SELECT * FROM lembur WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result4))
{
        $id = $user_data['id'];
		$karyawan_id =$user_data['karyawan_id'];
		$tanggal_lembur = $user_data['tanggal_lembur'];
		$jumlah = $user_data['jumlah'];
}
?>
<html>
<head>	
	<title>Edit Data Cuti</title>
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
				<td>Karyawan Id</td>
				<td><input type="text" name="karyawan_id" value=<?php echo $karyawan_id;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Lembur</td>
				<td><input type="text" name="tanggal_cuti" value=<?php echo $tanggal_lembur;?>></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>