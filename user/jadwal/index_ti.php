<?php
require_once '_top.php';
require_once 'connection.php';

$result = mysqli_query($connection, "SELECT * FROM kandidat");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Jadwal Pemilihan</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
         <p>
         Jadwal Pemilihan Ketua HMJ: <br>
-	Pengumpulan berkas dan persyaratan: 1 - 10 juni 2023<br>
-	Pengumuman lolos berkas: 12 juni 2023<br>
-	Pendaftaran para calon ketua HMJ: 13-15 juni 2023<br>
-	Debat terbuka dan penyampaian visi & misi para calon ketua hmj: 20 juni 2023<br>
-	Pemilihan calon ketua HMJ: 21 Juni 2023<br>
-	Pengumuman ketua HMJ terpilih dan serah terima jabatan: 22 juni 2023<br>

<br>Peraturan pemilihan:<br>
-	Mahasiswa aktif jurusan teknologi informasi UIN Walisongo Semarang yang tidak sedang cuti akademis<br>
-	Hanya boleh memilih satu kandidat calon ketua HMJ<br>
-	Jika terbukti melanggar peraturan, hak suara pemilih dapat dicabut <br>

<br>Tata cara pemilihan:<br>
-	Login pada pilhakim<br>
-	Masuk ke halaman “pilih ketua”<br>
-	Isi data-data yang tertera pada tampilan system<br>
-	Klik “simpan”<br>
-	Selesai<br>
         </p>
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