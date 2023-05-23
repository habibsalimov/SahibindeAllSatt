<?php
$servername = "localhost"; 
$username = "id20801353_root"; 
$password = "Habib2002."; 
$dbname = "id20801353_ikinci_el_ilan"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo ("baglanti basarisiz");
}
?>
