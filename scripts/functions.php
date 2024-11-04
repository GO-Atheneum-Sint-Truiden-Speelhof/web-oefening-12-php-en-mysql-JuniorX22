<?php
function SaveToDb()
{
    $servername = "localhost";
    $username = "test";
    $password = "test";
    $dbname = "test";

    $conn  = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO info(Naam, Adress, Postcode, Gemeente, Telefoon, `E-Mail`, Geboorte, Foto, Camera, Lens, Beschrijving)
    VALUES ('".$_POST["naam"]."','".$_POST["adres"]."','".$_POST["postcode"]."','".$_POST["gemeente"]."','".$_POST["telefoonnummer"]."','".$_POST["e-mailadres"]."','".$_POST["geboortedatum"]."','".$_POST["fotoTitel"]."','".$_POST["camera"]."','".$_POST["lens"]."','".$_POST["fotoBeschrijving"]."');";
    echo $sql;
    if ($conn->query($sql) == true) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " .$sql . "<br>" .$conn->error;
    }
}
        ?>