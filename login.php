<?php session_start();
require_once 'class/order.php';
require_once 'function/func.php';
require_once 'class/user.php';

if (isset($_SESSION['user'])) {
  header("Location:admin.php");
}

if (isset($_POST['tenTK']) && isset($_POST["mk"])) {
  $user = $_POST['tenTK'];
  $pass = md5($_POST['mk']);
  $userDB = new user($link);
  $user = $userDB->checkLogin($user, $pass);
  if ($user != null) { 
    $user["mk"] = "";
    $_SESSION['user'] = $user;
    echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
  } else {
    echo "invalid UserName or Password";
  }
}
?>
<html>

<head>

  <title> Login Page </title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="style/login.css">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="main-container">
    <a class="text-light d-flex align-items-center mx-auto my-3" href="index.php">
      <img src="asset/images/logo-dark.png" alt="" class="pr-2" style="width: 75px;">
      <span class="color-1" style="
                            font-size: 2.5em;
                            font-weight: 700;
                        ">Smart</span>
    </a>
    <div class="glass">

      <div class="row m-0 row-cust">
        <div class="col p-5 mb-4 mt-4">
          <div class="form-header d-flex">
            <p>Đăng Nhập</p>
          </div class="d-flex align-items-center">
          <form action="" method="POST">
            <div class="form-group">
              <label for="tenTK">Tên Đăng Nhập</label>
              <input type="text" class="form-control" id="tenTK" name="tenTK">
            </div>
            <div class="form-group">
              <label for="mk">Mật Khẩu</label>
              <input type="password" class="form-control" id="mk" name="mk">
            </div>
            <button type="submit" class=" border-0 btn-cust text-center text-white mb-3 w-100 mx-auto" value="LOGIN">Đăng Nhập</button>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="nhoTK">
              <label class="form-check-label" for="nhoTK">Nhớ tài khoản</label>
            </div>
          </form>
        </div>
        <div class="p-4  justify-content-center col text-white text-center d-flex align-items-center m-0" style="background: linear-gradient(
135deg,#f75959 0%,#f35587 100%);">
          <div>
            <h4>Chào Mừng Bạn Đã Quay Trở Lại</h4>
            <p>Bạn chưa có tài khoản</p>
            <a href="signup.php" class="btn btn-outline-danger" style="color: white;
    border-color: white;">Đăng kí</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>