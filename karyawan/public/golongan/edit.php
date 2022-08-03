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
		<title>Edit User Data</title>
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

      				<div class="flex items-center mb-10">
        				<label 
							for="nama_golongan" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Nama Golongan 
						</label>
        				<input type="text"  
							name="nama" 
							placeholder="" 
        					class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $nama_golongan;?>
						> <!-- check other class spec upper section -->
      				</div>

      				<div class="flex items-center mb-5">
						<!--         tip - here neede inline-block , but why? -->
        				<label for="gaji_pokok" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Gaji Pokok 
						</label>
        				<input 
							type="text"  
							name="tlp" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $gaji_pokok;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tunjangan_istri" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tunjangan Istri 
						</label>
        				<input type="text"  name="alamat" placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none"
							value=<?php echo $tunjangan_istri;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
       	 				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tunjangan_anak" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tunjangan Anak 
						</label>
        				<input 
							type="text"  
							name="username" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                     		text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $tunjangan_anak;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tunjangan_transport" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tunjangan Transport
						</label>
        				<input 
							type="text"  
							name="password" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $tunjangan_transport;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tunjangan_makan" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tunjangan Makan 
						</label>
        				<input 
							type="text"  
							name="akses" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                      		text-gray-600 placeholder-gray-400
                      		outline-none" 
					  		value=<?php echo $tunjangan_makan;?>
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