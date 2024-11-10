<?php include("scripts/functions.php"); ?>
<div class="jumbotron">
    <h1 class="display-4">Login pagina</h1>
</div>
<div class="left">
<div class="table-responsive-lg">
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Naam</th>
                <th>Adres</th>
                <th>Postcode</th>
                <th>Gemeente</th>
                <th>Telefoonnummer</th>
                <th>E-mailadres</th>
                <th>Geboortedatum</th>
                <th>Titel van je foto</th>
                <th>Camera</th>
                <th>Lens</th>
                <th>fotoBeschrijving</th>
            </tr> 
        </thead>
        <tbody>
            <?php   
             geefInsch();
            ?>        
        </tbody>
    </table>
    </div>
</div>