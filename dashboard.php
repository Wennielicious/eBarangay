<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../ebadmin/user/Image/logobrgy.png" type="image/x-icon">
    <title>eBarangay - Barangay Nueva Victoria</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .body {
            margin-top: 6.9%;
            opacity: 0;
            animation: fadeIn 2s forwards; 
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            
        }
        @keyframes fadeIn {
    to {
        opacity: 1; 
        transform: translateY(0);
    }
}
        .map-section {
        display: flex;
        flex-direction: column; 
        align-items: center; 
        text-align: center; 
        height: auto; 
        margin-top: 5%;
        margin-bottom: 5%;
        }

        .maptext {
        margin-bottom: 20px; 
        margin-left: -60%;
        }

        
    .fromthe {
    font-size: 25px; 
    font-weight: 300;
    letter-spacing: 2px;
    margin-left: -220px;
    color: #000;
    margin-bottom: -0px;
    }

    .highlightt {
    font-size: 40px;
    color: #00308a; 
    font-weight: bold;
    }
    #map {
        background-color: #ffffff;
        border-radius: 10px;
        border: solid #4e83d4;
        height: 80vh; 
        width: 90%; 
        max-width: 1000px; 
        max-height: 600px; 
        }
        header {
            background-color: #002649;
            color: #fff;
            padding: 1px;
            text-align: center;
            position: fixed;
            top: 0;
            z-index: 1000;
            width: 100%;
            font-family: "Bebas Neue", sans-serif;
  font-weight: regular;
  letter-spacing: 1px;
 
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
        .services-button{
            top: -150px;
            margin-right: 30px;
            font-weight: 600;
            font-size: 20px;
            cursor: pointer;
            padding: 25px 25px;
            background-color: #7AB2DD;
            border-radius: 10px;
            border: none; 
            color: white;
            transition: all 0.5s    ease-in-out;
            position: relative;  /* Use relative or absolute positioning */
 
        }
        .services-button:hover {
        font-weight: 600;
        transform: translateY(-1px);
        

        background-color: #7AB2DD; 
    }
        .banner-content {
    display: flex;
    align-items: center; 
    justify-content: space-between; 
}
.bannerimage {
    width: 500px; 
    height: 200px; 
    margin-top: -300px; 
    
}

@media (max-width: 768px) {
    .services-button {
        margin-right: 5px;
        padding: 10px 15px;
        font-size: small;
        top: -155px;  /* Adjust the positioning based on screen size */
  
    }
    .bannerimage {
        margin-top: -299px; 
        margin-left: 5px;  
        margin-right: 10px;
    
    }}
        .banner {
            background-image: url('../user/Image/bgphoto.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 200px 0;
            position: relative;
            opacity: 0.9;
        }
  
       
    .line-container {
        width: 100%;
        text-align: center;
        margin-top: -100px;
    }

    .white-line {
        width: 100%;
        height: 10px; 
        background-color: white;
    }

    .gray-line {
        width: 100%;
        height: 50px; 
        background-color: rgb(31, 31, 31);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gray-line span {
        color: #7AB2DD;
        font-size: 18px; 
        font-weight: bold;
    }
        .banner h1 {
            padding-top: 150px;
            font-size: 5.0rem;
            font-weight: bold;
        }
        .banner h2 {
            margin-right: 100px;
            text-align: right;
            font-weight: lighter;
            font-size: 1.8rem;
            margin-bottom: 100px;
        }
        .banner::after {
            content: "";
            position: absolute;
            filter: blur(100%);

            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, white, transparent);
        }
      .services-section {
    padding: 60px 0;
    background-color: #f5f5f5;
    text-align: center;
}

.services-section h2 {
    color: #7AB2DD;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.services-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px; 
    justify-items: center; 
    padding: 0 200px;
}


@media (max-width: 1200px) {
    .services-cards {
        grid-template-columns: repeat(2, 1fr);
        padding: 0 100px;
    }
}

@media (max-width: 768px) {
    .services-cards {
        grid-template-columns: 1fr; 
        padding: 0 50px;
    }
}

.service-card {
    background-color: rgb(73, 73, 73);
    width: 100%;
    max-width: 300px; 
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.service-card:hover {
    transform: translateY(-10px);
}

.service-card img {
    color: #eee;
    max-width: 50%;
    margin-bottom: 15px;
}

.service-card h3 {
    font-size: 1rem;
    color: #5ab5ff;
    margin-bottom: 10px;
}

.service-card p {
    font-size: small;
    color: #ffffff;
    margin-bottom: 10px;
}

.proceed-btn {
    background-color: #5bb7e5;
    border: none;
    color: white;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.proceed-btn:hover {
    background-color: #ffffff;
    color: #7AB2DD;
}


        .document-request {
            padding: 60px 0;
            background-color: #eee;
            text-align: center;
        }
        .document-request h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        .document-request button {
            background-color: #7AB2DD;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 5px;
        }
      

        /* MEDIA QUERIES FOR RESPONSIVENESS */
        @media (max-width: 1024px) {
            .navbar {
                flex-direction: column;
            }
            .navbar a {
                font-size: 1rem;
            }
            .services-button {
                margin-top: 10px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.5rem;
            }
            .banner h2 {
                font-size: 1.5rem;
            }
            .services-cards {
                flex-direction: column;
            }
            .service-card {
                width: 80%;
                margin: 10px auto;
            }
        }

        @media (max-width: 500px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            .navbar a {
                display: block;
                margin-bottom: 10px;
                font-size: 1rem;
            }
            .banner h1 {
                font-size: 2rem;
            }
            .banner h2 {
                font-size: 1.2rem;
            }
            .services-button {
                font-size: 0.8rem;
            }
            .service-card {
                width: 100%;
                margin: 10px 0;
            }
            .document-request button {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
        .captain-message {
    position: relative;
    padding: 60px 0;
    color: #000000;
}

.captain-message::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.2)), 
    url('../user/Image/bg2.jpg'); 
    background-size: cover;
    background-position: center;
    opacity: 0.5; 
    z-index: 1;
}

.container {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.text-section {
    max-width: 600px;
}

.text-section .from-the {
    font-size: 16px;
    font-weight: 300; 
    letter-spacing: 2px; 
    color: #000;
    margin-bottom: -0px; 
}

.text-section h1 {
    font-size: 36px;
    color: #000;
    margin-top: 0; 
}

.highlight {
    color: #7AB2DD;
    font-weight: bold;
}

.text-section .greetings {
    font-size: 24px;
    font-weight: bold;
}

.text-section p {
    font-weight: 100;
    font-size: 21px;
    margin: 60px 0;
}

.image-section img {
    
    width: auto;
    height: auto;
   
}

@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
        text-align: center;
    }

    .image-section img {
        margin-top: 20px;
        max-width: 900px;
    }
}
.tracking-section {
    position: relative;
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    text-align: center;
    color: #000000;
    z-index: 1;
}


.tracking-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, rgb(240, 240, 240), rgba(255, 255, 255, 0) 30%, rgba(255, 255, 255, 0) 30%, rgb(240, 240, 240)), 
                      url('../user/Image/track.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.3; 
    filter: brightness(100%);
    z-index: -1;
}

.tracking-section hr{
    background-color: rgb(255, 255, 255);
    height: 3px;
   
}

.tracking-container h1 {
    color: #7AB2DD;
    margin: 0 30px;
    text-align: left;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}


.tracking-container p {
    margin-left: 30px;
    text-align: left;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 50px;
}


.tracking-form {
    display: flex;
    justify-content: center;
    align-items: center;
}

#tracking-code {
    width: 70%;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    margin-right: 10px;
}

button {
    padding: 15px 25px;
    background-color: #7AB2DD;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #2c6eb4;
}


.council {
    text-align: center;
    padding: 60px 0; /* Adjusted padding for better spacing */
}

.council p {
    font-size: 19px;
    font-weight: bolder;
    color:#7AB2DD;
}

.council h1 {
    font-weight: 700;
    color: #7AB2DD;
    font-size: 62px;
    margin-bottom: 5px;
}

.council h2 {
    color: #4e4e4e;
    font-size: 27px;
    margin-bottom: 20px;
}

.council-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Fixed 3 columns */
    gap: 40px; /* Space between the grid items */
    justify-items: center;
    padding: 0 10px; /* Padding adjusted for overall layout */
    margin: 0 auto; /* Center the grid container */
    max-width: 1200px; /* Maximum width for large screens */
}

.council-member {
    perspective: 1000px; /* Keep perspective for 3D effect */
    width: 100%; /* Full width of the grid item */
    max-width: 300px; /* Limit the max width */
}

.council-member-inner {
    position: relative;
    width: 100%; /* Ensure the inner div takes full width */
    height: 400px; /* Set a fixed height for uniformity */
    transform-style: preserve-3d;
    transition: transform 0.6s;
}

.council-member:hover .council-member-inner {
    transform: rotateY(180deg);
}

.council-member-front,
.council-member-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 8px;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.082);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #ffffff;
}

.council-member-front {
    z-index: 2; /* Keep front card on top */
}

.council-member-back {
    transform: rotateY(180deg);
}

.council-member img {
    width: 200px; /* Adjust image size */
    height: 200px; /* Maintain aspect ratio */

    margin-bottom: 30px;
}

.council-member-back p {
    font-size: 18px;
    color: #7AB2DD;
    margin-bottom: 25px;
    text-align: center;
}

.council-member-back button {
    background-color: #7AB2DD;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.council-member-back button:hover {
    background-color: #5c9cd4;
}

/* Media Queries */
@media (max-width: 1024px) {
    .council-grid {
        grid-template-columns: repeat(2, 1fr); /* Two columns on medium screens */
    }

    .council h1 {
        font-size: 50px; /* Smaller font size for h1 */
    }

    .council h2 {
        font-size: 22px; /* Smaller font size for h2 */
    }
}

@media (max-width: 768px) {
    .council-grid {
        grid-template-columns: 1fr; /* Single column on small screens */
    }

    .council h1 {
        font-size: 36px; /* Further decrease font size for small screens */
    }

    .council h2 {
        font-size: 20px; /* Further decrease font size for small screens */
    }

    .council-member img {
        width: 80px; /* Adjust image size for small screens */
        height: 80px; /* Maintain aspect ratio */
    }

    .council-member-back p {
        font-size: 16px; /* Adjust text size on the back of the card */
    }
}





.feedback-section {
            background-color: #fff;
            padding: 60px 20px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        .feedback-section {
        background-color: #fff;
        padding: 60px 20px;
        border-bottom: 1px solid #ccc;
        text-align: center;
    }

    .feedback-section h1 {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: 200;
        font-size: 56px;
        color: #7AB2DD;
        margin-bottom: 20px;
    }

    .feedback-content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    .feedback-section h2 {
    
        text-align: left;
        font-size: 24px;
        color: #292929;
        margin: 0;
    }

    .feedback-section p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin: 0;
    }
        .button-container {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 25px 150px;
            margin: 10px;
            font-size: 19px;
            background-color: #00365a;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #00b5fd;
            color: #ffffff;
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

        /* For responsive design */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-logo, .footer-section {
                width: 100%;
                margin-bottom: 20px;
            }

            .footer-logo p {
                text-align: center;
            }

            .footer-section {
                text-align: center;
            }
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<?html
// Database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=barangay_admin', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch services from database
    $stmt = $pdo->query("SELECT * FROM services");
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

    <header>
        <div class="top-bar" id="homesection">
            Open Hours of the Barangay: Mon - Fri, 8:00 am - 6:00 pm
        </div>
        <div class="navbar">
            <div>
                <a href="#homesection">Home</a>
                <a href="about.html">About</a>
                <a href="#servicessection">Services</a>
                <a href="#mapsection">Map</a>
            </div>
           
        </div>
    </header>
   
   
<div class="body">
    <section class="banner">
        <div class="banner-content">
            <img src="../xampp/../user/Image/nueva.png" alt="nueva" class="bannerimage">
            <button class="services-button" onclick="scrollToTracking()">TRACK MY REQUEST</button>
        </div>
        
        <div class="line-container">
            <div class="white-line"></div>
            <div class="gray-line">
                <span>WELCOME TO THE OFFICIAL WEBSITE OF</span>
            </div>
        </div>
        <h1>BARANGAY NUEVA VICTORIA</h1>
        <h2>Mexico, Pampanga</h2>
    </section>

    <section class="captain-message">
        
        <div class="container">
            <div class="text-section">
                <p class="from-the">From the</p> 
                <h1><span class="highlight">Barangay Captain</span></h1>
                <p class="greetings">greatings!</p>
                <p>Malugod da ko pung anyayahan na bisitahan at lawen ing bayu tamu at mas komprehensibang Barangay Website.</p>
            </div>
  
            <div class="image-section">
                <img src="../xampp/../user/Image/samplepic.png" alt="Barangay Captain Image">
            </div>
        </div>
    </section>

    <section class="services-section" id="servicessection">
        <h2>OUR SERVICES</h2>
        <div class="services-cards">
        <?html foreach ($services as $service): ?>
            <!-- First row of services -->
            <div class="service-card">
            <img src="<?html echo htmlspecialchars($service['image_url']); ?>" alt="Service Icon">
                    <h3><?html echo htmlspecialchars($service['service_name']); ?></h3>
                    <p><?html echo htmlspecialchars($service['description']); ?></p>
                    <a href="<?html echo htmlspecialchars($service['form_link']); ?>" class="proceed-btn">Proceed</a>
                </div>
            <?html endforeach; ?>
        

    </section>
    
   <section class="map-section" id="mapsection">
    <div class="maptext">
        <p class="fromthe">The map of</p> 
        <h1><span class="highlightt">Barangay Nueva Victoria</span></h1></div>
    <div id="map"></div>
        <br>
    </section>



    <section class="tracking-section" id="trackingsection">
        <hr>
        <br><br>
    <div class="tracking-container" >
        <h1>Track Requested Document</h1>
        <p>Residents can conveniently monitor the progress of their requested documents by entering their unique tracking code into the system, allowing them to stay updated on the current status and estimated completion time without needing to visit the barangay office.</p>
        <div class="tracking-form">
            <input type="text" id="tracking-code" placeholder="Enter your tracking code" />
            <button onclick="trackDocument()">Search</button>
        </div>
    </div> 
        <br><br> 
        <hr>
    </section>


    <section class="council" id="councilsection">
        <h1>MEET OUR COUNCIL</h1>
        <h2>BARANGAY</h2>

        <div class="council-grid">
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Captain">
                        <p>Barangay Captain</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Captain</p>
                        <a href="brgycap.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad1.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad2.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad3.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad4.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad5.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad6.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad7.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="council-member">
                <div class="council-member-inner">
                    <div class="council-member-front">
                        <img src="../xampp/../user/Image/sample.webp" alt="Barangay Kagawad">
                        <p>Barangay Kagawad</p>
                    </div>
                    <div class="council-member-back">
                        <p>About the Barangay Kagawad</p>
                        <a href="kagawad8.html" class="back-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback-section">
        <h1>FEEDBACK & REPORTS</h1>
        <div class="feedback-content">
            <h2>Community-Centered Solutions: Enhancing Barangay Response to Problems and Concerns</h2>
            <p>By fostering open communication and active listening, our barangay can effectively address individual feedback, reports, concerns, and problems. This process involves recognizing each person's perspective, responding with empathy, and collaborating to find solutions that promote mutual understanding and growth.</p>
        </div>
          <div class="button-container">
            <a href="feedback.html" class="button">Send a feedback or any reports here!</a>
            <a href="rblotter.html" class="button">Blotter Report</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">

            <!-- Footer Logo & Description -->
            <div class="footer-logo">
                <img src="../xampp/../user/Image/logobrgy.png" alt="Barangay Logo">
                <p>A Barangay that is God-centered, competent, orderly, honest, peaceful, credible, gender-responsive, and abides by the Code of Conduct.</p>
            </div>

            <!-- More Pages Section -->
            <div class="footer-section">
                <h4>More Pages</h4>
                <a href="#">Home</a>
                <a href="#">Certificates</a>
                <a href="about.html">About Us</a>
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


  
</div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        
        var map = L.map('map').setView([15.1013685,120.6783578], 14.17); 

       
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

       
        var marker = L.marker([15.1013685,120.6783578]).addTo(map)
            .bindPopup('<b>Barangay Nueva Victoria</b>')
            .openPopup();

            function scrollToTracking() {
    const servicesSection = document.getElementById('trackingsection');
    servicesSection.scrollIntoView({ behavior: 'smooth' });
  }
  document.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector('.container');
    container.style.opacity = '1'; // Make sure it fades in when the content is loaded
});    
  </script>

</body>
</html>
