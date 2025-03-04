<?php

$server = "127.0.0.1";
$user = "root";
$pwd = "";
$dbname = "crown";
$con = mysqli_connect($server, $user, $pwd, $dbname) or die('Something Went Wrong !');

// Retrieve form data
$cardNo = mysqli_real_escape_string($con, $_POST['card_number']);
$expire = mysqli_real_escape_string($con, $_POST['expiration_date']);
$cvv = mysqli_real_escape_string($con, $_POST['cvv']);
$cardname = mysqli_real_escape_string($con, $_POST['name_on_card']);

// Start a session
session_start();

// Retrieve the total from the session variable
$total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;

// Validate expiration date
$currentDate = date('Y-m-d'); // Current date
if (strtotime($expire) < strtotime($currentDate)) {
    // Card is expired
    echo "Error: Card has expired.";
} else {
    // Insert data into the payment table using prepared statements
    $query3 = "INSERT INTO payment (cardno, expire, cvv, cardname, amount) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query3);
    mysqli_stmt_bind_param($stmt, "ssssi", $cardNo, $expire, $cvv, $cardname, $total);
    $result3 = mysqli_stmt_execute($stmt);

    if ($result3) {
        // Payment successful
        echo "<script>alert('Payment successful!')</script>";
    } else {
        // Payment failed
        echo "<script>alert('Error: Payment failed.')</script>";
        // Log the error
        error_log("Payment Error: " . mysqli_error($con));
    }
}

// Close the database connection
mysqli_close($con);
?>
