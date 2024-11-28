<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>Feedback and Reports</title>
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
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }

        .bannerimage {
            width: 100%;
            max-height: 10%;
        }

        form {
            width: 60%;
        }

        form input, form select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            width: 160%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 100px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-right: -60%;
        }

        form button {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-transform: uppercase;
            font-weight: bolder;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            opacity: 0.9;
        }

        .image-section {
            margin-bottom: 34%;
            width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            height: 140%;
            border-radius: 10px;
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
        
        .butt{
            margin: 10px;
            text-decoration: none;
            border-radius: 10px;
            padding: 10px 20px;
            border: 2px solid rgb(194, 194, 194);
        background-color: unset; /* Color for the Back button */
        color: rgb(189, 189, 189);
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
        <img src="../user/Image/feedbackbanner.png" alt="" class="bannerimage">

      

        <div class="container">
            <form action="indigency2.html" method="post">
                <input type="text" placeholder="First name" name="first_name" required>
                <input type="text" placeholder="Middle name" name="middle_name">
                <input type="text" placeholder="Last name" name="last_name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="tel" placeholder="Contact" name="contact" required>
                <textarea placeholder="Concern" name="concern" required></textarea>
                <div class="button-container">
                    <a href="dashboard.html" class="butt">Back</a>
                    <button type="submit">Submit</button>
                </div>
            </form>

            <div class="image-section">
                <img src="../user/Image/samplepic.png" alt="Barangay Captain">
            </div>
            
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
</html>
