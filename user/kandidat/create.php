<?php
require_once '_top.php';
require_once 'connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <a href="../index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Nama Pemilih</td>
                <td><input class="form-control"  name="nama_pemilih" size="20" required></td>
              </tr>


              <tr>
                <td>Pilihan</td>
                <td>
                  <select class="form-control" name="pilihan" id="jenkel" required>
                    <option value="">--Pilih Calon Ketua--</option>
                    <option value="Kahis">Kahis</option>
                    <option value="Bayu">Bayu</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>NIM</td>
                <td colspan="3"><textarea class="form-control" name="nim" id="alamat" required></textarea></td>
              </tr>

              <tr>
                <td>Kelas</td>
                <td colspan="3"><textarea class="form-control" name="kelas" id="alamat" required></textarea></td>
              </tr>
              
              <tr>
                <td>
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