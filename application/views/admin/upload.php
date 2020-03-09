<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">KRDSGallery Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="/AdministrasiGalleryX/logout"<button class="btn btn-danger my-2 my-sm-0" type="submit">Keluar</button></a>
      </form>
    </div>
  </nav>
  <div class="container">
  <br>
  <div class="alert alert-info" role="alert" style="<?php echo $alertstyle?>">
  <?php echo $alerttext ?>
</div>
  <div class="card bg-dark">
  <form  enctype="multipart/form-data" class="card-body text-white" action="/AdministrasiGalleryX/handleUpload" method="POST">
    <div class="form-group">
    <label for="exampleFormControlFile1">File Gambar (JPG,JPEG,PNG,GIF) Maks 2MB</label>
    <input type="file" name="image" required="" class="form-control-file" id="exampleFormControlFile1">
  </div>
<hr>
  <div class="form-group">
  <label for="exampleFormControlInput1">Judul</label>
  <input type="text" name="title" required=""class="form-control" id="exampleFormControlInput1" placeholder="Trading Binomo">
</div>
<div class="form-group">
<label for="exampleFormControlInput2">Nama User</label>
<input type="text" name="user" required="" class="form-control" id="exampleFormControlInput2" placeholder="Budi Setiawan">
</div>
<button class="btn btn-lg btn-success w-100">Upload Foto</button>
  </form>
  </div>
  <hr>
  <a href="https://github.com/ahlamls/KRDSGallery">Powered By KRDSGallery - https://github.com/ahlamls/KRDSGallery</a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
