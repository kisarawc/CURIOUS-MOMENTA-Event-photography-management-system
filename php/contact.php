<?php include ('header.php'); ?>
<html>
<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>
    <div class="container1">
        <form action="" method="POST">
            <fieldset>
                <h3>Contact With Us</h3>
                <p>Welcome to our event photography management website! We are a dedicated team of professionals passionate about capturing the essence of your special occasions through stunning photography. Our mission is to provide a seamless and unforgettable experience, ensuring that your event is beautifully documented from start to finish.</p>
                <p>At our website, we offer comprehensive event photography management services tailored to meet your unique needs. Whether you're organizing a wedding, corporate event, conference, or any other special gathering, we have the expertise to deliver exceptional results. Our team consists of skilled photographers who excel at capturing the genuine emotions, candid moments, and intricate details that make your event truly memorable.</p>
                <p>What sets us apart is our commitment to excellence in both our photography and customer service. We understand that planning an event can be stressful, which is why we strive to make the photography process as smooth as possible. From the initial consultation to the final delivery of your beautifully edited images, we go above and beyond to ensure your complete satisfaction.</p>
                <p>Our website provides a user-friendly platform where you can explore our portfolio, browse through different photography packages, and easily book our services. We believe in transparency, and our pricing is competitive and clearly outlined so that you can make an informed decision based on your budget and requirements.</p>
            </fieldset>
        </form>
    </div>
    <br>
    <div class="container2">
        <h3 class="contactName">Contact Form</h3>
        <form action="contactus.php" method="POST">
            <fieldset>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">
                <br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname">
                <br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <br><br>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject">
                <br><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
<?php include ('footer.php'); ?>
