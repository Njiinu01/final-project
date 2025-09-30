<?php
require_once __DIR__ . '/../inc/db.php';
require_once __DIR__ . '/../inc/header.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = trim($_POST['email']);
$password = $_POST['password'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch();
if ($user && password_verify($password, $user['password'])) {
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['fullname'];
header('Location: dashboard.php'); exit;
} else {
echo '<div class="alert alert-danger">Invalid credentials</div>';
}
}
?>
<h3>User Login</h3>
<form method="post">
<div class="mb-3"><label>Email</label><input class="form-control" name="email" type="email" required></div>
<div class="mb-3"><label>Password</label><input class="form-control" name="password" type="password" required></div>
<button class="btn btn-primary">Login</button>
</form>
<?php require_once __DIR__ . '/../inc/footer.php'; ?>
