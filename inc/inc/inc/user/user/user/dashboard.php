<?php
require_once __DIR__ . '/../inc/db.php';
require_once __DIR__ . '/../inc/header.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
?>
<h3>Welcome, <?php echo htmlentities($_SESSION['user_name']); ?></h3>
<p>
<a class="btn btn-success" href="file_complaint.php">File New Complaint</a>
<a class="btn btn-secondary" href="history.php">My Complaints</a>
<a class="btn btn-danger" href="logout.php">Logout</a>
</p>
<?php require_once __DIR__ . '/../inc/footer.php'; ?>
