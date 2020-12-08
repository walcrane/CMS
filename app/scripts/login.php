<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

require_once '../config/defines.php';
require_once '../model/db.php';

// sprawdzam czy wywołanie tego skryptu następuje poprzez formularz, jeśli nie (np. poprzez wpisanie tego adresu z ręki)
// użytkownik zostaje przeniesiony na stronę logowania
if (!isset($_POST['submit']))
{
    header('HTTP/1.0 403 Forbidden');
    header('Location: '. HOST .'admin/zaloguj');
    exit;
}

$login = $_POST['login'];
$pass = $_POST['password'];

global $pdo;

$stmt = $pdo->prepare('SELECT usersName, usersPassword FROM users WHERE usersName = :usersName');
$stmt->bindValue(':usersName', $login, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) // jeżeli istnieje taki login w bazie
{
    $result = $stmt->fetch();

    if (password_verify($pass, $result['usersPassword'])) // prawidłowe hasło
    {
        $_SESSION['is_logged_in'] = true;
        unset($_SESSION['login_message']); // uswam komunikat o błędnych danych
        header('Location: ' . HOST . 'admin');
    }
    else // hasło nieprawidłowe
    {
        $_SESSION['is_logged_in'] = false;
        $_SESSION['login_message'] = 'Nieprawdiłowy login lub hasło';
        header('Location: ' . HOST . 'admin/zaloguj');
    }
}
else //jeżeli nie istnieje taki login w bazie
{
    $_SESSION['is_logged_in'] = false;
    $_SESSION['login_message'] = 'Nieprawdiłowy login lub hasło';
    header('Location: ' . HOST . 'admin/zaloguj');
}
