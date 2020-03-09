<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/floating-labels/floating-labels.css" rel="stylesheet">

    <form class="form-signin text-white" method="POST" action="/AdministrasiGalleryX/handleLogin">
  <div class="text-center mb-4">

    <h1 class="h3 mb-3 font-weight-normal">Admin Login KRDSGallery</h1>
    <!-- defacer mandul 7 turunan 100% work no root support kitkat gpu mali mod unlimited money -->

    <p>Silahkan masukan akun admin anda untuk melanjutkan</p>
  </div>
  <div class="alert alert-danger" role="alert" style="<?php echo $alertstyle?>">
  <?php echo $alerttext ?>
</div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required="" autofocus="">
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
    <label for="inputPassword">Password</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
  <hr>
  <p class="puter">
  Powered By KRDSGallery - https://github.com/ahlamls/KRDSGallery
  </p>

</form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
