<?php
include_once("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Homepage</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
 
<body>
    <a href="add.php" 
        type="submit" 
        class="inline-block px-4 py-3 
        bg-blue-600 
        text-white uppercase rounded shadow-md 
        hover:bg-blue-700 hover:shadow-lg 
        focus:bg-blue-700 focus:shadow-lg 
        focus:outline-none focus:ring-0 
        active:bg-blue-800 active:shadow-lg"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light">Add Data
    </a>
    <form method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input  
            href="../public/karyawan/add.php" 
            type="submit" 
            value="Cari" 
            class="inline-block px-3 py-2 
            bg-blue-600 
            text-white uppercase rounded shadow-md 
            hover:bg-blue-700 hover:shadow-lg 
            focus:bg-blue-700 focus:shadow-lg 
            focus:outline-none focus:ring-0 
            active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
        >
    </form>
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
    ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Karyawan Id</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tanggal Cuti</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">  
                                <?php
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $result1 = mysqli_query($mysqli,"select * from cuti where id like '%".$cari."%'");
                                    }
                                    else{
                                        $result1= mysqli_query($mysqli, "SELECT * FROM cuti order BY id asc");
                                    }
                                    while($user_data = mysqli_fetch_array($result1)) {
                                        echo "<tr>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-900'>".$id = $user_data['id']."</td>";
		                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$karyawan_id =$user_data['karyawan_id']."</td>";
		                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$tanggal_cuti = $user_data['tanggal_cuti']."</td>";
		                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlah = $user_data['jumlah']."</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

    <br>
    <br>

    <body>
    <a href="add.php" 
        type="submit" 
        class="inline-block px-4 py-3 
        bg-blue-600 
        text-white uppercase rounded shadow-md 
        hover:bg-blue-700 hover:shadow-lg 
        focus:bg-blue-700 focus:shadow-lg 
        focus:outline-none focus:ring-0 
        active:bg-blue-800 active:shadow-lg"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light">ADD Data
    </a>
    <form method="get">
        <label>Cari : </label>
        <input type="text" name="cari">
        <input 
            href="../public/golongan/add.php" 
            type="submit" 
            value="Cari"
            class="inline-block px-3 py-2 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
    </form>
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
    ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama Golongan</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Gaji Pokok</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tunjangan Istri</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tunjangan Anak</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tunjangan Transport</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tunjangan Makan</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $result2 = mysqli_query($mysqli,"select * from golongan where id like '%".$cari."%'");
                            }
                            else{
                                $result2= mysqli_query($mysqli, "SELECT * FROM golongan order BY id asc");
                            } 
                            while($user_data = mysqli_fetch_array($result2)) {
                                echo "<tr>";
                                echo "<td>".$id = $user_data['id']."</td>";
		                        echo "<td>".$nama_golongan =$user_data['nama_golongan']."</td>";
                                echo "<td>".$gaji_pokok = $user_data['gaji_pokok']."</td>";
	    	                    echo "<td>".$tunjangan_istri = $user_data['tunjangan_istri']."</td>";
                                echo "<td>".$tunjangan_anak = $user_data['tunjangan_anak']."</td>";
                                echo "<td>".$tunjangan_transport = $user_data['tunjangan_transport']."</td>";
                                echo "<td>".$tunjangan_makan = $user_data['tunjangan_makan']."</td>";
                                echo "<td> <a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
    
    <br>
    <br>
 
    <body>
    <a href="add.php" 
        type="submit"
        class="inline-block px-4 py-3 
        bg-blue-600 
        text-white uppercase rounded shadow-md 
        hover:bg-blue-700 hover:shadow-lg 
        focus:bg-blue-700 focus:shadow-lg 
        focus:outline-none focus:ring-0 
        active:bg-blue-800 active:shadow-lg"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light">Add Data
    </a>
    <form method="get">
        <label>Cari : </label>
        <input type="text" name="cari">
        <input 
            href="../public/karyawan/add.php" 
            type="submit" 
            value="Cari"
            class="inline-block px-3 py-2 
            bg-blue-600 
            text-white uppercase rounded shadow-md 
            hover:bg-blue-700 hover:shadow-lg 
            focus:bg-blue-700 focus:shadow-lg 
            focus:outline-none focus:ring-0 
            active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
        >
    </form>
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
    ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nip</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nik</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jenis Kelamin</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tempat Lahir</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tanggal Lahir</th>          
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Telpon</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Agama</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Status Nikah</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Alamat</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Golongan Id</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Foto</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <?php
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $result3 = mysqli_query($mysqli,"select * from karyawan where id like '%".$cari."%'");
                                    }
                                    else{
                                        $result3= mysqli_query($mysqli, "SELECT * FROM karyawan order BY id asc");
                                    }
                                    while($user_data = mysqli_fetch_array($result3)) {         
                                        echo "<tr>";
                                        echo "<td>".$id = $user_data['id']."</td>";
		                                echo "<td>".$nip = $user_data['nip']."</td>";
                                        echo "<td>".$nik = $user_data['nik']."</td>";
	                                    echo "<td>".$nama = $user_data['nama']."</td>";
	                                    echo "<td>".$jenis_kelamin = $user_data['jenis_kelamin']."</td>";
		                                echo "<td>".$tempat_lahir = $user_data['tempat_lahir']."</td>";   
                                        echo "<td>".$tanggal_lahir = $user_data['tanggal_lahir']."</td>";
                                        echo "<td>".$telpon = $user_data['telpon']."</td>";
                                        echo "<td>".$agama = $user_data['agama']."</td>";
                                        echo "<td>".$status_nikah = $user_data['status_nikah']."</td>";
                                        echo "<td>".$alamat = $user_data['alamat']."</td>";
                                        echo "<td>".$golongan_id = $user_data['golongan_id']."</td>";
                                        echo "<td>".$foto = $user_data['foto']."</td>";
                                        echo "<td> <a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
    
    <br>
    <br>

<body>
    <a href="add.php" 
        type="submit"
        class="inline-block px-4 py-3 
        bg-blue-600 
        text-white uppercase rounded shadow-md 
        hover:bg-blue-700 hover:shadow-lg 
        focus:bg-blue-700 focus:shadow-lg 
        focus:outline-none focus:ring-0 
        active:bg-blue-800 active:shadow-lg"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light">Add Data
    </a>
    <form method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input
            href="../public/lembur/add.php" 
            type="submit" 
            value="Cari"
            class="inline-block px-3 py-2 
            bg-blue-600 
            text-white uppercase rounded shadow-md 
            hover:bg-blue-700 hover:shadow-lg 
            focus:bg-blue-700 focus:shadow-lg 
            focus:outline-none focus:ring-0 
            active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
        >
    </form>
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
    ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">   
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Karyawan Id</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tanggal Lembur</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <?php
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $result4 = mysqli_query($mysqli,"select * from lembur where id like '%".$cari."%'");
                                    }
                                    else{
                                        $result4= mysqli_query($mysqli, "SELECT * FROM lembur order BY id asc");
                                    }
                                    while($user_data = mysqli_fetch_array($result4)) {         
                                        echo "<tr>";
                                        echo "<td>".$id = $user_data['id']."</td>";
		                                echo "<td>".$karyawan_id = $user_data['karyawan_id']."</td>";
		                                echo "<td>".$tanggal_lembur = $user_data['tanggal_lembur']."</td>";
		                                echo "<td>".$jumlah = $user_data['jumlah']."</td>";
                                        echo "<td><a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

    <br>
    <br>

    <body>
    <a href="add.php" 
        type="submit"
        class="inline-block px-4 py-3 
        bg-blue-600 
        text-white uppercase rounded shadow-md 
        hover:bg-blue-700 hover:shadow-lg 
        focus:bg-blue-700 focus:shadow-lg 
        focus:outline-none focus:ring-0 
        active:bg-blue-800 active:shadow-lg"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light">Add Data
    </a>
    <form method="get">
        <label>Cari : </label>
        <input type="text" name="cari">
        <input 
            href="../public/penggajian/add.php" 
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 
            bg-blue-600 
            text-white uppercase rounded shadow-md 
            hover:bg-blue-700 hover:shadow-lg 
            focus:bg-blue-700 focus:shadow-lg 
            focus:outline-none focus:ring-0 
            active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
        >
    </form>
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
    ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tanggal</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Keterangan</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">karyawan_id</th> 
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah Gaji</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah Lembur</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Potongan</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">total_gaji_diterima</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <?php 
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $result5 = mysqli_query($mysqli,"select * from penggajian where id like '%".$cari."%'");
                                    }
                                    else{
                                        $result5 = mysqli_query($mysqli, "SELECT * FROM penggajian order BY id asc");
                                    } 
                                    while($user_data = mysqli_fetch_array($result5)) {
                                        echo "<tr>";
                                        echo "<td>".$id = $user_data['id']."</td>";
		                                echo "<td>".$tanggal =$user_data['tanggal']."</td>";
                                        echo "<td>".$keterangan = $user_data['keterangan']."</td>";
	    	                            echo "<td>".$karyawan_id = $user_data['karyawan_id']."</td>";
                                        echo "<td>".$jumlah_gaji = $user_data['jumlah_gaji']."</td>";
                                        echo "<td>".$jumlah_lembur = $user_data['jumlah_lembur']."</td>";
                                        echo "<td>".$potongan = $user_data['potongan']."</td>";
                                        echo "<td>".$total_gaji_diterima = $user_data['total_gaji_diterima']."</td>";
                                        echo "<td> <a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>