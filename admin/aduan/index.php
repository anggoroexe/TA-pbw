<?php
require_once '_top.php';
require_once 'connection.php';

$result = mysqli_query($connection, "SELECT * FROM pengaduan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Pengaduan</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover ta    ble-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Deskripsi</th>
                  <th>Tgl Pengaduan</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $counter = 1;
              while ($data = mysqli_fetch_array($result)) :
              ?>
                <tr>
                  <td><?= $counter++ ?></td>
                  <td><img src="../assets/img/pengaduan/<?= $data['image'] ?>" width="100" height="100"></td>
                  <td><?= $data['deskripsi'] ?></td>
                  <td><?= $data['tgl_pengaduan'] ?></td>
                </tr>
              <?php
              endwhile;
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
<script>
  iziToast.success({
    title: 'Sukses',
    message: `<?= $_SESSION['info']['message'] ?>`,
    position: 'topCenter',
    timeout: 5000
  });
</script>
<?php
  } else {
  ?>
<script>
  iziToast.error({
    title: 'Gagal',
    message: `<?= $_SESSION['info']['message'] ?>`,
    timeout: 5000,
    position: 'topCenter'
  });
</script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="modules-datatables.js"></script>