<?php
require_once '_top.php';
require_once 'connection.php';

if (isset($_GET['id_pengaduan'])) {
  $id_pengaduan = $_GET['id_pengaduan'];

  // Ambil data pengaduan berdasarkan id_pengaduan
  $query = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'";
  $result = mysqli_query($connection, $query);
  $data = mysqli_fetch_array($result);
}
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>FORM tanggapan</h1>
    <a href="../index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="store.php?id_pengaduan=<?= $data['id_pengaduan'] ?>" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>ID Pengaduan</td>
                <td><input class="form-control" type="text" name="id_pengaduan" value="<?= $data['id_pengaduan']; ?>"
                    readonly></td>
              </tr>
              <tr>
                <td>Judul Pengaduan</td>
                <td><input class="form-control" type="text" name="judul"
                    value="<?= $data['judul']; ?>" readonly></td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td><img src="../assets/img/pengaduan/<?= $data['image']; ?>" class="border border-dark" width="100" height="100"></td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td colspan="3"><textarea class="form-control" name="deskripsi" style="height: 150px;"
                    readonly><?= $data['deskripsi']; ?></textarea></td>
              </tr>
              <tr>
                <td>Tanggal Pengaduan</td>
                <td><input class="form-control" type="date" name="tgl_pengaduan"
                    value="<?= $data['tgl_pengaduan']; ?>" readonly></td>
              </tr>
              <tr>
                <td>Tanggapan</td>
                <td colspan="3"><textarea class="form-control" name="tanggapan" style="height: 150px;" required></textarea></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '_bottom.php';
?>
