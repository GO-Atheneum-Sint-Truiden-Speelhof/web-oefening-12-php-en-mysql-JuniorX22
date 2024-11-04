<?php

   include("scripts/functions.php");

    $bericht = "NAAM: ".$_POST["naam"]."<br>
    ADRES: ".$_POST["adres"]."<br>
    POSTCODE: ".$_POST["postcode"]."<br>
    GEMEENTE: ".$_POST["gemeente"]."<br>
    TELEFOONNUMMER: ".$_POST["telefoonnummer"]."<br>
    E-MAILADRES: ".$_POST["e-mailadres"]."<br>
    GEBOORTEDATUM: ".$_POST["geboortedatum"]."<br>
    TITEL FOTO: ".$_POST["fotoTitel"]."<br>
    CAMERA: ".$_POST["camera"]."<br>
    LENS: ".$_POST["lens"]."<br>
    BESCHRIJVING FOTO: ".$_POST["fotoBeschrijving"]."<br>";

    $verzender = "FROM: Junior Ooms <test@localhost>";

    if (mail("test@localhost", "Deelname Wedstrijd", $bericht, $verzender)){
        echo "BERICHT VERZONDEN";
        SaveToDb();



        
    }
    else{
        echo "BERICHT NIET VERZONDEN";
    }
?>
    <?php
        echo '<p>Naam '.$_POST["naam"].'</p>';
        echo '<p>Adres '.$_POST["adres"].'</p>';
        echo '<p>Postcode '.$_POST["postcode"].'</p>';
        echo '<p>Gemeente '.$_POST["gemeente"].'</p>';
        echo '<p>Telefoonnummer '.$_POST["telefoonnummer"].'</p>';
        echo '<p>E-mailadres '.$_POST["e-mailadres"].'</p>';
        echo '<p>Geboortedatum '.$_POST["geboortedatum"].'</p>';
        echo '<p>FotoTitel '.$_POST["fotoTitel"].'</p>';
        echo '<p>Camera '.$_POST["camera"].'</p>';
        echo '<p>Lens '.$_POST["lens"].'</p>';
        echo '<p>Fotobeschrijving '.$_POST["fotoBeschrijving"].'</p>';
        ?>
    </div>   
</div>
       