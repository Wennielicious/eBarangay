<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>Barangay Captain - Barangay Nueva Victoria</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(../user/Image/bgphoto.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           
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
            background-color: #0000008c;
       
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
     
               .container h2{
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
            font-size: 16px;
            color: red;
            font-weight: 100;
        }
        
        .about-us {
    text-align: center;
    margin: 40px auto;
    padding: 20px 0;
}

.about-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.about-header h2 {
    margin-left: 240px;
    margin-right: 240px;
    font-size: 14px;
    margin-top: -40px;
    font-weight: lighter;
    color: #0099ff;

}

.about-logo {
    border-radius: 3000%;
    width: 150px;
    height: auto;
}

.about-subtitle {
    margin-top: -80px;
    font-size: 64px;
    top: 20px;
    color: #ffffff;

    font-weight: bold;

}

.about-divider {
    border: 0;
    height: 2px;
    background-color: #ffffff; /* Adjust color to match your theme */
    width: 90%;
    margin: 20px auto; /* Centers the line */
    margin-top: 60px;
}


       
.barangay-captain-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: white;
            padding: 40px;
            max-width: 800px;
            margin: 50px auto;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        /* Barangay Logo */
        .barangay-logo {
            width: 120px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        /* Title and Name */
        .barangay-captain-title {
            font-size: 19px;
            color: #777;
            margin-bottom: -20px;
        }

        .barangay-captain-name {
            font-size: 28px;
            font-weight: bold;
            color: #003366;
            margin-bottom: 20px;
        }
        
        /* About Description */
        .barangay-description {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            text-align: justify;
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

        .back-button {
    font-size: 1.9rem;
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    margin-right: auto; /* Aligns to the left */
    display: flex;
    margin: 10px 10px;
    margin-top: -50px;
    align-items: center;
}

.back-button:hover {
    color: #0091ff; /* Change color on hover */
}

    </style>
</head>
<body>

    </header>
        <!-- About Us Section -->
        <section class="about-us">
            <a href="dashboard.html #councilsection" class="back-button">←</a>
            <div class="about-header">
                <img src="../user/Image/logobrgy.png" alt="Left Logo" class="about-logo">
                <h2>Barangay Nueva Victoria Mexico, Pampanga</h2>
                <img src="../user/Image/logobrgy.png" alt="Right Logo" class="about-logo">
            </div>
   
            <p class="about-subtitle">Barangay Captain</p>

            <hr class="about-divider">

            <div class="barangay-captain-container">
                <img src="../user/Image/logobrgy.png" alt="Barangay Logo" class="barangay-logo">
                
                <p class="barangay-captain-title">Barangay Captain</p>
                <h2 class="barangay-captain-name">BRGY CAPT'S NAME</h2>
                
                <p class="barangay-description">
                    Nueva Victoria's Barangay Captain, a respected leader in the community, is responsible for maintaining peace and order, overseeing local development projects, and ensuring that the needs of the residents are met. Through active governance and close coordination with both local and provincial authorities, the barangay captain plays a vital role in fostering unity and progress in Nueva Victoria.
                </p>
            </div>
        

        </section>
    
    <footer>
        <div class="footer-container">

            <!-- Footer Logo & Description -->
            <div class="footer-logo">
                <img src="../user/Image/logobrgy.png" alt="Barangay Logo">
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
