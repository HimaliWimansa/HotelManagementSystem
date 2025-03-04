<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = date('Y-m-d', strtotime($_POST['check-in'])); // Convert to YYYY-MM-DD format
$checkout = date('Y-m-d', strtotime($_POST['check-out'])); // Convert to YYYY-MM-DD format
$room = $_POST['rooms'];
$category = $_POST['room-category'];

$server = "127.0.0.1";
$user = "root";
$pwd = "";
$dbname = "crown";
$con = mysqli_connect($server, $user, $pwd, $dbname) or die('Something Went Wrong !');

// Check if rooms are available for the given category and dates
$queryAvailability = "SELECT count, remain FROM rooms WHERE category = '$category'";
$resAvailability = mysqli_query($con, $queryAvailability);

if ($resAvailability) {
    $row = mysqli_fetch_assoc($resAvailability);
    $roomCount = $row['count'];
    $remainingRooms = $row['remain'];

    // Query to check if any rooms are booked for the given check-in and check-out dates
    $queryBookedRooms = "SELECT SUM(noofrooms) AS booked_rooms FROM guest WHERE checkin <= '$checkout' AND checkout >= '$checkin' AND roomcategory = '$category'";
    $resBookedRooms = mysqli_query($con, $queryBookedRooms);
    
    if ($resBookedRooms) {
        $rowBookedRooms = mysqli_fetch_assoc($resBookedRooms);
        $bookedRooms = $rowBookedRooms['booked_rooms'];
        $availableRooms = $roomCount - $bookedRooms;


        if ($room <= $availableRooms) {
            // Proceed with guest booking
            $query = "INSERT INTO guest(name,email,telephone,roomcategory,noofrooms,checkin,checkout)
            VALUES ('$name','$email','$phone','$category','$room','$checkin','$checkout')";
            $res = mysqli_query($con, $query);

            if ($res) {
                // Update the remaining rooms in the database
                $remainingRoomsAfterReservation = $remainingRooms - $room;
                $updateQuery = "UPDATE rooms SET remain = '$remainingRoomsAfterReservation' WHERE category = '$category'";
                $updateRes = mysqli_query($con, $updateQuery);

                if ($updateRes) {
                    // Calculate total amount
                    $queryRoomPrice = "SELECT price FROM rooms WHERE category = '$category'";
                    $resRoomPrice = mysqli_query($con, $queryRoomPrice);

                    if ($resRoomPrice) {
                        $rowRoomPrice = mysqli_fetch_assoc($resRoomPrice);
                        $roomPrice = $rowRoomPrice['price'];
                        $days = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24); // Convert seconds to days
                        $total = $roomPrice * $room * $days;

                        // Start a session
                        session_start();

                        // Set the total in the session variable
                        $_SESSION['total'] = $total;

                        // Redirect to payment.php
                        header('Location: payment.php');
                        exit();
                    } else {
                        echo 'Error in fetching room price';
                    }
                } else {
                    echo 'Error updating remaining rooms';
                }
            } else {
                echo 'Error in guest booking';
            }
        } else {
            echo "Not enough rooms available.";
        }
    } else {
        echo 'Error fetching booked rooms';
    }
} else {
    echo 'Error fetching room availability';
}

mysqli_close($con);
?>