<?php
    // Database connection configuration
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $dateOfPurchase = $_POST['dateOfPurchase'];
        $make = $_POST['make'];
        $model = $_POST['model'];
        $yearOfProduction = $_POST['yearOfProduction'];
        $dateOfRegistration = $_POST['dateOfRegistration'];
        $vinNumber = $_POST['vinNumber'];
        $purchaseDocument = $_POST['purchaseDocument'];
        $purchasePrice = $_POST['purchasePrice'];
        $costs = $_POST['costs'];
        $salePrice = $_POST['salePrice'];
        $insuranceExpiryDate = $_POST['insuranceExpiryDate'];
        $motExpiryDate = $_POST['motExpiryDate'];

        // Insert the data into the database
        $sql = "INSERT INTO cars (date_of_purchase, make, model, year_of_production, date_of_registration, vin_number, purchase_document, purchase_price, costs, sale_price, insurance_expiry_date, mot_expiry_date)
                VALUES ('$dateOfPurchase', '$make', '$model', '$yearOfProduction', '$dateOfRegistration', '$vinNumber', '$purchaseDocument', '$purchasePrice', '$costs', '$salePrice', '$insuranceExpiryDate', '$motExpiryDate')";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>New Car Added:</h2>";
            echo "Date of Purchase: $dateOfPurchase<br>";
            echo "Make: $make<br>";
            echo "Model: $model<br>";
            echo "Year of Production: $yearOfProduction<br>";
            echo "Date of First Registration: $dateOfRegistration<br>";
            echo "VIN Number: $vinNumber<br>";
            echo "Purchase Document: $purchaseDocument<br>";
            echo "Purchase Price: $purchasePrice<br>";
            echo "Costs: $costs<br>";
            echo "Sale Price: $salePrice<br>";
            echo "Insurance Policy Expiry Date: $insuranceExpiryDate<br>";
            echo "MOT Expiry Date: $motExpiryDate<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>