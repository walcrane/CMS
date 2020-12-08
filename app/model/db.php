<?php 

global $pdo;

$db_host = 'localhost';
$db_name = 'cms';
$db_user = 'root';
$db_pass = '';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

function get_page($uri)
{
    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM page WHERE uri = :uri');
    $stmt->bindValue(':uri', $uri, PDO::PARAM_STR);

    $stmt->execute();

    if ($stmt->rowCount() > 0)
        return $stmt->fetch();
    else 
    {
        http_response_code(404);
        echo '404'; die;
    }
}

function get_pages()
{
    global $pdo;

    $stmt = $pdo->query('SELECT id, name FROM page');

    if ($stmt->rowCount() > 0)
        return $stmt->fetchAll();
    else 
    {
        return null;
    }
}