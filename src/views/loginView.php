<div class="container">
  <?php

  if ($_GET['state'] === 'failure') {
    echo "<p class='text-uppercase bg-danger text-danger lead'>Login Not Successful</p>";
  }
  ?>
  <form class="form-signin" style="width:50%;" method="POST" action="../src/views/loginCheck.php">
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