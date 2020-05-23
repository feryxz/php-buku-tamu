<?php
require_once('core/init.php');

if (isset($_POST['kirim'])) {
  if(kirimData($_POST['nama'], $_POST['alamat'], $_POST['asal_sekolah'], $_POST['notelp'])){
    header('location: index.php');
  }else {
    echo "Data Gagal Dikirim";
  }
}
require_once('../dist/sidebar.php');
?>
<title>Isi Buku Tamu - Multimedia SMKN 12</title>

<main>
  <div class="section row">
    <div class="col s12">
    <a class="waves-effect btn" style="background-color: #00b0ff;" href="index.php"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
    <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#bantuan"><i class="material-icons left">help</i>Bantuan</a>
    </div>
  </div>

  <div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nama">
          <label>Nama Lengkap</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <textarea class="materialize-textarea" name="alamat"></textarea>
          <label>Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">location_city</i>
          <input class="validate" type="text" name="asal_sekolah">
          <label>Asal Sekolah</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input class="validate" type="number" name="notelp">
          <label>No. Telp</label>
        </div>
      </div>
      <div class="row col s12">
        <button class="btn waves-effect right" type="submit" name="kirim" style="background-color: #27AE60; margin-left: 6px;">Kirim Data
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</main>

<?php
require_once('../dist/footer.php');
?>
