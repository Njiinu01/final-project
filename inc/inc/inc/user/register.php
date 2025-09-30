<?php
require_once __DIR__ . '/../inc/db.php';
require_once __DIR__ . '/../inc/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = $_POST['password'];
$pass_hash = password_hash($password, PASSWORD_DEFAULT);


$stmt = $pdo->prepare('INSERT INTO users (fullname, email, password, phone) VALUES (?, ?, ?, ?)');
try {
$stmt->execute([$fullname, $email, $pass_hash, $phone]);
echo '<div class="alert alert-success">Registration successful. <a href="login.php">Login</a></div>';
} catch (PDOException $e) {
echo '<div class="alert alert-danger">Error: ' . htmlentities($e->getMessage()) . '</div>';
}
}
?>
<h3>Register</h3>
<form method="post">
<div class="mb-3"><label>Fullname</label><input class="form-control" name="fullname" required></div>
<div class="mb-3"><label>Email</label><input class="form-control" name="email" type="email" required></div>
<div class="mb-3"><label>Phone</label><input class="form-control" name="phone"></div>
<div class="mb-3"><label>Password</label><input class="form-control" name="password" type="password" required></div>
<button class="btn btn-primary">Register</button>
</form>
<?php require_once __DIR__ . '/../inc/footer.php'; ?>
