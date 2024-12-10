<<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the form input to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $propertyType = htmlspecialchars($_POST['propertyType']);
    $location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : "Not Specified";
    $property = htmlspecialchars($_POST['property']);
    $message = htmlspecialchars($_POST['message']);
    $mathChallenge = htmlspecialchars($_POST['mathChallenge']);

    if ($mathChallenge != 8) {
        echo "<p style='color: red;'>Incorrect math answer. Please go back and solve it correctly.</p>";
        exit;
    }

    // Output the data
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Enquiry Submission</title>";
    echo "<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 60%;
                margin: 50px auto;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            h2 {
                text-align: center;
                color: #333;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            table, th, td {
                border: 1px solid #ccc;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h2>Enquiry Submitted Successfully!</h2>";
    echo "<table>";
    echo "<tr><td><strong>Name</strong></td><td>$name</td></tr>";
    echo "<tr><td><strong>Gender</strong></td><td>$gender</td></tr>";
    echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Phone</strong></td><td>$phone</td></tr>";
    echo "<tr><td><strong>Property Type</strong></td><td>$propertyType</td></tr>";
    echo "<tr><td><strong>Preferred Location</strong></td><td>$location</td></tr>";
    echo "<tr><td><strong>Budget</strong></td><td>₹$property</td></tr>";
    echo "<tr><td><strong>Message</strong></td><td>$message</td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>