<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Indigency</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bonheur+Royale&display=swap" rel="stylesheet">
    <style>
        /* Overall Page Style */
        body {
            font-family: 'Arial', sans-serif;

            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
  
        .certificate-container {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
            background-image: url('../img/logobrgy.png'); /* Background image */
            background-image: url('../img/logobrgy.png');
            background-repeat: no-repeat; /* Prevents repetition */
            background-position: center; /* Centers the image */
            background-position-y: 380px;
            background-color: #fff;
            background-size: 550px auto; /* Makes the image smaller while maintaining aspect ratio */
            padding-bottom: 20mm;
            position: relative;
        }
    
        @media print {
    /* Remove browser-imposed margins */
    @page {
        size: A4; /* Standard page size for the certificate */
        margin: 0; /* Eliminate page margins */
    }

    /* Ensure the body and container fill the entire page */
    body {
        margin: 0;
        padding: 0;
    }
    .headerdesign {
        width: 210mm;
        height: 297mm;
            margin: 0 auto;
            margin-bottom: -90px;
     
        }
        .footerdesign {
            position: relative;
            top: 96px;
            bottom: 0;
            width: 100%; /* Matches 8.5 inches */
            height: auto;
        }
    .certificate-container {
        width: 210mm;
        height: 297mm;
            background-image: url('../img/logobrgy.png'); /* Background image */
            background-repeat: no-repeat; /* Prevents repetition */
            background-position: center; /* Centers the image */
            background-position-y: 380px;
            background-color: #fff;
            background-size: 550px auto; /* Makes the image smaller while maintaining aspect ratio */
            position: relative;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            padding-bottom: 20mm;
        }
   
    /* Optional: Hide print and download buttons */
    button {
        display: none;
    }
}
.to-whom-it-may-concern {
    margin-left: 80px;
    text-align: left;
    letter-spacing: 2px;
    font-family: "bebas neue"; /* Matches existing styles */
    font-size: 20px; /* Adjust font size to match your screenshot */
    font-weight: bold; /* Make it stand out */
    margin-top: 30px; /* Space below the title */
    margin-bottom: -30px;
    color: #233e5c; /* Optional: Match the text color to other sections */
}
        /* Logo Placement */
        .logo-left {
            border-radius: 1000%;
            position: absolute;
            top: 50px;
            left: 60px;
            width: 130px;
            z-index: 2; 
        }
        .logo-right {
            z-index: 2; 
            border-radius: 1000%;
            position: absolute;
            top: 50px;
            right: 60px;
            width: 130px;
        }
   
        /* Header Section */
        .headerdesign {
            width: 100%; /* Matches 8.5 inches */
            height: 300px; /* Matches 11 inches */
            margin: 0 auto;
            margin-bottom: -90px;
     
        }
    

        /* Certificate Title */
        .certificate-title {
            text-align: center;
            font-size: 70px;
            font-family: "Bonheur Royale", cursive;
            margin-bottom: 15px;
            margin-top: 80px;
        }
        .certificatedesign{
      
            width: 500px; /* Matches 8.5 inches */
            height: 40px;
            margin: 0 155px;
            margin-top: -300px;
        }
     
        /* Main Content Section */
        .content {
            font-family: 'Times New Roman', Times, serif;
            margin: 40px 100px;
            font-size: 20px;
            line-height: 1.6;
            text-align: justify;
        }
        .content strong {
            font-weight: bold;
        }
        .underline {
            border-bottom: 1px solid black;
            display: inline-block;
            width: 300px;
        }
    
        /* Signature Section */
        .signatures {
            margin-top: 100px;
            display: flex;
            justify-content: space-between;
            padding: 0px 100px;
            margin-bottom: -10px;
        }
        .signatures span{
            color: #233e5c;
            font-family: "bebas neue";
            font-size: 28px;
        }
        .signatures #resident-name{
            color: #233e5c;
            font-family: "bebas neue";
            font-size:28px;
        }
        .signatures p{
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }
        .signatures div {
            text-align: center;
        }
        .signatures div strong {
            display: block;
            margin-top: -20px;
            margin-bottom: -10px;
        }
        .footerdesign {
            position: relative;
            top: 80px;
            width: 100%; /* Matches 8.5 inches */
            height: 200px;
        }
   
.footerdesign img {
    width: 100%; /* Resize image to fit the container */
    height: auto; /* Maintain the image's aspect ratio */
}

        /* Footer Section */
        .footer {
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 14px;
        }
  
       
        /* Buttons */
        button {
            position: absolute;
            top: 25px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        
        #save {
            background-color: #031273;
            position: absolute;
            padding: 10px 20px;
            color: white;
            border: none;
            height: 10%;
            top: 85%;
            right: 4%;
            cursor: pointer;
            border-radius: 5px;
        }
        button#download-pdf {
            right: 100px;
        }
        button#print {
            right: 20px;
        }

         /* Modal Styles */
         .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            height:340px; 
            width: 400px;
            max-width: 90%;
            text-align: center;
            position: relative;
        }
        .modal-content h2 {
            margin-bottom: 20px;
        }
        .modal-content form label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        .modal-content form input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .modal-content button[type="submit"] {
            padding: 10px 20px;
            background-color: #031273;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    
</head>
<body>
    <?html
// Include the database connection
include '../html/database.html';

// Fetch resident information based on their ID
$resident_id = $_GET['id'] ?? null;
$resident = null;

if ($resident_id) {
    $stmt = $pdo->prepare("
        SELECT 
            CONCAT(first_name, ' ', middle_name, ' ', last_name) AS name,  
            age, 
            purpose 
        FROM residents 
        WHERE id = :id
    ");
    $stmt->bindParam(':id', $resident_id, PDO::PARAM_INT);
    $stmt->execute();
    $resident = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Check if resident information is found
if (!$resident) {
    die("No resident data found. Please check the ID.");
}
?>

<div id="paymentModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Create Payment</h2>
            <form id="paymentForm">
            <input type="hidden" id="resident_id" name="id" value="<?html echo htmlspecialchars($resident_id); ?>">


                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required>
                
                <label for="dateIssued">Date Issued:</label>
                <input type="date" id="dateIssued" name="dateIssued" required>
                
                <label for="paymentDetails">Payment Details (Optional):</label>
                <input type="text" id="paymentDetails" name="paymentDetails">
                
                
                <button id="save" type="submit">Save</button>
           
            </form>
            
        </div>
    </div>



<!-- Buttons -->
<button style="
                    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 12px;
                    line-height: 1;
                    border-radius: 500px;
                    transition-property: background-color,border-color,color,box-shadow,filter;
                    transition-duration: .3s;
                    border: 1px solid transparent;
                    letter-spacing: 2px;
                    min-width: 70px;
                    text-transform: uppercase;
                    white-space: normal;
                    font-weight: 700;
                    text-align: center;
                    padding: 16px 14px 18px;
                    color: #fff;
                    background-color: #031273;
                    height: 48px;
                    :hover{
                        background-color: #4169E1;
                    }
                "  id="download-pdf">Download PDF</button>
<button style="
                    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 12px;
                    line-height: 1;
                    border-radius: 500px;
                    transition-property: background-color,border-color,color,box-shadow,filter;
                    transition-duration: .3s;
                    border: 1px solid transparent;
                    letter-spacing: 2px;
                    min-width: 70px;
                    text-transform: uppercase;
                    white-space: normal;
                    font-weight: 700;
                    text-align: center;
                    padding: 16px 14px 18px;
                    color: #fff;
                    background-color: #031273;
                    height: 48px;
                    :hover{
                        background-color: #4169E1;
                    }
                "  id="print" onclick="window.print()">Print</button>


<div class="certificate-container" id="certificate">
    <div class="header">
    <img src="../img/headercertificate.png" alt="Barangay Logo" class="headerdesign">

    </div>
 

    <!-- Certificate Title -->
    <div class="certificate-title">Certificate of Indigency</div>
    <img src="../img/certdesign.png" alt="Barangay Logo" class="certificatedesign">
    <div class="to-whom-it-may-concern">
        TO WHOM IT MAY CONCERN:</div>
    <!-- Content -->
    <div class="content">
        <p>
            This is to certify that <strong class="resident-name"><?html echo htmlspecialchars($resident['name']); ?></strong>, 
            of legal age (<?html echo htmlspecialchars($resident['age']); ?> years old), Filipino citizen, 
            and a bonafide resident of Barangay Nueva Victoria, Municipality of Mexico, Province of Pampanga.
        </p>
        <p>
            This certification is issued upon the request of <strong><?html echo htmlspecialchars($resident['name']); ?></strong> 
            for the purpose of <strong><?html echo htmlspecialchars($resident['purpose']); ?></strong>. This certification is valid for 
            three (3) months from the date of issuance.
        </p>
        <p>
            Issued this <strong><?html echo date('jS'); ?></strong> day of <strong><?html echo date('F'); ?></strong>, 
            <strong><?html echo date('Y'); ?></strong>, at Barangay Nueva Victoria, Municipality of Mexico, Pampanga.
        </p>
    </div>

    <!-- Signatures -->
    <div class="signatures">
        <div>
            <span><?html echo htmlspecialchars($resident['name']); ?></span>
            <strong>_________________________</strong>
            <p>Signature over Printed Name</p>
        </div>
        <div>
            <span>Hon. Ernesto Canda</span>
            <strong>_________________________</strong>
            <p>Punong Barangay</p>
          
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
     
    
        <img src="../img/footerdesign.png" alt="footer image" class="footerdesign">
        
     
    </div>
</div>

<!-- Include jsPDF and html2canvas libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script >

document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('paymentModal');
            const closeModal = document.getElementById('closeModal');

            // Automatically open modal when page loads
            modal.style.display = 'flex';

            // Close modal when the close button is clicked
            closeModal.addEventListener('click', () => {
                modal.style.display = 'none';
            });

            // Close modal when clicking outside the modal content
            window.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });

            // Payment form submission (AJAX or server-side integration can go here)
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Payment saved successfully!'); // Placeholder action
                modal.style.display = 'none';
            });
        });

    document.getElementById('download-pdf').addEventListener('click', function () {
        const certificate = document.getElementById('certificate');

        const residentName = document.querySelector('.resident-name').innerText.trim(); 


        html2canvas(certificate, {
            scale: 3,
    useCORS: true, // Ensures images are loaded cross-origin if necessary
    backgroundColor: null,
        }).then((canvas) => {
            const imgData = canvas.toDataURL('image/png');
            const { jsPDF } = window.jspdf;

            const pdfWidth = 210;
            const pdfHeight = 297;

            const imgWidth = canvas.width / 2.8346;
            const imgHeight = canvas.height / 2.8346;
            const scaleFactor = Math.min(pdfWidth / imgWidth, pdfHeight / imgHeight);

            const scaledWidth = imgWidth * scaleFactor;
            const scaledHeight = imgHeight * scaleFactor;

            const pdf = new jsPDF({
                orientation: 'portrait',
                unit: 'mm',
                format: 'a4',
            });

            const xOffset = (pdfWidth - scaledWidth) / 2;
            const yOffset = (pdfHeight - scaledHeight) / 2;

            pdf.addImage(imgData, 'PNG', xOffset, yOffset, scaledWidth, scaledHeight);

            const fileName = `Certificate_of_Indigency_${residentName.replace(/ /g, "_")}.pdf`;
            pdf.save(fileName);
        });
    });

    const paymentModal = document.getElementById('paymentModal');
const paymentForm = document.getElementById('paymentForm');
const closeModal = document.getElementById('closeModal');

// Show the modal (you can call this function as needed)
function openPaymentModal(id) {
    paymentForm.reset(); // Reset form fields
    document.getElementById('id').value = id; // Set ID dynamically
    paymentModal.style.display = 'block';
}

// Close the modal
closeModal.addEventListener('click', () => {
    paymentModal.style.display = 'none';
});

// Handle form submission
paymentForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(paymentForm);

    fetch('payment.html', {
        method: 'POST',
        body: formData,
    })
    .then((response) => response.json())
    .then((data) => {
        if (data.message) {
            alert(data.message);
            if (data.message.includes('successfully')) {
                paymentModal.style.display = 'none'; // Close modal on success
                // Optionally refresh the page or update the UI
            }
        } else {
            alert('Unexpected response from the server.');
        }
    })
    .catch((error) => {
        console.error('Error:', error);
        alert('An error occurred while saving the payment.');
    });
});

// Close modal when clicking outside of it (optional feature)
window.addEventListener('click', (event) => {
    if (event.target === paymentModal) {
        paymentModal.style.display = 'none';
    }
});

function openPaymentModal(id) {
    paymentForm.reset();
    document.getElementById('id').value = id; // Set the resident's ID
    paymentModal.style.display = 'block';
}
function openPaymentModal(residentId) {
    paymentForm.reset();
    document.getElementById('resident_id').value = residentId; // Correct the hidden input
    paymentModal.style.display = 'block';
}




</script>

</body>
</html>
