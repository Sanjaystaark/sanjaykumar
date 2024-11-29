<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $comment = $_POST['comment'];
        $phone = $_POST['phone'];

        // Display the submitted data (for demonstration purposes)
        echo "<h3>Form Submitted</h3>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
        echo "Comment: " . htmlspecialchars($comment) . "<br>";
        echo "Phone Number: " . htmlspecialchars($phone) . "<br>";

        // You can add code here to handle the submitted data
        // For example, saving the data to a database or sending an email
    }
 ?>
