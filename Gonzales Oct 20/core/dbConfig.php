<!-- Database Configuration Code -->
<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "CRUD";
$dsn = "mysql:host={$host};CRUD={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>