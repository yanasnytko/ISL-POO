<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "poo_php";

// Create connection​

$conn = new mysqli($servername, $username, $password, $db);

// Check connection​
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Create QUERY​

$sql = "SELECT id,marque,modele,nbPortes,vitesse FROM vehicules";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Marque</th><th>Modele</th><th>Nb Portes</th><th>Vitesse</th></tr>";

  // output data of each row​
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["marque"]."</td><td>".$row["modele"]."</td><td>".$row["nbPortes"]."</td><td>".$row["vitesse"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close connection​
$conn->close();
