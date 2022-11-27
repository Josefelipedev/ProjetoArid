<?php  //127.0.0.1
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'main_users');

try{
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASS);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}