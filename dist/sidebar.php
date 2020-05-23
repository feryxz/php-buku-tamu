<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="../dist/img/favicon.png" />
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="../vendor/materializecss/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../vendor/materializecss/css/icon.css" media="screen,projection"/>
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../dist/css/style.css" media="screen,projection"/>
    <script type="text/javascript" src="../vendor/materializecss/js/jquery-3.2.1.min.js"></script>
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <center>
          <img class="circle responsive-img z-depth-3" src="../dist/img/uwu.jpg" style="width: 70%; margin-top: 5%; margin-bottom: 5%;">
          <h5>Hi, Fery</h5>
        </center><br>
        <li class="bold"><a href="index.php" class="waves-effect"><i class="material-icons">dashboard</i>Beranda</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect"><i class="material-icons">view_list</i>Menu Pengisian</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="input_bukutamu.php">Buku Tamu</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect"><i class="material-icons">file_download</i>Cetak Laporan</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="export_excel.php">Cetak ke Excell</a></li>
                  <li><a href="export_pdf.php">Cetak ke PDF</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="setting_admin.php" class="waves-effect"><i class="material-icons">account_circle</i>Pengaturan Akun</a></li>
        <li class="bold"><a href="#bantuan" class="waves-effect modal-trigger"><i class="material-icons">live_help</i>Bantuan</a></li>
        <li class="bold"><a href="#logout" class="waves-effect modal-trigger"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </header>

    <!-- logout -->
    <div id="logout" class="modal">
    <div class="modal-content">
      <h4>Logout</h4>
      <p>Apakah anda yakin ingin keluar ?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Batal</a>
      <a href="../logout.php" class="modal-close waves-effect waves-green btn-flat">Keluar</a>
    </div>
  </div>

    <!-- Main -->
    <nav><div class="nav-wrapper"></div></nav>
    <div id="bantuan" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Bantuan Aplikasi</h4>
        <p>Apa itu buku tamu?
          <br><br>
          <strong>Buku tamu</strong> adalah buku yang berisi nama tamu yang hadir dalam pertemuan (rapat, resepsi, kantor, dan sebagainya.</p>
        <p>Bagaimana Cara Menggunakannya?
          <br><br>
          <strong>Cara Menggunakannya sebagai berikut :</strong>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;1. Login dengan user yang sudah disediakan administrator. <br><br>
          <img src="../dist/img/cara1.png" style="margin-left: 55px;">
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;2. Isikan data anda dengan benar, agar ketika ada event" besar kami akan menghubungi anda. <br><br>
          <img src="../dist/img/cara2.png" width="650px" style="margin-left: 55px;">
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;3. Ketika sudah terisi Klik tombol Kirim Data, maka data anda sudah otomatis masuk ke database kami. <br><br>
          <img src="../dist/img/cara3.png" width="650px" style="margin-left: 55px;">
        </p>
        <p>Bagaimana jika ingin mencari nama pengunjung?
          <br><br>
          <strong>Cara pencariannya seperti ini :</strong>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;Masukkan apa yang anda cari misal : nama, alamat, asal sekolah / no telepon. Jika sudah klik tombol Cari Tamu <br><br>
          <img src="../dist/img/cara4.png" width="650px" style="margin-left: 55px;">
          <br><br>
          -Maka yang akan muncul adalah data dicari
          <br><br>
          <img src="../dist/img/cara5.png" width="650px" style="margin-left: 55px;">
        </p>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat ">Ya, Saya Mengerti</a>
      </div>
    </div>
