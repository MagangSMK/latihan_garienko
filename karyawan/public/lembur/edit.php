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
		<title>Edit Data lembur</title>
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
							type="text" disabled name="id" placeholder="" 
							class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none"  
							value=<?php echo $id;?>
						>
      				</div>

      				<div class="flex items-center mb-10">
						<label 
							for="karyawan_id" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Karyawan Id 
						</label>
        				<input 
							type="text" name="karyawan_id" placeholder="" 
							class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
							text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $karyawan_id;?>
						> 		<!-- check other class spec upper section -->
      				</div>

      				<div class="flex items-center mb-5">
						<!--         tip - here neede inline-block , but why? -->
						<label 
						for="tanggal_lembur" 
						class="inline-block w-20 mr-6 text-right font-bold 
						text-gray-600">Tanggal Lembur 
					</label>
        			<input type="text"  
						name="tanggal_lembur" placeholder="" class="flex-1 py-2 border-b-2 
						border-gray-400 focus:border-green-400 
                      	text-gray-600 placeholder-gray-400 outline-none" 
						value=<?php echo $tanggal_lembur;?>
					>
      			</div>

      			<div class="flex items-center mb-5">
					<!--         tip - here neede inline-block , but why? -->
					<label 
						for="jumlah" class="inline-block w-20 mr-6 text-right font-bold 
						text-gray-600">Jumlah
					</label>
        			<input 
						type="text"  
						name="jumlah" 
						placeholder="" 
               			class="flex-1 py-2 border-b-2 
						border-gray-400 focus:border-green-400 
                      	text-gray-600 placeholder-gray-400 outline-none"
						value=<?php echo $jumlah;?>
					>
      			</div>

      			<div class="text-right">
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<a
            			href="../../login/homepage.php" type="submit"
            			class="inline-block px-3 py-3 
						bg-black text-white uppercase rounded shadow-md 
						hover:bg-black hover:shadow-lg 
						focus:bg-black focus:shadow-lg focus:outline-none focus:ring-0 
						active:bg-black active:shadow-lg"
            			data-mdb-ripple="true"
            			data-mdb-ripple-color="light">Go to homepage
          			</a>
		  			<input 
						name="update" type="submit" class="py-3 px-2 
						bg-blue-400 hover:bg-blue-700 
						text-white font-bold" value="update"
					>
	  			</div>
  			</div>
		</div>
	</form>
</body>
</html>