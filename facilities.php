<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
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

        h1, h3 {
            color: black;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            color: black;
        }

        table {
            width: 100%;
            border-spacing: 10px;
            margin-top: 20px;
        }

        th {
            text-align: left;
        }

        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }

        .section-title {
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <?php include "nav.php" ?>
    <br>
    <section class="content-container container">
        <h1>Facilities</h1>
        <div class="row">
            <div class="col-md-4">
                <h3 class="section-title">Bathroom</h3>
                <ul>
                    <li>Toilet Papers</li>
                    <li>Towels</li>
                    <li>Bidet</li>
                    <li>Towels/Sheets(extra free)</li>
                    <li>Bathtub or Shower</li>
                    <li>Private Bathroom</li>
                    <li>Bathrobe</li>
                    <li>Shower</li>
                </ul>
                <h3 class="section-title">Food And Drink</h3>
                <ul>
                    <li>Kid-friendly buffet</li>
                    <li>Kid meals</li>
                    <li>Breakfast In the room</li>
                    <li>Restaurant</li>
                    <li>Tea/Coffee maker</li>
                </ul>
                <h3 class="section-title">Internet</h3>
                <ul>
                    <li>WiFi is available in public areas and is free of charge</li>
                </ul>
                <h3 class="section-title">General</h3>
                <ul>
                    <li>Shared lounge/TV area</li>
                    <li>Air conditioning</li>
                    <li>Tile/marble floor</li>
                    <li>Soundproofing</li>
                    <li>Private entrance</li>
                    <li>Car hire</li>
                    <li>Carpeted</li>
                    <li>Fan</li>
                    <li>Ironing facilities</li>
                    <li>Non-smoking rooms</li>
                    <li>Room service</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section-title">Bedroom</h3>
                <ul>
                    <li>Linens</li>
                </ul>
                <h3 class="section-title">View</h3>
                <ul>
                    <li>City view</li>
                    <li>Mountain view</li>
                    <li>View</li>
                </ul>
                <h3 class="section-title">Outdoors</h3>
                <ul>
                    <li>Patio</li>
                    <li>Balcony</li>
                    <li>Terrace</li>
                </ul>
                <h3 class="section-title">Kitchen</h3>
                <ul>
                    <li>Electric kettle</li>
                </ul>
                <h3 class="section-title">Room Amenities</h3>
                <ul>
                    <li>Socket near the bed</li>
                    <li>Clothes Rack</li>
                </ul>
                <h3 class="section-title">Living Area</h3>
                <ul>
                    <li>Seating Area</li>
                </ul>
                <h3 class="section-title">Media And Technology</h3>
                <ul>
                    <li>Flat-screen TV</li>
                    <li>Telephone</li>
                    <li>TV</li>
                </ul>
                <h3 class="section-title">Parking</h3>
                <ul>
                    <li>Free private parking is possible on site (Reservation is not needed)</li>
                    <li>Street Parking</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section-title">Reception Services</h3>
                <ul>
                    <li>Invoice Provided</li>
                    <li>Lockers</li>
                    <li>Private check-in/check-out</li>
                    <li>Concierge service</li>
                    <li>24-hour front desk</li>
                </ul>
                <h3 class="section-title">Entertainment and Family Services</h3>
                <ul>
                    <li>Strollers</li>
                    <li>Baby safety gates</li>
                    <li>Kids outdoor play equipment</li>
                    <li>Child safety socket covers</li>
                </ul>
                <h3 class="section-title">Cleaning Services</h3>
                <ul>
                    <li>Daily housekeeping</li>
                    <li>Ironing service</li>
                </ul>
                <h3 class="section-title">Safety & Security</h3>
                <ul>
                    <li>CCTV outside property</li>
                    <li>CCTV in common areas</li>
                    <li>Smoke alarms</li>
                    <li>Security alarm</li>
                    <li>24-hour security</li>
                </ul>
                <h3 class="section-title">Accessibility</h3>
                <ul>
                    <li>Upper floors accessible by stairs only</li>
                </ul>
                <h3 class="section-title">Language Spoken</h3>
                <ul>
                    <li>English</li>
                </ul>
            </div>
        </div>
        <hr size="5" noshade color="black">
        <div class="row">
            <h1>House Rules</h1>
            <table>
                <tr>
                    <th>Check-in</th>
                    <td>From 2:00 PM to 10:00 PM</td>
                </tr>
                <tr>
                    <th>Check-out</th>
                    <td>From 6:00 AM to 10:00 AM</td>
                </tr>
                <tr>
                    <th>Cancellation/Prepayment</th>
                    <td>Cancellation and prepayment policies are according to accommodation type. Please enter the dates of your stay and check what conditions apply to your preferred room.</td>
                </tr>
                <tr>
                    <th>Children & Beds</th>
                    <td>
                        <b>Child policies</b>
                        <br>
                        Children of all ages are welcome.
                        <br>
                        Children 18 and above will be charged as adults at this property.
                        <br>
                        To see correct prices and occupancy info, add the number and ages of children in your group to your search.
                        <br>
                        <b>Cribs and extra beds</b>
                        <br>
                        Cribs and extra beds aren't available at this property.
                    </td>
                </tr>
                <tr>
                    <th>No age restriction</th>
                    <td>There's no age requirement for check-in.</td>
                </tr>
                <tr>
                    <th>Pets</th>
                    <td>Pets are not allowed.</td>
                </tr>
            </table>
        </div>
        <br>
    </section>
    <script src="library/js/bootstrap.min.js"></script>
</body>
</html>
