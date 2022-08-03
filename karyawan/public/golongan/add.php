<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Add data</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form action="add.php" method="post" name="form">
		<div class="bg-purple-400 py-10 px-10 min-h-screen ">
			<!--   tip; mx-auto -- jagab ilusti keskele  -->
			<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">	
				<!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      			<div class="flex items-center mb-5">
					
        			<!--         tip - here neede inline-block , but why? -->
        			<label 
						for="id" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Id
					</label>
					<input 
						type="text"  name="id" placeholder="...." 
						class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					>
				</div>
				<div class="flex items-center mb-10">
					<label 
						for="nama_golongan" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Nama Golongan
					</label>
					<input 
						type="text"  name="nama_golongan" placeholder="...." 
						class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					> <!-- check other class spec upper section -->
				</div>
				<div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
        			<label 
						for="gaji_pokok" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Gaji Pokok
					</label>
					<input 
						type="text"  name="gaji_pokok" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					>
      			</div>
				<div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
       	 			<label 
						for="tunjangan_istri" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Tunjangan Istri
					</label>
					<input 
						type="text"  name="tunjangan_istri" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400
                      	outline-none"
					>
      			</div>
				  <div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
       	 			<label 
						for="tunjangan_anak" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Tunjangan Anak
					</label>
					<input 
						type="text"  name="tunjangan_anak" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400
                      	outline-none"
					>
      			</div>
				  <div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
       	 			<label 
						for="tunjangan_transport" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Tunjangan Transport
					</label>
					<input 
						type="text"  name="tunjangan_transport" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400
                      	outline-none"
					>
      			</div>
				  <div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
       	 			<label 
						for="tunjangan_makan" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Tunjangan Makan
					</label>
					<input 
						type="text"  name="tunjangan_makan" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400
                      	outline-none"
					>
      			</div>
      			<div class="text-right">
					<a
            			href="../../login/homepage.php"
            			type="submit"
            			class="inline-block px-3 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            			data-mdb-ripple="true"
            			data-mdb-ripple-color="light">
            			Go to homepage
          			</a>
					<input name="Submit" type="submit" class="py-3 px-2 bg-gray-400 hover:bg-green-700 text-white font-bold" value="Tambah Data Golongan">
					<?php
						// Check If form submitted, insert form data into users table.
						if(isset($_POST['Submit'])) {
							$id = $_POST['id'];
							$nama_golongan = $_POST['nama_golongan'];
							$gaji_pokok = $_POST['gaji_pokok'];
							$tunjangan_istri = $_POST['tunjangan_istri'];
							$tunjangan_anak = $_POST['tunjangan_anak'];
							$tunjangan_transport = $_POST['tunjangan_transport'];
							$tunjangan_makan = $_POST['tunjangan_makan'];
							// include database connection file
							include_once("../../config/config.php");			
							// Insert user data into table
							$result2 = mysqli_query($mysqli, "INSERT INTO golongan(id,nama_golongan,gaji_pokok,tunjangan_istri,tunjangan_anak,tunjangan_transport,tunjangan_makan) VALUES('$id','$nama_golongan','$gaji_pokok','$tunjangan_istri','$tunjangan_anak','$tunjangan_transport','$tunjangan_makan')");
							// Show message when user added
							echo "data added successfully. <a href='../../login/homepage.php' class='text-blue-600' >View Users</a>";
						}
					?>
				</div>
				</form>
			</div>
		</div>
	</form>	
</body>
</html>