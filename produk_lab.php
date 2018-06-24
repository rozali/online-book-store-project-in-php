<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM publisher ORDER BY publisherid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "Produk Lab";
	require "./template/header.php";
?>
<div id="content">
    <div class="container">
      <div id="error-page" class="col-md-8 col-md-offset-2 text-center">
        <div class="box">
          <p class="text-center"><a href="index.php"><img src="./bootstrap/img/gsjumbo.png"></a></p>
          <p class="text-center"><h1><span>GLOBAL</span> <span>SCIENCE</span></h1></p>
          <h3>Mohon Maaf - Halaman ini akan segera hadir!</h3>
          <h4 class="text-muted">Error 404 - Halaman tidak ditemukan</h4>
          <p class="buttons"><a href="index.php" class="btn btn-template-outlined"><i class="fas fa-home"></i> Beranda</a></p>
        </div>
      </div>
    </div>
  </div>
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>