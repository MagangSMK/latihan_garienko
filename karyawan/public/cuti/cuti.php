<?php
include_once("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="../../aset/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../aset/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../../aset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  </head>
  <body class="g-sidenav-show" >
    <div class="bg-slate-300 py-25 px-1 min-h-screen">
      
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-gray-600" id="sidenav-main">

        <div class="sidenav-header bg-gray-600">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="../../login/homepage.php" >
            <span class="ms-1 font-weight-bold text-white">Home Page</span>
          </a>
        </div>
  
        <marquee class="bg-white" scrollamount="2"><h6 class="text-red-600" >Database Cuti</h6></marquee>
        <hr class="horizontal light mt-0 mb-2">
      
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
        
            <li class="nav-item">
              <a class="nav-link text-white " href="cuti.php">              
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
            
                <span class="nav-link-text ms-1">Tabel Cuti</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="../golongan/golongan.php">  
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
            
                <span class="nav-link-text ms-1">Tabel Golongan</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="../karyawan/karyawan.php">
  
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
  
                <span class="nav-link-text ms-1">Tabel Karyawan</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="../lembur/lembur.php">
  
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
  
                <span class="nav-link-text ms-1">Tabel Lembur</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="../penggajian/penggajian.php">
  
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
  
                <span class="nav-link-text ms-1">Tabel Penggajian</span>
              </a>
            </li>

            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
              <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="../../login/logout.php" type="button">Log Out</a>
              </div>
            </div>
          </ul>
        </div>
  
      </aside>
      <main class="main-content border-radius-lg ">  
      <div class="py-3"> 
        <a href="add.php" 
          type="submit" 
          class="inline-block px-2 py-2
          bg-blue-600 
          text-white uppercase rounded shadow-md 
          hover:bg-blue-700 hover:shadow-lg 
          focus:bg-blue-700 focus:shadow-lg 
          focus:outline-none focus:ring-0 
          active:bg-blue-800 active:shadow-lg"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light">Add Data
        </a>
      </div>
      <form method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input 
          href="../public/cuti/add.php" 
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
                      <th scope="col" class="text-sm font-medium text-white px-1 py-2">Id</th> 
                      <th scope="col" class="text-sm font-medium text-white px-1 py-2">Karyawan Id</th>
                      <th scope="col" class="text-sm font-medium text-white px-1 py-2">Tanggal Cuti</th> 
                      <th scope="col" class="text-sm font-medium text-white px-1 py-2">Jumlah</th>
                      <th scope="col" class="text-sm font-medium text-white px-1 py-2">Update</th> 
                    </tr>
                  </thead>
                  <tbody>
                      
                      <?php
                        if(isset($_GET['cari'])){
                          $cari = $_GET['cari'];
                          $result1 = mysqli_query($mysqli,"select * from cuti where id like '%".$cari."%'");
                        }
                        else{
                          $result1= mysqli_query($mysqli, "SELECT * FROM cuti order BY id asc");
                        }
                        while($user_data = mysqli_fetch_array($result1)) {
                          echo "<tr class='bg-white border-b'>";
                          echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-blue-900'>".$id = $user_data['id']."</td>";
		                      echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$karyawan_id =$user_data['karyawan_id']."</td>";
		                      echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$tanggal_cuti = $user_data['tanggal_cuti']."</td>";
		                      echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlah = $user_data['jumlah']."</td>";
                          echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'><a  href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                        }
                      ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>