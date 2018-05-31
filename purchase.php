<?php
	session_start();
	$_SESSION['err'] = 1;
	foreach($_POST as $key => $value){
		if(trim($value) == ''){
			$_SESSION['err'] = 0;
		}
		break;
	}

	if($_SESSION['err'] == 0){
		header("Location: checkout.php");
	} else {
		unset($_SESSION['err']);
	}


	$_SESSION['ship'] = array();
	foreach($_POST as $key => $value){
		if($key != "submit"){
			$_SESSION['ship'][$key] = $value;
		}
	}
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Purchase";
	require "./template/header.php";
	// connect database
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Buku</th>
			<th>Harga</th>
	    	<th>Jumlah</th>
	    	<th>Total</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
			?>
		<tr>
			<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
			<td><?php echo rupiah($book['book_price']); ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo rupiah($qty * $book['book_price']); ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo rupiah($_SESSION['total_price']); ?></th>
		</tr>
		<tr>
			<td>Pengiriman</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Free</td>
		</tr>
		<tr>
			<th>Total Termasuk Biaya Kirim</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo rupiah(($_SESSION['total_price'] + 0)); ?></th>
		</tr>
	</table>
<div class="row">
	<div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Transfer ATM
      </div>
      <div class="panel-body">
        <p>Pembayaran manual dengan ATM.</p>
        <div class="col-md-3"><img class="img-responsive img-thumbnail" src="./bootstrap/img/atm.png"><p>Transfer melalui ATM, SMS/M-Banking, dan E-Banking</p></div>
        <div class="col-md-3"><img class="img-responsive img-thumbnail" src="./bootstrap/img/atm2.png"><p>Masukan nomer rekening Global Science</p></div>
        <div class="col-md-3"><img class="img-responsive img-thumbnail" src="./bootstrap/img/atm3.png"><p>Masukkan jumlah bayar sesuai dengan tagihan anda</p></div>
        <div class="col-md-3"><img class="img-responsive img-thumbnail" src="./bootstrap/img/atm4.png"><p>Upload bukti transfer <a href="#" data-toggle="modal" data-target="#myModal">DISINI</a> atau langsung dapat mengubungi CP kami di 081249420465 untuk proses lebih cepat</p></div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Upload Bukti Transfer</h4>
            </div>
            <div class="modal-body">
                <form id="formup" method="post" action="upload.php" enctype="multipart/form-data">
                  <label>Upload bukti transfer anda disini</label>
                  <input type="file" name="buktitrf">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" form="formup" class="btn btn-primary">Upload</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="panel-footer">
        <p>Pembayaran dapat dilakukan ke nomer rekening Global Science berikut:</p>
        <img class="img-responsive img-thumbnail" src="./bootstrap/img/bni.png">
        <p>Fitur pembayaran lainnya akan segera hadir!</p>
      </div>
    </div>
  </div>
</div>
<?php
	} else {
		echo "<p class=\"text-warning\">Keranjang Belanja anda kosong! Silahkan kembali ke halaman <a href=\"books.php\">buku</a> untuk belanja!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>