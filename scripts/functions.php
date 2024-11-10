<?php
function SaveToDb(){

    $conn = connectToDB();    
    $sql = "INSERT INTO info(Naam, Adress, Postcode, Gemeente, Telefoon, `E-Mail`, Geboorte, Foto, Camera, Lens, Beschrijving)
    VALUES ('".$_POST["naam"]."','".$_POST["adres"]."','".$_POST["postcode"]."','".$_POST["gemeente"]."','".$_POST["telefoonnummer"]."','".$_POST["e-mailadres"]."','".$_POST["geboortedatum"]."','".$_POST["fotoTitel"]."','".$_POST["camera"]."','".$_POST["lens"]."','".$_POST["fotoBeschrijving"]."');";

    if($conn->query($sql) === true){
        echo "New record created!";
    }
    else{
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function geefInsch(){
    $conn = connectToDB();
    $sql = "SELECT *FROM info";



    $result = $conn->query($sql);
    while($row = $result->fetch_row()) {
        echo '<tr>';
        for($i=0;$i<count($row);$i++){
            echo "<td>";
            echo "$row[$i]";    
            echo"</td>";
        }       
        echo"</tr>";
    }
}

function connectToDB(){
    $servername = "localhost";
    $username = "test";
    $password = "test";
    $dbname = "test";

    $conn  = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
    
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function login(){
    $conn = connectToDB();
    $User = $_POST['Username'];
    $psw = $_POST['Password'];

    $sql = "SELECT * FROM login WHERE Username ='$User' AND Password ='$psw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<p>Login succes </p>";
        header("refresh: 2 ; URL = begin.php?page=inschrijving");

    }
    $conn->close();
}

        ?>