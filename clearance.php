

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>Barangay Indigency - Barangay Nueva Victoria</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #002649;
            color: #fff;
            padding: 1px;
            text-align: center;
            position: relative;
        }
        header .top-bar {
            background-color: #7AB2DD;
            padding: 7px 0;
            font-size: 0.9rem;
        }
        .navbar {
            display: flex;
            justify-content: flex-end; 
            align-items: center;
            padding: 10px 20px;
            background-color: #353535;
       
        }
        .navbar div {
            
            display: flex;
            gap: 20px; 
        }
        .navbar a {
            margin-right: 40px;
            color: white;
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 1.05rem;
        }
        .navbar a:hover {
            color: #7AB2DD;
         
        }
        .container {
   
            width: 80%;
            max-width: 1500px;
            margin: auto;
            background-color: white;
            padding: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            margin-top: 50px;
        }
        .bannerimage{
            width: 100%;
            max-height: 10%;
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0;
        }
        .container h2{
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
            font-size: 16px;
            color: red;
            font-weight: 100;
        }
        .step {
            position: relative;
            text-align: center;
            width: 100%;
        }

        .step .circle {
            background-color: #b9b9b9;
            color: white;
            width: 30px;
            height: 30px;
            display: inline-block;
            border-radius: 50%;
            line-height: 30px;
            font-size: 14px;
        }

        .step .label {
            margin-top: 10px;
            font-size: 14px;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 15px;
            right: -50%;
            width: 97%;
            height: 2px;
            background-color: #ccc;
        }

        .step.active .circle {
            background-color: #007bff;
        }

        .step.active:not(:last-child)::after {
            background-color: #007bff;
        }

        form {
            margin: 20px 0;
        }
        form input, form select {
            width: 100%;
            padding: 20px;
            margin: 20px 0px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: "Roboto Condensed", sans-serif;
        }
        .button-container {
    display: flex;
    justify-content: flex-end;
    gap: 10px; /* Adds space between buttons */
        }

        button {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-transform: uppercase;
        font-weight: bolder;
        font-size: 20px;
        padding: 15px 30px;
        background-color: #0066cc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        .butt{
            margin: 10px;
            text-decoration: none;
            border-radius: 10px;
            padding: 10px 20px;
            border: 2px solid rgb(194, 194, 194);
        background-color: unset; 
        color: rgb(189, 189, 189);
        }

        .submit {
            margin: 10px;
            border-radius: 10px;
            padding: 10px 20px;
            
            background-color: darkblue; 
            color: white;
        }

        form button:hover {
         opacity: 0.9;
        }

  
        footer {
            background-color: #464646;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 30%;
        }

        .footer-logo img {
            border-radius: 1000px;
            width: 130px;
            margin-bottom: 10px;
        }

        .footer-logo p {
            font-size: 14px;
            line-height: 1.6;
            margin: 10px 0;
            color: #b0b0b0;
        }

        .footer-section {
            text-align: left;
            width: 10%;
            margin-bottom: 30px;
        }

        .footer-section h4 {
            margin-bottom: 15px;
            font-size: 16px;
            color: #ffffff;
        }

        .footer-section a {
            display: block;
            color: #5CA4E8;
            text-decoration: none;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        /* Divider */
        

        .copyright {
            margin-bottom: -40px;
            padding: 30px;
            background-color: #7AB2DD;
            font-size: 12px;
            color: #ffffff;
        }

        .information {
            color: #002649;
            font-size: 30px;
            font-weight: bold;
            font-family: "Roboto Condensed", sans-serif;
        }
        .bini{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas: 
            "fname mname lname";
            gap: 7%;
        }
        #fname{
            grid-area: fname;
        }
        #mname{
            grid-area: mname;
        }
        #lname{
            grid-area: lname;
        }
        .binikim{
            display: grid;
            grid-template-columns: 1fr 309px;
            grid-template-areas: 
            "mail tel";
            gap: 7%;
        }
        #mail{
            grid-area: mail;
        }
        #tel{
            grid-area: tel;
        }
        .biniwes{
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 3.5%;
            grid-template-areas:
            "pickup payment";
        }
        #pickup{
            grid-area: pickup;
        }
        #payment{
            grid-area: payment;
            width: 105%;
           
        }
        .pics{
            margin-bottom: 3%;
            display: flex;
            justify-content:space-evenly;
            align-items: center;
        }
        .pics img{
            box-shadow: 0 20px 40px rgb(0, 0, 0, 0.1);
            width: 290px;
            height: 250px;
        }
    </style>
</head>
<body>
<?html
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the database connection file
    include '../html/database.html'; // Adjust the path as needed

    // Generate a unique tracking number
    $trackingNumber = 'TRK' . strtoupper(uniqid());

    try {
        // Prepare SQL statement with tracking number
        $stmt = $pdo->prepare("INSERT INTO clearance_requests (first_name, middle_name, last_name, email, contact, purpose, pickup_or_deliver, mode_of_payment, building_no, purok, province, municipality, tracking_number, date_needed, age) VALUES (:first_name, :middle_name, :last_name, :email, :contact, :purpose, :pickup_or_deliver, :mode_of_payment, :building_no, :purok, :province, :municipality, :tracking_number, :date_needed, :age)");

        // Bind values from the form
        $stmt->bindParam(':first_name', $_POST['first_name']);
        $stmt->bindParam(':middle_name', $_POST['middle_name']);
        $stmt->bindParam(':last_name', $_POST['last_name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':contact', $_POST['contact']);
        $stmt->bindParam(':purpose', $_POST['purpose']);
        $stmt->bindParam(':pickup_or_deliver', $_POST['pickup_or_deliver']);
        $stmt->bindParam(':mode_of_payment', $_POST['mode_of_payment']);
        $stmt->bindParam(':building_no', $_POST['building_no']);
        $stmt->bindParam(':purok', $_POST['purok']);
        $stmt->bindParam(':province', $_POST['province']);
        $stmt->bindParam(':municipality', $_POST['municipality']);
        $stmt->bindParam(':tracking_number', $trackingNumber);
        $stmt->bindParam(':date_needed', $_POST['date_needed']);
        $stmt->bindParam(':age', $_POST['age']);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>
                    alert('Data submitted successfully. Your tracking number is: $trackingNumber');
                    window.location.href = 'dashboard.html';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Data submission failed');</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
    <header>
        <div class="top-bar" id="homesection">
            Open Hours of the Barangay: Mon - Fri, 8:00 am - 6:00 pm
        </div>
        <div class="navbar">
            <div>
                <a href="dashboard.html #homesection">Home</a>
                <a href="about.html">About</a>
                <a href="dashboard.html#servicessection">Services</a>
                <a href="dashboard.html#mapsection">Map</a>
            </div>
           
        </div>
    </header>
   <section>
   <img src="../user/Image/bannerimg.png" alt="" class="bannerimage">

   
    
   <div class="container">
        <div class="information">PERSONAL INFORMATION</div>
        <form method="post">
            <h2>*Please Make sure to provide your correct Contact Number and Email Address.</h2>
            <div class="bini">
                <input id="fname" type="text" placeholder="First Name" name="first_name" required>
                <input id="mname" type="text" placeholder="Middle Name" name="middle_name">
                <input id="lname" type="text" placeholder="Last Name" name="last_name" required>
            </div>
            <div class="bini">
                <input id="fname" type="email" placeholder="Email" name="email" required>
                <input id="mname" type="tel" placeholder="Age" name="age" required>
                <input id="lname" type="tel" placeholder="Contact Number" name="contact" required>
            </div>
            <div class="binikim">
                <input id="mail" type="text" placeholder="Purpose" name="purpose" required>
                <input id="tel" type="date" placeholder="Date Needed" name="date_needed" required>
            </div>
           
            <div class="biniwes">
                <select id="pickup" name="pickup_or_deliver" required>
                    <option value="" disabled selected>Pick up or Deliver</option>
                    <option value="pick_up">Pick up</option>
                    <option value="deliver">Deliver</option>
                </select>
                <select id="payment" name="mode_of_payment" required>
                    <option value="" disabled selected>Mode of Payment</option>
                    <option value="cash">Cash</option>
                    <option value="online">Online Payment</option>
                </select>
            </div>

            <div class="information">FULL ADDRESS INFORMATION</div>
            <input type="text" placeholder="House No." name="building_no" required>
            <input type="text" placeholder="Purok" name="purok">
            <input type="text" placeholder="Province" name="province" required>
            <input type="text" placeholder="Municipality" name="municipality" required>

            <div class="button-container">
                <button onclick="window.location.href='dashboard.html'" class="butt" type="button">Back</button>
                <button class="submit" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    
    <div class="pics">
        <img src="../img/phone.jpg" alt="">
        <img src="../img/email add.jpg" alt="">
        <img src="../img/office add.jpg" alt="">
    </div>
</section>
    <footer>
        <div class="footer-container">

            <!-- Footer Logo & Description -->
            <div class="footer-logo">
                <img src="../user/Image/nuevalogo.jpg" alt="Barangay Logo">
                <p>A Barangay that is God-centered, competent, orderly, honest, peaceful, credible, gender-responsive, and abides by the Code of Conduct.</p>
            </div>

            <!-- More Pages Section -->
            <div class="footer-section">
                <h4>More Pages</h4>
                <a href="#">Home</a>
                <a href="#">Certificates</a>
                <a href="#">About Us</a>
                <a href="#">Feedback & Report</a>
                <a href="#">News</a>
            </div>

            <!-- Govt Info Section -->
            <div class="footer-section">
                <h4>Govt. Info</h4>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Disclaimer</a>
                <a href="#">FAQ</a>
            </div>
            
        </div>

        <div class="copyright">
            © 2024 | COPYRIGHT: BARANGAY NUEVA VICTORIA | MALAUS KO PU
        </div>
      
    </footer>
</body>
</html>

