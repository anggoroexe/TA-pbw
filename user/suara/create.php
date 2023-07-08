<?php
require_once '_top.php';
require_once 'connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>FORM PENGADUAN</h1>
    <a href="../index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="store.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>ID Pengaduan</td>
                <td><input class="form-control" type="text" name="id_pengaduan" value="<?php echo date('mdHs'); ?>"
                    readonly></td>
              </tr>
              <tr>
                <td>Judul Pengaduan</td>
                <td><input class="form-control" type="text" name="judul_pengaduan" required></td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="file" name="image" accept="image/*" required></td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td colspan="3"><textarea class="form-control" name="deskripsi" required></textarea></td>
              </tr>
              <tr>
                <td>Tanggal Pengaduan</td>
                <td><input class="form-control" type="date" name="tgl_pengaduan" required></td>
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