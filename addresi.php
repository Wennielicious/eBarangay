<?html
// Database connection
$host = 'localhost';
$db = 'barangay_admin';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Collect form data
$last_name = $_POST['last_name'];
$place_of_birth = $_POST['place_of_birth'];
$address = $_POST['address'];
$house_no = $_POST['house_no'];
$purok = $_POST['purok'];
$occupation = $_POST['occupation'];
$first_name = $_POST['first_name'];
$age = $_POST['age'];
$civil_status = $_POST['civil_status'];
$citizenship = $_POST['citizenship'];
$precinct_no = $_POST['precinct_no'];
$contact_number = $_POST['contact_number'];
$middle_name = $_POST['middle_name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$voters_status = $_POST['voters_status'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO residentsinfo (
    last_name, place_of_birth, address, house_no, purok, occupation, 
    first_name, age, civil_status, citizenship, precinct_no, 
    contact_number, middle_name, birthday, gender, voters_status, email
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        $last_name, $place_of_birth, $address, $house_no, $purok, $occupation,
        $first_name, $age, $civil_status, $citizenship, $precinct_no,
        $contact_number, $middle_name, $birthday, $gender, $voters_status, $email
    ]);
    echo "<script>alert('Resident data saved successfully!'); window.location.href='Resident.html';</script>";
} catch (Exception $e) {
    echo "<script>alert('Failed to save resident data: " . $e->getMessage() . "'); window.history.back();</script>";
}
?>
