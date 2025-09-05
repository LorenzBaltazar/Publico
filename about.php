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

<main class="about-page">
    <!-- Banner image with no padding -->
    <img src="assets/images/aboutbanner.jpg" alt="About Publico Banner" class="about-banner">

    <!-- Wrapped content with normal padding -->
    <div class="content">
        <h2>What is Publico?</h2>
        <p>
            Publico is the official online reservation system of the Municipality of Orani, 
            developed to provide residents with a modern and reliable way of accessing 
            government-owned facilities. Through this platform, the community can book 
            basketball courts, function halls, meeting rooms, and other public spaces 
            without the need to visit the municipal hall personally, reducing long queues 
            and saving valuable time.
        </p>

        <h2>Our Purpose</h2>
        <p>
            The system was created with the goal of making local government services more 
            transparent, accessible, and efficient. By digitizing the reservation process, 
            Publico helps ensure fairness in scheduling, improves the management of community 
            resources, and strengthens the connection between the municipal government and 
            the people it serves. It represents Orani’s commitment to modernization and 
            better service delivery for every resident.
        </p>

        <h2>Services Offered</h2>
        <ul>
            <li>Online reservation of municipal facilities such as sports courts, halls, and meeting rooms.</li>
            <li>Schedule viewing and availability checking to help residents plan events in advance.</li>
            <li>Reservation management tools for municipal staff to approve, track, and organize bookings efficiently.</li>
            <li>Record-keeping and facility usage monitoring for improved transparency and accountability.</li>
            <li>Community support and assistance for residents needing help with their reservations.</li>
        </ul>

        <h2>Who Benefits? </h2>
        <p>
            <strong>Residents:</strong> Gain the convenience of booking public facilities from the comfort 
            of their homes, eliminating the need for long waits and repeated visits to the municipal hall.  
        </p>
        <p>
            <strong>Municipal Staff:</strong> Benefit from easier reservation tracking and better-organized 
            records, allowing them to focus on delivering quality service to the community.  
        </p>
        <p>
            <strong>Local Government:</strong> Enhances transparency and accountability, while promoting 
            inclusivity by making services more accessible to all citizens.  
        </p>

        <h2>Founders</h2>
        <div class="founders">
            <div class="founder-card">
                <img src="assets/images/arvin.png" alt="Arvin Rome Layug">
                <h3>Arvin Rome Layug</h3>
                <p>Developer & System Designer</p>
            </div>
            <div class="founder-card">
                <img src="assets/images/lorenz.png" alt="Lorenz Baltazar">
                <h3>Lorenz Baltazar</h3>
                <p>Developer & Project Manager</p>
            </div>
            <div class="founder-card">
                <img src="assets/images/jade.png" alt="Jade Jiro Roldan">
                <h3>Jade Jiro Roldan</h3>
                <p>Front End Developer</p>
            </div>
            <div class="founder-card">
                <img src="assets/images/axel.jpg" alt="Axel John Flores">
                <h3>Axel John Flores</h3>
                <p>Tester & Researcher</p>
            </div>
            <div class="founder-card">
                <img src="assets/images/gio.jpg" alt="John Gilbert Franco">
                <h3>John Gilbert Franco</h3>
                <p>Data Analyst</p>
            </div>
        </div>

        <h2>Contact Information</h2>
        <div class="contact">
            <p><strong>Email:</strong> publico.orani@gmail.com</p>
            <p><strong>Phone:</strong> +63 912 345 6789</p>
            <p><strong>Address:</strong> Orani Municipal Hall, Bataan, Philippines</p>
        </div>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Publico. All Rights Reserved.</p>
</footer>

</body>
</html>
