<!-- index.php -->
<h1>Je te test!</h1>
<h4>Tentative de connexion MYSQL depuis PHP...</h4>
<?php
$host = 'mysql';
$user = $_ENV["DB_USER"];
$pass = $_ENV["DB_PASSWD"];
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
echo "Connexion réussie à MySQL!";
?>
