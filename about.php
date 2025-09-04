<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Publico</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<header>
    <h1 style="text-align: center;">About Publico</h1>
</header>

<main>
    <h2>What is Publico?</h2>
    <p>
        Publico is a web-based reservation system designed for the residents of Orani. 
        It makes booking municipal-owned facilities — such as basketball courts, function halls, 
        and meeting rooms — faster and more convenient. 
    </p>

    <h2>Our Purpose</h2>
    <p>
        Publico was built to save residents time and effort while helping municipal staff 
        manage reservations more efficiently. The system ensures fairness in scheduling, 
        reduces long queues, and improves transparency in facility usage.
    </p>

    <h2>Key Features</h2>
    <ul>
        <li>Easy registration and login for residents</li>
        <li>Quick facility availability checking</li>
        <li>Online reservation, cancellation, and history tracking</li>
        <li>Administrator tools for approving and managing bookings</li>
        <li>Facility usage reports for better record-keeping</li>
    </ul>

    <h2>Who Benefits?</h2>
    <p><strong>Residents:</strong> Convenient booking without visiting the municipal hall</p>
    <p><strong>Administrators:</strong> Simplified reservation management and reporting</p>
    <p><strong>Local Government:</strong> Improved efficiency, transparency, and service delivery</p>

    <h2>Founders</h2>
    <div class="founders">
        <div class="founder-card">
            <h3>Arvin</h3>
            <p>Developer & System Designer</p>
        </div>
        <div class="founder-card">
            <h3>Lorenz</h3>
            <p>Backend Developer</p>
        </div>
        <div class="founder-card">
            <h3>[Add More]</h3>
            <p>Role</p>
        </div>
    </div>

    <h2>Contact Information</h2>
    <div class="contact">
        <p><strong>Email:</strong> publico.orani@gmail.com</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Address:</strong> Orani Municipal Hall, Bataan, Philippines</p>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Publico. All Rights Reserved.</p>
</footer>

</body>
</html>
