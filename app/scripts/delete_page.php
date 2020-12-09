<?php
if (session_status() == PHP_SESSION_NONE)
session_start();

require_once '../config/defines.php';
require_once '../model/db.php';

$id = $_POST['id'];

// ogólnie to jest tak, że nie możesz bezpośrednio wejść pod adres pliku przez htaccess chyba i dlatego nie działa przez get, zrobimy to inaczej
// zrobimy to jeszcze inaczej, bo kurwa problem jest taki, że to nie działa przez routing -> każdy wywoływany link w pasku przeglądarki leci przez index.php - zeby to działało trzeba by było przebudowywać contoller, ale szkoda na to czasu, ważne zeby działało xd czyli w view zrobimy script
global $pdo;

$stmt = $pdo->prepare('DELETE FROM page WHERE id = ?');
$stmt->execute([$id]);

//header('Location:  ../admin/page.php?submit=success'); 