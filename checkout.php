<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
<div class="row">
  <div class="col-md-8">
      <div class="panel panel-default">
          <div class="panel-heading">
              Detail Barang
          </div>
          <div class="panel-body">
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
							</table>
          </div>
      </div>
  </div>
  <div class="col-md-4">
  	<div class="panel panel-green">
  		<div class="panel-heading">
  			Data Pembeli
  		</div>
  		<div class="panel-body">
  			<form method="post" action="purchase.php" class="form">
				<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
					<p class="text-danger">All fields have to be filled</p>
					<?php } ?>
				<div class="form-group input-group">
					<span class="input-group-addon">Nama</span>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">No Hp</span>
					<input type="tel" pattern="\d{12}$" name="noHp" class="form-control">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Email</span>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Alamat</span>
					<textarea type="text" name="alamat" class="form-control"> </textarea>
				</div>
				<div class="form-group">
						<input type="submit" name="submit" value="Purchase" class="btn btn-primary">
				</div>
				</form>
  		</div>
  		<div class="panel-footer">
        <div class="alert alert-danger">
          Mohon masukkan data dengan benar.
        </div>
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