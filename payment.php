<?php
// Start a session
session_start();

// Retrieve the total from the session variable
$total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body{
      background-color: #f8f9fa;
    }
    .payment-form{
      max-width: 500px; 
      margin: 50px auto;
      padding: 30px;
      background-color: #fff; 
      border-radius: 10px; 
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-control{
      width: 100%;
    }
    .btn-pay{
      background-color:gold;
      width:100%;
    }
  </style>
</head>
<body>
  <?php include "nav.php" ?>
  <div class="container">
    <div class="payment-form">
      <h2 class="mb-4"> Payment Details</h2>
      <form action="paymenthandler.php" method="post">
        <h4>Confirm to pay $<?php echo "$total" ?></h4>
        <div class="form-group">
          <label for="card_number">Card Number</label>
          <input type="text" class="form-control" id="card_number" name="card_number" required >
        </div>
        <div class="form-group">
          <label for="expiration_date">Expiration Date</label>
          <input type="date" class="form-control" id="expiration_date" name="expiration_date"  required >
        </div>
        <div class="form-group">
          <label for="cvv">CVV</label>
          <input type="text" class="form-control" id="cvv" name="cvv" required >
        </div>
        <div class="form-group">
      <label for="name_on_card">Name On Card:</label>
      <select class="form-control" name="name_on_card" id="name_on_card" required>
        <option value="" disabled selected>Select Name</option>
        <option value="BOC">BOC</option>
        <option value="Pupils Bank">Pupils Bank</option>
        <option value="Visa">Visa</option>
        <option value="Master Card">Master Card</option>
      </select>
    </div>
        <button type="submit" class="btn-pay">Pay Now</button>
      </form>
    </div>
  </div>
</body>s
</html>
