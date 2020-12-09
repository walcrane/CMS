<?php
if (session_status() == PHP_SESSION_NONE)
session_start();

require_once '../config/defines.php';
require_once '../model/db.php';

$site_name = $_POST['site_name'];
$site_url = $_POST['site_url'];
$editor = $_POST['editor'];
$seo_title = $_POST['seo_title'];
$seo_desc = $_POST['seo_desc'];
$seo_robots = $_POST['seo_robots'];

global $pdo;

$stmt = $pdo->prepare('INSERT INTO page (name, uri, content, seo_title, seo_desc, seo_robots) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->execute([$site_name, $site_url, $editor, $seo_title, $seo_desc, $seo_robots]);

header('Location:  ../admin/page.php?submit=success');