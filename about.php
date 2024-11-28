<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../user/Image/logobrgy.png" type="image/x-icon">
    <title>About - Barangay Nueva Victoria</title>
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
    font-size: 64px;
    color: #ffffff;
    margin: 0;
    margin-left: 240px;
    margin-right: 240px;
    font-weight: bold;
}

.about-logo {
    border-radius: 3000%;
    width: 150px;
    height: auto;
}

.about-subtitle {
    font-size: 14px;
    color: #0099ff;
    margin-top: -30px;
}
.about-description {
    font-size: 18px;
    line-height: 1.7;
    color: #ffffff;
    max-width: 900px;
    margin: 20px auto;
    padding: 0 10px;
    margin-top: 50px;
    text-align: justify;
}
.about-divider {
    border: 0;
    height: 2px;
    background-color: #ffffff; /* Adjust color to match your theme */
    width: 90%;
    margin: 20px auto; /* Centers the line */
    margin-top: 60px;
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
    <header>
        <div class="top-bar" id="homesection">
            Open Hours of the Barangay: Mon - Fri, 8:00 am - 6:00 pm
        </div>
        <div class="navbar">
      
            <div>
                <a href="dashboard.html#homesection">Home</a>
                <a href="#">About</a>
                <a href="dashboard.html#servicessection">Services</a>
                <a href="dashboard.html#mapsection">Map</a>
            </div>
           
        </div>
    </header>
        <!-- About Us Section -->
        <section class="about-us">
            <a href="dashboard.html" class="back-button">←</a>
            <div class="about-header">
                <img src="../user/Image/logobrgy.png" alt="Left Logo" class="about-logo">
                <h2>About Us</h2>
                <img src="../user/Image/logobrgy.png" alt="Right Logo" class="about-logo">
            </div>
            <p class="about-subtitle">Barangay Nueva Victoria Mexico, Pampanga</p>

            <hr class="about-divider">

            <p class="about-description">
                Barangay Nueva Victoria, established in the early 1900s, has a rich history rooted in resilience, community spirit, and cultural heritage. Initially a small settlement of farmers and fishermen, Nueva Victoria grew over the years as people from neighboring areas settled here in search of peace and prosperity. Known for its lush landscapes and fertile lands, it quickly became an agricultural hub in Mexico, Pampanga, cultivating crops such as rice, corn, and vegetables that supplied not only the local community but also neighboring barangays. 
        
                During the Second World War, Nueva Victoria served as a refuge for those displaced by conflict, providing shelter and safety in a time of great uncertainty. The community came together, sharing resources and supporting one another, a tradition that continues today. The post-war era marked a new beginning for the barangay, as it embarked on a period of rebuilding and modernization, with improvements in infrastructure, education, and public health.
        
                Today, Barangay Nueva Victoria is a vibrant community that values tradition while embracing progress. It hosts numerous festivals that celebrate its heritage, such as the annual "Harvest Festival" in honor of the bountiful crops and the "Bayanihan Day" where residents gather to engage in community service projects. The barangay’s leadership focuses on sustainable development, with programs aimed at preserving the environment, enhancing local livelihood, and promoting peace and order. 
        
                With its deep-rooted values of unity, cooperation, and resilience, Barangay Nueva Victoria continues to thrive, offering its residents a safe, nurturing, and progressive environment. The barangay is proud of its legacy and is committed to building a future where every resident feels valued and empowered.
            </p>


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
