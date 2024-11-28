<?html
// Example for getting all residents from the database
require '../html/database.html';

$sql = "SELECT * FROM residentsinfo";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$residents = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(['success' => true, 'residents' => $residents]);
?>
