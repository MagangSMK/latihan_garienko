<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="form-register">
		<div class="register">
			<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "Register gagal! Coba Lagi!";
					}
				}
			?>
			<form method="POST" action="dataregis.php">			
                <div class="flex justify-center items-center h-screen w-full bg-slate-600">
                    <div class="w-1/2 bg-slate-200 rounded shadow-2xl p-8 m-4">
                        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Register</h1>
                        <form action="/" method="post">
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="username">Username</label>
                                <input class="border py-2 px-3 text-grey-800" type="text" name="username" id="username">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label class="mb-2 font-bold text-lg text-gray-900" for="sandi">Password</label>
                                <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                            </div>
                            <button class="block bg-green-600 hover:bg-green-700 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Create Account</button>
                        </form>
                        <p class="text-sm text-center">Already have an account?, <a href="../index.php" class="text-sm no-underline text-blue-500 hover:text-blue-700 float-none mb-4">Sign In</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>