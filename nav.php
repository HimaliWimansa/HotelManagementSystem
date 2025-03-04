<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown & Crown Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="content flex_space">
            <div class="logo" >
                <h2>Crown & Crown Kandy</h2>
            </div>
            <div class="navlinks">
                 <ul id="menulist">
                    <li><a href="index.php">home</a></li>
                    <li><a href="about.php">about us</a></li>
                    <li><a href="booking.php">booking</a></li>
                    <li><a href="facilities.php">facilities</a></li>
                    <li><i class="fa fa-search"></i></li>
                    <li><button class="primary-btn"onclick="window.location.href='booking.php'">BOOK NOW</button></li>
                 </ul>
                 <i class="fa fa-bars" aria-hidden="true" onclick="menutoggle()"></i>
            </div>
        </div>
    </header>
    
    <script>
        var menulist= document.getElementById('menulist');
        menulist.style.maxHeight="0px";

        function menutoggle()
         {
           if (menulist.style.maxHeight === "0px")
            {
               menulist.style.maxHeight = "100vh";
            }
           else 
           {
             menulist.style.maxHeight = "0px";
           }
        }
    
    </script>

</body>