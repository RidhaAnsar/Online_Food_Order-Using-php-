<?php

include("headder.php"); // Assuming "headder.php" is supposed to be "header.php"
include("db_connection.php"); // Include your database connection script
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style/styleshome.css">
    <link rel="icon" type="image/png" href="Images/Logos/yum.png">
    <title>Payment</title>
    <style>
       body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            height: 60px;
        }

        #overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            font-size: 2em;
            text-align: center;
        }
        .logo {
            max-width: 250px;
            /* Adjust the maximum width of the logo */
            height: auto;
            margin-right: 10px;
        }

        .main-content {
            display: flex;

            justify-content: space-around;
            flex-wrap: wrap;
            padding: 50px;
        }
        .payment-section {
            margin-top: 20px; /* Add margin */
            padding: 20px; /* Add padding */
            background-color: #f9f9f9; /* Light gray background */
            border-radius: 5px; /* Rounded corners */
        }

        .payment-section h2 {
            margin-bottom: 10px; /* Add margin bottom */
        }

        .payment-button {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 20px; /* Padding */
            text-align: center; /* Center text */
            text-decoration: none; /* No underline */
            display: inline-block; /* Display as inline block */
            font-size: 16px; /* Font size */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Cursor on hover */
            transition: background-color 0.3s; /* Smooth color transition */
        }

        .payment-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class="main-content">
        <!-- Your existing PHP code to display food items -->
    </div>

    <!-- Your existing footer inclusion -->
    <?php include("html/footer.html"); ?>

    <!-- Payment section -->
    <div class="payment-section">
        <h2>Total Payment Amount</h2>
        <p>Total: <!-- Your PHP code to calculate and display the total amount --></p>
        <form action="payment_processing.php" method="post">
            <!-- Include hidden input fields for passing total amount, customer information, etc. -->
            <input type="hidden" name="total_amount" value="<!-- Your PHP code to get the total amount -->">
            <input type="hidden" name="customer_name" value="<!-- Customer's name -->">
            <input type="hidden" name="customer_email" value="<!-- Customer's email -->">
            <!-- Add any other necessary hidden input fields -->
            <button type="submit" class="payment-button">Pay Now</button>
        </form>
    </div>
    <?php include("html/footer.html"); ?>
        
</body>
</html>
