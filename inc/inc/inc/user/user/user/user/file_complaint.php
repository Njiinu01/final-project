<?php
require_once __DIR__ . '/../inc/db.php';
require_once __DIR__ . '/../inc/header.php';
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$title = trim($_POST['title']);
$type = trim($_POST['type']);
$description = trim($_POST['description']);
$stmt = $pdo->prepare('INSERT INTO complaints (user_id,
