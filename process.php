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
		header("Location: purchase.php");
	} else {
		unset($_SESSION['err']);
	}

	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Purchase Process";
	require "./template/header.php";
	// connect database
	$conn = db_connect();
	extract($_SESSION['ship']);

	// validate post section
	// $card_number = $_POST['card_number'];
	// $card_PID = $_POST['card_PID'];
	// $card_expire = strtotime($_POST['card_expire']);
	// $card_owner = $_POST['card_owner'];
	// $name = $_POST['name'];
	// $address = $_POST['address'];
	// $phone = $_POST['phone'];
	// $email = $_POST['email'];

	if(isset($_FILES['invoice']) && $_FILES['invoice']['name'] != ""){
		$invoice = $_FILES['invoice']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/invoice/";
		$uploadDirectory .= $invoice;
		move_uploaded_file($_FILES['invoice']['tmp_name'], $uploadDirectory);
	}

	// find customer
	$customerid = getCustomerId($name, $address, $phone, $email);
	if($customerid == null) {
		// insert customer into database and return customerid
		$customerid = setCustomerId($name, $address, $phone, $email);
	}
	$date = date("Y-m-d H:i:s");
	insertIntoOrder($conn, $customerid, $_SESSION['total_price'], $date, $name, $address, $phone, $email, $invoice);

	// take orderid from order to insert order items
	$orderid = getOrderId($conn, $customerid);

	foreach($_SESSION['cart'] as $isbn => $qty){
		$bookprice = getbookprice($isbn);
		$query = "INSERT INTO order_items VALUES 
		('$orderid', '$isbn', '$bookprice', '$qty')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert value false!" . mysqli_error($conn2);
			exit;
		}
	}

	session_unset();
?>
	<p class="alert alert-success">Terimakasih, Order anda sedang di proses. Mohon tunggu konfirmasi dari pihak kami kemudian cek email untuk detail invoice anda. Selamat berbelanja kembali!</a></p>

<?php
	if(isset($conn)){
		mysqli_close($conn);
	}
	header('refresh:15;url=index.php');
	exit;
	require_once "./template/footer.php";
?>