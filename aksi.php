<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "final_0087");
$query = "SELECT * FROM user WHERE username='$username' && password='$password'";
$login = mysqli_query($conn, $query);
$isLogin = mysqli_num_rows($login);
if (isset($_POST['login'])) {
  if ($isLogin > 0) {
    $data = mysqli_fetch_assoc($login);
    $_SESSION['user'] = $username;
    if ($data['level'] == 1) {
      $_SESSION['level'] = $data['level'];
      header("Location: admin/index.php");
    } else if ($data['level'] == 0){
      $_SESSION['level'] = $data['level'];
      header("Location: user/index.php");
    }
  } else {
    $msg = "<p class='alert alert-danger'>User / Password salah.. </p>";
    header("Location: index.php?msg=$msg");
    exit;
  }
}
?>