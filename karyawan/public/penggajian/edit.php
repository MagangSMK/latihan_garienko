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
		<title>Edit User Data Penggajian</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<form name="update" method="post" action="edit.php">
		
			<div class="bg-purple-400 py-10 px-10 min-h-screen ">
		
  				<!--   tip; mx-auto -- jagab ilusti keskele  -->
  				<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

      				<!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      				<div class="flex items-center mb-5">

        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="id" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Id 
						</label>
        				<input 
							type="text"  
							disabled name="id" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400	outline-none"  
							value=<?php echo $id;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<label for="tanggal" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tanggal 
						</label>
        				<input 
							type="text"  
							name="tanggal" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $tanggal;?>
						> <!-- check other class spec upper section -->
      				</div>

      				<div class="flex items-center mb-5">
						<!--         tip - here neede inline-block , but why? -->
        				<label for="keterangan" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Keterangan 
						</label>
        				<input 
							type="text"  
							name="keterangan" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $keterangan;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="karyawan_id" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Karyawan Id 
						</label>
        				<input type="text"  name="karyawan_id" placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none"
							value=<?php echo $karyawan_id;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
       	 				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="jumlah_gaji" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Jumlah Gaji 
						</label>
        				<input 
							type="text"  
							name="jumlah_gaji" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                     		text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $jumlah_gaji;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="jumlah_lembur" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Jumlah Lembur 
						</label>
        				<input 
							type="text"  
							name="jumlah_lembur" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $jumlah_lembur;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="potongan" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Potongan 
						</label>
        				<input 
							type="text"  
							name="potongan" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400
                      		outline-none" 
					  		value=<?php echo $potongan;?>
						>
      				</div>

					<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="total_gaji_diterima" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Total Gaji Diterima 
						</label>
        				<input 
							type="text"  
							name="total_gaji_diterima" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400
                      		outline-none" 
					  		value=<?php echo $total_gaji_diterima;?>
						>
      				</div>

      				<div class="text-right">
	  					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
						<a
            				href="../../login/homepage.php"
           					type="submit"
            				class="inline-block px-3 py-3 
							bg-black 
							text-white uppercase rounded shadow-md 
							hover:bg-black hover:shadow-lg 
							focus:bg-black focus:shadow-lg focus:outline-none focus:ring-0 
							active:bg-black active:shadow-lg"
            				data-mdb-ripple="true"
            				data-mdb-ripple-color="light">
            				Go to homepage
          				</a>
		  				<input 
							name="update" 
							type="submit" 
							class="py-3 px-2 
							bg-blue-400 hover:bg-blue-700 
							text-white font-bold" 
							value="update"
						>
	  				</div>
  				</div>
			</div>
		</form>
	</body>
</html>