<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Booking Form</title>
  <link rel="stylesheet" href="library/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
    }

    .background {
      background-image: url("images/fac5.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .content-container {
      position: relative;
      z-index: 1;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 15px;
      padding: 20px;
      margin: 20px;
    }

    h2 {
      color: black;
      text-align: center;
    }

    .form-group label {
      color: black;
      font-weight: bold;
    }

    .primary-btn {
      padding: 15px 40px;
      background: #d4950c;
      font-weight: bold;
      color: white;
      border: none;
      border-radius: 5px;
      transition: background 0.3s ease;
      display: block;
      width: 100%;
    }

    .primary-btn:hover {
      background: #b37c0a;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="background"></div>
<div class="container">
  <?php include "nav.php"; ?>
  <section class="content-container">
    <h2>Room Booking Form</h2>
    <form action="DBconnection.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="check-in">Check-in Date:</label>
        <input type="date" class="form-control" name="check-in" id="check-in" required>
      </div>
      <div class="form-group">
        <label for="check-out">Check-out Date:</label>
        <input type="date" class="form-control" name="check-out" id="check-out" required>
      </div>
      <div class="form-group">
        <label for="rooms">Number of Rooms:</label>
        <input type="number" class="form-control" name="rooms" id="rooms" min="1" required>
      </div>
      <div class="form-group">
        <label for="room-category">Room Category:</label>
        <select class="form-control" name="room-category" id="room-category" required>
          <option value="" disabled selected>Select Room Category</option>
          <option value="Platinum">Platinum</option>
          <option value="Gold">Gold</option>
          <option value="Silver">Silver</option>
          <option value="Bronze">Bronze</option>
        </select>
      </div>
      <button type="submit" class="primary-btn">Submit</button>
    </form>
  </section>
</div>

<script src="library/js/bootstrap.min.js"></script>
</body>
</html>
