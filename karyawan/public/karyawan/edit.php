<?php
	// include database connection file
	include_once("../../config/config.php");
 
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{ 	$id = $_POST['id'];
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

      				<div class="flex items-center mb-10">
        				<label 
							for="nip" 
							class="inline-block w-20 mr-6 text-right font-bold 
								text-gray-600">Nip
						</label>
    					<input type="text"  
							name="nip" 
							placeholder="" 
        					class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $nip;?>
						> <!-- check other class spec upper section -->
      				</div>

      				<div class="flex items-center mb-5">
						<!--         tip - here neede inline-block , but why? -->
	        			<label for="nik" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Nik
						</label>
        				<input 
							type="text"  
							name="nik" 
							placeholder="" 
    	       				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
    	                	text-gray-600 placeholder-gray-400 outline-none" 
							value=<?php echo $nik;?>
						>
      				</div>

      				<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="nama" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Nama 							
						</label>

        				<input type="text"  name="nama" placeholder="" 
            	   			class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400 outline-none"
							value=<?php echo $nama;?>
						>
  					</div>

	      			<div class="flex items-center mb-5">
    	   	 			<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="jenis_kelamin" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Jenis Kelamin 
						</label>
    	    			<input 
							type="text"  
							name="jenis_kelamin" 
							placeholder=" 'Pria', 'Wanita' " 
           					class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                 			text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $jenis_kelamin;?>
						>
      				</div>

    	  			<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tempat_lahir" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tempat Lahir 
						</label>
    	    			<input 
							type="text"  
							name="tempat_lahir" 
							placeholder="" 
           					class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400 outline-none" 
					  		value=<?php echo $tempat_lahir;?>
						>
      				</div>

    	  			<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="tanggal_lahir" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Tanggal Lahir 
						</label>
        				<input 
							type="text"  
							name="tanggal_lahir" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400
    	              		outline-none" 
					  		value=<?php echo $tanggal_lahir;?>
						>
      				</div>

				  	<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
    					<label 
							for="telpon" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Telpon 
						</label>
        				<input 
							type="text"  
							name="telpon" 
							placeholder="" 
	           				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
    	              		text-gray-600 placeholder-gray-400
    	    	      		outline-none" 
					  		value=<?php echo $telpon;?>
						>
      				</div>

					<div class="flex items-center mb-5">
    					<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="agama" 
							class="inline-block w-20 mr-6 text-right font-bold 
						text-gray-600">Agama 
						</label>
    	    			<input 
							type="text"  
							name="agama" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400
                  			outline-none" 
					  		value=<?php echo $agama;?>
						>
      				</div>

					  <div class="flex items-center mb-5">
    	    			<!--         tip - here neede inline-block , but why? -->
        				<label 
							for="status_nikah" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">status_nikah 
						</label>
        				<input 
							type="text"  
							name="status_nikah" 
							placeholder=" 'Belum Nikah', 'Nikah' " 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400
                	  		outline-none" 
				  			value=<?php echo $status_nikah;?>
						>
      				</div>

					<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
    					<label 
							for="alamat" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Alamat
						</label>
        				<input 
							type="text"  
							name="alamat" 
							placeholder="" 
           					class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
    	              		text-gray-600 placeholder-gray-400
        	          		outline-none" 
					  		value=<?php echo $alamat;?>
						>
      				</div>

					<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
    					<label 
							for="golongan_id" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Golongan Id 
						</label>
        				<input 
							type="text"  
							name="golongan_id" 
							placeholder="" 
    	           			class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
        	          		text-gray-600 placeholder-gray-400
            	      		outline-none" 
					  		value=<?php echo $golongan_id;?>
						>
      				</div>

					<div class="flex items-center mb-5">
        				<!--         tip - here neede inline-block , but why? -->
    	    			<label 
							for="foto" 
							class="inline-block w-20 mr-6 text-right font-bold 
							text-gray-600">Foto
						</label>
	    				<input 
							type="text"  
							name="foto" 
							placeholder="" 
               				class="flex-1 py-2 border-b-2 
							border-gray-400 focus:border-green-400 
                  			text-gray-600 placeholder-gray-400
                  			outline-none" 
			  			value=<?php echo $foto;?>
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