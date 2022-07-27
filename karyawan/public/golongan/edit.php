<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	    $id = $_POST['id'];
		$nama_golongan = $_POST['nama_golongan'];
		$gaji_pokok = $_POST['gaji_pokok'];
		$tunjangan_istri = $_POST['tunjangan_istri'];
        $tunjangan_anak = $_POST['tunjangan_anak'];
        $tunjangan_transport = $_POST['tunjangan_transport'];
        $tunjangan_makan = $_POST['tunjangan_makan'];
    // update user data
	$result2 = mysqli_query($mysqli, "UPDATE golongan SET id='$id',
    nama_golongan ='$nama_golongan',
    gaji_pokok ='$gaji_pokok',
    tunjangan_istri = '$tunjangan_istri',
    tunjangan_anak = '$tunjangan_anak',
    tunjangan_transport = '$tunjangan_transport',
    tunjangan_makan ='$tunjangan_makan' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM golongan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result2))
{
        $id = $user_data['id'];
		$nama_golongan =$user_data['nama_golongan'];
		$gaji_pokok = $user_data['gaji_pokok'];
		$tunjangan_istri = $user_data['tunjangan_istri'];
        $tunjangan_anak = $user_data['tunjangan_anak'];
        $tunjangan_transport = $user_data['tunjangan_transport'];
        $tunjangan_makan = $user_data['tunjangan_makan'];
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
				<td>Nama Golongan</td>
				<td><input type="text" name="nama_golongan" value=<?php echo $nama_golongan;?>></td>
			</tr>
			<tr> 
				<td>Gaji Pokok</td>
				<td><input type="text" name="gaji_pokok" value=<?php echo $gaji_pokok;?>></td>
			</tr>
			<tr> 
				<td>Tunjangan Istri</td>
				<td><input type="text" name="tunjangan_istri" value=<?php echo $tunjangan_istri;?>></td>
			</tr>
            <tr> 
				<td>Tunjangan Anak</td>
				<td><input type="text" name="tunjangan_anak" value=<?php echo $tunjangan_anak;?>></td>
			</tr>
            <tr> 
				<td>Tunjangan Transport</td>
				<td><input type="text" name="tunjangan_transport" value=<?php echo $tunjangan_transport;?>></td>
			</tr>
            <tr> 
				<td>Tunjangan Makan</td>
				<td><input type="text" name="tunjangan_makan" value=<?php echo $tunjangan_makan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>