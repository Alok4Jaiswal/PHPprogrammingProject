<?php
require_once('../db.php');
$term = $_GET['term'] ?? '';
$sql = "SELECT name FROM cricket_players WHERE name LIKE ? LIMIT 10";
$stmt = $conn->prepare($sql);
$term = "%$term%";
$stmt->bind_param("s", $term);
$stmt->execute();
$result = $stmt->get_result();
$suggestions = [];
while ($row = $result->fetch_assoc()) {
    $suggestions[] = $row['name'];
}
header('Content-Type: application/json');
echo json_encode($suggestions);
?>