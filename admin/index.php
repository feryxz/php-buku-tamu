<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('core/init.php');
require_once('../dist/sidebar.php');

$result = tampilData();
$result = search();
?>
    <title>Buku Tamu Multimedia SMKN 12</title>
    <main>
      <a class="waves-effect btn" style="background-color: #00b0ff;margin-top: 17px;margin-left: 10px;" href="input_bukutamu.php"><i class="material-icons left">add</i>Tambah Buku Tamu</a>
      <div class="section right" style="margin-right: 10px;"> 
        <div class="col s12">
          <form action="" method="post">
            <input id="search-box" name="input_cari" size="40" type="text" placeholder="Pencarian Data"/>
            <input id="search-btn" name="cari_data" value="Cari Tamu" type="submit"/>
          </form>
        </div>
      </div>
<?php 
  $qux = $link->query("SELECT * FROM tb_buku");
  $dap = mysqli_num_rows($qux);
  if ($dap < 1) {
 ?>
<div id="MyModal" class="modal">
    <div class="modal-content">
      <h4>Hapus</h4>
      <p>Apakah anda yakin ingin menghapus ?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
      <a href="delete_bukutamu.php?id=<?php echo $row['id']; ?>" class="modal-close waves-effect waves-green btn-flat">Hapus</a>
    </div>
  </div>
<?php }else{

} ?>
      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Tanggal / Waktu</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>Asal Sekolah</th>
                  <th>No. Telp</th>
                  <th>Opsi</th>
              </tr>
            </thead>

            <?php
              $no = 1;
              while($row = mysqli_fetch_assoc($result)):
              
            ?>
            
            <tbody>
              <tr>
                <td><?= $no; ?></td>
                <td><?= date("d/m/Y H:i:s", strtotime($row['tanggal'])) ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['asal']; ?></td>
                <td><?= $row['notelp']; ?></td>
                <td>
                  <!-- <a href="edit_bukutamu.php?id=<?php echo $row['id']; ?>" title="Edit"><i class="material-icons disabled">mode_edit</i></a> -->
                   <a class="waves-effect waves-light btn-danger modal-trigger" href="#modal1"><i class="material-icons">delete</i></a>
                  <!-- <a href="delete_bukutamu.php?id=<?php echo $row['id']; ?>" style="color:red;" title="Hapus" ><i class="material-icons">delete</i></a> -->
                </td>
              </tr>
            </tbody>
             <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Hapus</h4>
      <p>Apakah anda yakin ingin menghapus ?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
      <a href="delete_bukutamu.php?id=<?php echo $row['id']; ?>" class="modal-close waves-effect waves-green btn-flat">Hapus</a>
    </div>
  </div>
            <?php
            $no++;
          endwhile;
            ?>
          </table>
        </div>
      </div>
    </main>

<?php
}else {
  header("location:/bukutamu/index.php");
}
require_once('../dist/footer.php');
?>
