if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Cyber Crime Reporting</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/online_cybercrime/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
<div class="container-fluid">
<a class="navbar-brand" href="/online_cybercrime/">CyberCrimeReport</a>
<div class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="/online_cybercrime/user/login.php">User Login</a></li>
<li class="nav-item"><a class="nav-link" href="/online_cybercrime/admin/login.php">Admin</a></li>
<li class="nav-item"><a class="nav-link" href="/online_cybercrime/officer/login.php">Officer</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
