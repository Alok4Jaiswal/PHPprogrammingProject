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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
</head>
<body>
  <?php require_once('includes/header.php'); ?>

  <main>
    <section class="hero">
      <h1>Welcome to the Cricket Player Management System</h1>

      <?php if (!empty($_SESSION['username'])): ?>
        <p>Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong> | 
        <a href="logout.php">Logout</a></p>
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

  <?php require_once('includes/footer.php'); ?>
</body>
</html>
