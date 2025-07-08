<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cricket Player Management System</title>
  <link rel="stylesheet" href="assets/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <?php include('includes/header.php'); ?>

  <main>
    <section class="hero">
      <h1>Welcome to the Cricket Player Management System</h1>
      <?php if (isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> | <a href="logout.php">Logout</a></p>
      <?php else: ?>
        <p><a href="login.php">Login</a> or <a href="register.php">Register</a></p>
      <?php endif; ?>
    </section>

    <section class="grid">
      <a href="players.php" class="card">Manage Players</a>
      <a href="matches.php" class="card">Manage Matches</a>
      <a href="search.php" class="card">Search Records</a>
    </section>
  </main>

  <?php include('includes/footer.php'); ?>
</body>
</html>
