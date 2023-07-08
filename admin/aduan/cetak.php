<?php
ob_start();
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
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tgl Pengaduan</th>
                  <th>Tanggapan</th>
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
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['deskripsi'] ?></td>
                    <td><?= $data['tgl_pengaduan'] ?></td>
                    <td>
                      <?php
                      if ($data['tanggapan'] === null) {
                        echo "Aduan ini belum ditanggapi";
                      } else {
                        echo $data['tanggapan'];
                      }
                      ?>
                    </td>
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
  </div>
</section>

<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }
</style>

<script src="modules-datatables.js"></script>

<?php
$data = ob_get_clean();
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($data);
$mpdf->Output('ListPengaduan.pdf', 'D');
