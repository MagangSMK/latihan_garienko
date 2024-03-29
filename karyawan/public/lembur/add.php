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
	<form action="add.php" method="post" name="form1">
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
						for="karyawan_id" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Karyawan Id
					</label>
					<input 
						type="text"  name="karyawan_id" placeholder="...." 
						class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					> <!-- check other class spec upper section -->
				</div>

				<div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
        			<label 
						for="tanggal_lembur" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Tanggal Lembur
					</label>
					<input 
						type="text"  name="tanggal_lembur" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					>
      			</div>

				<div class="flex items-center mb-5">
        			<!-- tip - here neede inline-block , but why? -->
       	 			<label 
						for="jumlah" 
						class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Jumlah
					</label>
					<input 
						type="text"  name="jumlah" placeholder="...." 
               			class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
					>
      			</div>

      			<div class="text-right">
					<a href="../../login/homepage.php"
						type="submit"
            			class="inline-block px-3 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg 
						focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg" 
						data-mdb-ripple="true" data-mdb-ripple-color="light">Go to homepage
          			</a>
					<input name="Submit" type="submit" class="py-3 px-2 bg-gray-400 hover:bg-green-700 text-white font-bold" value="Tambah Lembur">
					<?php
						// Check If form submitted, insert form data into users table.
						if(isset($_POST['Submit'])) {
							$id = $_POST['id'];
							$karyawan_id = $_POST['karyawan_id'];
							$tanggal_lembur = $_POST['tanggal_lembur'];
							$jumlah = $_POST['jumlah'];
							// include database connection file
							include_once("../../config/config.php");			
							// Insert user data into table
							$result4 = mysqli_query($mysqli, "INSERT INTO lembur(id,karyawan_id,tanggal_lembur,jumlah) VALUES('$id','$karyawan_id','$tanggal_lembur','$jumlah')");
							// Show message when user added
							echo "data added successfully. <a href='../../login/homepage.php' class='text-blue-600' >View Users</a>";
						}
					?>
				</div>
			</div>
		</div>
	</form>	
</body>
</html>