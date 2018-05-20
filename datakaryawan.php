<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Karyawan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="home.php">PT. Aditya</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color: black" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color: black" href="input.php">Input Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color: black" href="datakaryawan.php">Data Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color: black" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
<body>
    <section id="input">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          	<tr>
      			<td height="40" align="center" bgcolor="black"><strong></strong>
       				 <h2><font color="black">DATA KARYAWAN</font></h2>
        			<strong></strong></td>
   			</tr>
            	<table border="1" width="100%">
      			 	<tr>
         			<th>NIK</th>
              <th>Nama</th>
         			<th>Tanggal Lahir</th>
         			<th>Jenis Kelamin</th>
          		<th>Bagian</th>
        		 	<th>Alamat</th>
        		 	<th>Agama</th>
         			<th>Status</th>
         			<th>Nomor Telepon/th>
         			<th>Email</th>
         			<th>Foto</th>
         			<th colspan="2">Aksi</th>
       				</tr> 
<?php 
 // Load file koneksi.php  
       include 'koneksi.php';  

$query = "SELECT * FROM dt_karyawan"; // Query untuk menampilkan semua data siswa  
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['tgl_lahir']."</td>"; 
  echo "<td>".$data['jenis_kelamin']."</td>"; 
  echo "<td>".$data['bagian']."</td>";
  echo "<td>".$data['alamat']."</td>";
  echo "<td>".$data['agama']."</td>";
  echo "<td>".$data['status']."</td>";
  echo "<td>".$data['no_tlp']."</td>";
  echo "<td>".$data['email']."</td>";
  echo "<td><img src=images/".$data['foto']." 'width='50' height='50'></td>"; 
  echo "<td><a href='edit.php?nik=".$data['nik']."'>Edit</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>

       			</table>
        	</form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>