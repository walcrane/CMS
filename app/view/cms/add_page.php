<?php
include_once '../model/db.php';

$name = $_POST['name'];
$content = $_POST['content'];
$seo_title = $_POST['seo_title'];
$seo_desc = $_POST['seo_desc'];
$seo_robots = $_POST['seo_robots'];

$stmt = "INSERT INTO page (name, content, seo_title, seo_desc, seo_robots) VALUES ($name, $content, $seo_title, $seo_desc, $seo_robots);";
$result = mysqli_query($conn, $stmt);

header('Location:  ../admin/page.php?submit=success');