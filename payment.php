<?html
// Include the database connection
include '../html/database.html';

try {
    // Get POST data
    $resident_id = $_POST['id'] ?? null;
    $amount = $_POST['amount'] ?? null;
    $date_issued = $_POST['dateIssued'] ?? null;
    $payment_details = $_POST['paymentDetails'] ?? null;

    // Debugging: Log or output the received data
    // Uncomment the following line for debugging in a development environment
    // echo json_encode(['debug_data' => $_POST]); exit;

    // Validate input
    if (!$resident_id || !$amount || !$date_issued) {
        echo json_encode(['message' => 'All fields are required.']);
        exit;
    }

    // Prepare SQL statement
    $stmt = $pdo->prepare("
        INSERT INTO revenue (resident_id, amount, date_issued, payment_details)
        VALUES (:resident_id, :amount, :date_issued, :payment_details)
    ");
    $stmt->bindParam(':resident_id', $resident_id, PDO::PARAM_INT);
    $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
    $stmt->bindParam(':date_issued', $date_issued, PDO::PARAM_STR);
    $stmt->bindParam(':payment_details', $payment_details, PDO::PARAM_STR);

    // Execute the query
    if ($stmt->execute()) {
        echo json_encode(['message' => 'Payment saved successfully!']);
    } else {
        echo json_encode(['message' => 'Failed to save payment.']);
    }
} catch (Exception $e) {
    echo json_encode(['message' => 'Error: ' . $e->getMessage()]);
}
