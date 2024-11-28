<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>Barangay ID - Barangay Nueva Victoria</title>
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
   
        .container h2 {
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
            font-size: 16px;
            color: red;
            font-weight: 100;
        }
   
        form {
            margin: 20px 0;
        }
      

        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px; /* Adds space between buttons */
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
        form p{
            color: #b0b0b0;
            font-size: 14px;
            margin-bottom: -15px;

        }
        .butt {
            margin: 10px;
            text-decoration: none;
            border-radius: 10px;
            padding: 10px 20px;
            border: 2px solid rgb(194, 194, 194);
            background-color: unset; /* Color for the Back button */
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
        .upload-box {
            cursor: pointer;
            border-radius: 20px;
            width: 100%;
            height: 100px; /* Set the height of the upload box */
            background-color: rgba(0, 123, 255, 0.1); /* Transparent blue background */
            border: 2px dashed rgba(0, 123, 255, 1); /* Broken line border */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            font-size: 23px;
            font-weight: bolder;
            color: rgb(0, 50, 104);
            text-align: center;
        }
        .upload-box input[type="file"] {
            display: none; /* Hide the default file input */
        }
        form span{
            margin-top: 20px;
            margin-bottom: -10px;
            color: red;
            display: flex;
            justify-content: center;
        }
        /* Styles for the business selection dropdown */
select[name="Business"] {
    width: 100%;
    padding: 15px;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f9f9f9;
    appearance: none; /* Remove default arrow */
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABN0lEQVR42mP8//8/A+UAAwJELBBBgFgAAAAAElFTkSuQmCC'); /* Custom arrow */
    background-repeat: no-repeat;
    background-position: right 10px center;
}

select[name="Business"]:focus {
    border-color: #007bff; /* Change border color on focus */
    outline: none; /* Remove default outline */
}

select[name="Business"] option {
    padding: 10px;
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
        <img src="../user/Image/bbpbanner.png" alt="" class="bannerimage">
       
    <div class="container">
        <form action="brgyid2.html" method="post">
            <h2>*Choose what type of business permit you are applying for.</h2>
              <select name="Business" id="business-select" required onchange="redirectToPage()">
        <option value="" disabled selected>Business Permit</option>
        <option value="new_business">New Business</option>
        <option value="renewal">Renewal of Business</option>
        <option value="change_address">Change of Business Address</option>
        <option value="change_name">Change of Business Name</option>
    </select>

            
      
            <div class="button-container">
                <a href="dashboard.html" class="butt">Back</a>
 
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

    <script>
        function redirectToPage() {
            const select = document.getElementById("business-select");
            const selectedValue = select.value;
    
            let redirectUrl;
            switch (selectedValue) {
                case "new_business":
                    redirectUrl = "permitnew.html"; // URL for New Business
                    break;
                case "renewal":
                    redirectUrl = "renewal.html"; // URL for Renewal of Business
                    break;
                case "change_address":
                    redirectUrl = "change_address.html"; // URL for Change of Business Address
                    break;
                case "change_name":
                    redirectUrl = "change_name.html"; // URL for Change of Business Name
                    break;
                default:
                    return; // Do nothing if no option is selected
            }
    
            // Redirect to the selected page
            window.location.href = redirectUrl;
        }
    </script>
</body>
</html>
