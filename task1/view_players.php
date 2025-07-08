<?php
require_once('db.php');
$sql = "SELECT * FROM cricket_players";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cricket Players</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
    }
    h1 {
      color: #007BFF;
    }
    table {
      border-collapse: collapse;
      width: 80%;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>

<h1>Cricket Players</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Role</th>
    <th>Team</th>
    <th>Age</th>
  </tr>

  <?php
  if ($result->num_rows > 0):
      while ($row = $result->fetch_assoc()):
  ?>
      <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['role']) ?></td>
        <td><?= htmlspecialchars($row['team']) ?></td>
        <td><?= htmlspecialchars($row['age']) ?></td>
      </tr>
  <?php
      endwhile;
  else:
  ?>
      <tr>
        <td colspan="5">No players found.</td>
      </tr>
  <?php endif; ?>

</table>

</body>
</html>

<?php
$conn->close();
?>
