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
</head>
<body>
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
      			<td height="40" bgcolor="black"><strong></strong>
       				 <h2><font color="black">INPUT DATA KARYAWAN</font></h2>
        			<strong></strong></td>
   
       
           <form action="proses_edit.php" method="post">
            <table align="center">
                <?php 
    include "koneksi.php";
    $nik = $_GET['nik'];
    $query_mysql = mysqli_query ($koneksi,"SELECT * FROM dt_karyawan WHERE nik='$nik'")or die(mysqli_error());
    $nomor = 0;
    while($data = mysqli_fetch_array($query_mysql)){
      ?>
      <form method="POST" action="proses_edit.php">   
        <table>
          <tr>
            <td>Nik</td>
            <td>
              <input type="text" name="nik" value="<?php echo $data['nik'] ?>">
            </td>         
          </tr> 
          <tr>
            <td>Nama</td>
            <td>
              <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
            </td>         
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>
              <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
            </td>         
          </tr>
          <tr>
          <td>Jenis Kelamin</td>
          <td><select type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"> 
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>         
         </tr></select>
         <tr>
          <tr>
        <td>Divisi</td>
        <td><select type="text" name="bagian" value="<?php echo $data['bagian'] ?>"> 
         <option value="HRD">HRD</option>
         <option value="Keuangan">Keuangan</option>
         <option value="Produksi">Produksi</option>
         <option value="Pemasaran">Pemasaran</option>
         <option value="Gudang">Gudang</option>
         <option value="SDM">SDM</option>
         <option value="Dana dan Jasa">Dana dan Jasa</option>
       </select></td>          
     </tr> 
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>          
          </tr>
          <tr>
        <td>Agama</td>
        <td><select type="text" name="agama" value="<?php echo $data['agama'] ?>">
          <option value="Islam">Islam</option>
          <option value="Kristen">Risten</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Konghuchu">Konghuchu</option>
        </select></td>          
      </tr>
          <td>Status</td>
          <td><select  type="text" name="status" value="<?php echo $data['status'] ?>"> 
            <option value="Menikah">Menikah</option>
            <option value="Tidak Menikah">Tidak Menikah</option>
          </select>
        </td>          
      </tr>
          <td>Nomor Telephone</td>
          <td><input  type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>"></td>          
        </tr>
     <td>email</td>
     <td><input s type="text" name="email" value="<?php echo $data['email'] ?>"></td>          
   </tr>
   <tr>
    <td>Foto</td> 
    <td>
      <input  type="file" name="foto">
    </td>
  </tr> 

  <tr><td colspan="2"><button type="submit" value="proses_edit.php">SIMPAN</button></td></tr>       
</tr>       
</table>
</form>
<?php } ?>
            </table>
        </form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>