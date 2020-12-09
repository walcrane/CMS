<?php
if (session_status() == PHP_SESSION_NONE)
session_start();

require_once '../config/defines.php';
require_once '../model/db.php';

$site_name = $_POST['site_name'];
$editor = $_POST['editor'];
$seo_title = $_POST['seo_title'];
$seo_desc = $_POST['seo_desc'];
$seo_robots = $_POST['seo_robots'];

global $pdo;

$pdo->prepare('INSERT INTO page (name, content, seo_title, seo_desc, seo_robots) VALUES ($site_name, $editor, $seo_title, $seo_desc, $seo_robots)');
$stmt->execute([$site_name, $editor, $seo_title, $seo_desc, $seo_robots]);

header('Location:  ../admin/page.php?submit=success');