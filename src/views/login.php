<div class="container">

  <form class="form-signin" style="width:50%;" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <h2 class="form-signin-heading">Inicia Sesión</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Correo" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
    <!-- <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div> -->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div>
<script src="../js/script.js"></script>

<?php
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

if (isset($_GET['mail']) && isset($_GET['pwd'])) {
  $email = $_GET['mail'];
  $pwd = $_GET['pwd'];
  require_once('../src/model/loginModel.php');
  $loginModel = new loginModel;
  if ($loginModel->checkLogin($email, $pwd) === true) {
    echo "Login Successful";
    header("https://youtube.com");
  }
} else {
}


?>