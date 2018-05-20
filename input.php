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
          	<tr>
      			<td height="40" bgcolor="black"><strong></strong>
       				 <h2><font color="black">INPUT DATA KARYAWAN</font></h2>
        			<strong></strong></td>
   			</tr>
           <form action="simpan.php" method="post">
            <table align="center">
                <label style="margin-right: 150px;">NIK</style></label>
                <input class="text" name="nik" placeholder="Masukan NIK" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 133px;">Nama</style></label>
                <input class="text" name="nama" placeholder="Masukan Nama" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 72px;">Tanggal Lahir</style></label>
                <input type="date" name="tgl_lahir" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 67px">Jenis Kelamin</label><select name="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select><br>
                <label style="margin-right: 124px">Bagian</label><select name="bagian">
                            <option value="HRD">HRD</option>
                            <option value="Keuangan">Keuangan</option>
                            <option value="Produksi">Produksi</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Gudang">Gudang</option>
                            <option value="SDM">SDM</option>
                            <option value="Dana dan Jasa">Dana dan Jasa</option>
                        </select><br>
    			<label style="margin-right: 120px;">Alamat</style></label>
                <input class="text" name="alamat" placeholder="Masukan Alamat" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 127px">Status</label><select name="status">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select><br>
               	<label style="margin-right: 125px">Agama</label><select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Risten</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select><br>         
               	<label style="margin-right: 60px;">Nomor Telepon</style></label>
                <input class="text" name="no_tlp" placeholder="Masukan No Telepon" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 130px;">Email</style></label>
                <input class="text" name="email" placeholder="Masukan Alamat Email" style="margin-bottom: 10px;"></input><br>
                <label style="margin-right: 70px;">Foto</style></label>
                <input type="file" name="foto" ></input><br>
                <button type="submit" value="simpan.php">SIMPAN</button>
            </table>
        </form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>