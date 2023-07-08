<?php
require_once '_top.php';
require_once 'connection.php';

$dosen = mysqli_query($connection, "SELECT COUNT(*) FROM suara_ti");



?>
<section class="section">
  <div class="section-header">
  <h1>selamat datang di halaman admin !</h1>
</section>

<?php
require_once '_bottom.php';
?>