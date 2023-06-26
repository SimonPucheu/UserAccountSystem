<?php
$dsn      = 'mysql:dbname=oauth;host=localhost';
$username = 'root';
$password = '';

require_once('OAuth2/Autoloader.php');
OAuth2\Autoloader::register();

$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));
$server = new OAuth2\Server($storage);
$server -> addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
$server -> addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
?>