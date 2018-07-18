<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>

<div class="profiles">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center spacing">
        <h1>PROFIL <span>GLOBAL</span> <span>SCIENCE</span></h1>
      </div>
      <div class="col-xs-12 text-center spacing">
        <p><strong>Global Science</strong> merupakan pusat penjualan dan penerbitan buku berkualitas untuk perguruan tinggi atau Universitas. Kami menyediakan buku nasional dan internasional untuk para dosen dan mahasiswa di Indonesia.</p><p><strong>Global Science</strong> juga berkomitmen menyediakan Buku akademik gratis untuk memajukan dunia pendidikan dan mencerdaskan bangsa.</p>
      </div>
      <div class="col-xs-12 text-center spacing">
        <button type="button" class="btn btn-outline btn-info btn-lg text-center">Read More</button>
      </div>
    </div>
  </div>
</div>
<div class="categories">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-4 text-center hovering">
        <a href="produk_lab.php">
          <img src="./bootstrap/img/microscope.png">
          <h3>Produk Lab</h3>
        </a>  
      </div>
      <div class="col-md-4 col-xs-4 text-center hovering">
        <a href="books.php">
          <img src="./bootstrap/img/buku.png">
          <h3>Buku Akademik</h3>
        </a>
      </div>
      <div class="col-md-4 col-xs-4 text-center hovering">
        <a href="publication.php">
          <img src="./bootstrap/img/penerbitan.png">
          <h3>Penerbitan Buku</h3>
        </a>
      </div>
    </div>
  </div>
</div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>