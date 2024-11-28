<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>Barangay ID</title>
    <link rel="stylesheet" href="style.css">
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
            width: 60%;
            margin: auto;
            background-color: white;
            padding: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            margin-top: 50px;
        }
        .bannerimage {
            width: 100%;
            max-height: 10%;
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0;
        }
        .container h2 {
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
        form input {
            width: 100%;
            padding: 20px;
            margin: 20px 0px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        form button {
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
        .butt {
            margin: 10px;
            text-decoration: none;
            border-radius: 10px;
            padding: 10px 20px;
            border: 2px solid rgb(194, 194, 194);
            background-color: unset;
            color: rgb(189, 189, 189);
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
        .copyright {
            margin-bottom: -40px;
            padding: 30px;
            background-color: #7AB2DD;
            font-size: 12px;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-bar" id="homesection">
            Open Hours of the Barangay: Mon - Fri, 8:00 am - 6:00 pm
        </div>
        <div class="navbar">
            <div>
                <a href="#homesection">Home</a>
                <a href="#">About</a>
                <a href="#servicessection">Services</a>
                <a href="#mapsection">Map</a>
            </div>
        </div>
    </header>
    <section>
        <img src="../user/Image/idbanner.png" alt="" class="bannerimage">

        <div class="step-indicator">
            <div class="step">
                <span class="circle">1</span>
                <div class="label">Personal</div>
            </div>
            <div class="step active">
                <span class="circle">2</span>
                <div class="label">Address</div>
            </div>
            <div class="step">
                <span class="circle">3</span>
                <div class="label">Proof of Residency</div>
            </div>
        </div>

        <div class="container">
            <form action="brgyid3.html" method="post">
                <h2>*Please Provide Your Complete Address for Verification.</h2>
                <input type="text" placeholder="House Number" name="house_number" required>
                <input type="text" placeholder="Street" name="street" required>
                <input type="text" placeholder="Subdivision / Barangay" name="barangay" required>
                <input type="text" placeholder="City / Municipality" name="city" required>
                <input type="text" placeholder="Province" name="province" required>
                <input type="text" placeholder="Postal Code" name="postal_code" required>

                <div class="button-container">
                    <a href="brgyid.html" class="butt">Back</a>
                    <button type="submit">Next</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="../user/Image/nuevalogo.jpg" alt="Barangay Logo">
                <p>A Barangay that is God-centered, competent, orderly, honest, peaceful, credible, gender-responsive, and abides by the Code of Conduct.</p>
            </div>
            <div class="footer-section">
                <h4>More Pages</h4>
                <a href="#">Home</a>
                <a href="#">Certificates</a>
                <a href="#">About Us</a>
                <a href="#">Feedback & Report</a>
                <a href="#">News</a>
            </div>
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
</html
