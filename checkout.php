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
	<form method="post" action="purchase.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
		<div class="form-group">
			<label for="nama" class="control-label col-md-4">Nama</label>
			<div class="col-md-4">
				<input type="text" name="nama" class="col-md-4" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="NoHp" class="control-label col-md-4">No. Hp</label>
			<div class="col-md-4">
				<input type="text" name="noHp" class="col-md-4" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="Email" class="control-label col-md-4">Email</label>
			<div class="col-md-4">
				<input type="text" name="email" class="col-md-4" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="Alamat" class="control-label col-md-4">Alamat</label>
			<div class="col-md-4">
				<input type="text" name="alamat" class="col-md-4" class="form-control">
			</div>
		</div>
		<!-- <div class="form-group">
			<label for="country" class="control-label col-md-4">Country</label>
			<div class="col-md-4">
				<input type="text" name="country" class="col-md-4" class="form-control">
			</div>
		</div> -->
		<div class="form-group">
			<input type="submit" name="submit" value="Purchase" class="btn btn-primary">
		</div>
	</form>
	<p class="lead">Please press Purchase to confirm your purchase, or Continue Shopping to add or remove items.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>