<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>
<form method="post" action="begin.php?page=confirm">
    <div class="row">
        <div class="col tegel">
            <div class="form-group row">
                <div class="col">
                    <label for="naam">Naam:</label><br>
                    <p><input type="text" id="naam" class="form-control"name="naam"></p>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col">
                    <label for="adres">Adres:</label><br>
                    <p><input type="text" id="adres" class="form-control"name="adres"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="postcode">Postcode:</label><br>
                    <p><input type="number" id="postcode" class="form-control"name="postcode"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="gemeente">Gemeente:</label><br>
                    <p><input type="text" id="gemeente" class="form-control" name="gemeente"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="telefoonnummer">Telefoonnummer:</label><br>
                    <p><input type="text" id="telefoonnummer" class="form-control" name="telefoonnummer"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="e-mailadres">E-mailadres:</label><br>
                    <p><input type="text" id="e-mailadres" class="form-control" name="e-mailadres"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="geboortedatum">Geboortedatum</label><br>
                    <p><input type="date" id="geboortedatum" name="geboortedatum"></p>
                </div>
            </div>
        </div>
        <div class="col tegel">
            <div class="form-group row">
                <div class="col">
                    <label for="fotoTitel">Titel van je foto:</label><br>
                    <p><input type="text" id="fotoTitel" class="form-control" name="fotoTitel"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="camera">Camera:</label><br>
                    <p><input type="text" id="camera" class="form-control" name="camera"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="lens">Lens:</label><br>
                    <p><input type="text" id="lens" class="form-control" name="lens"></p>
                </div>
            </div>    
            <div class="form-group row">
                <div class="col">
                    <label for="fotoBeschrijving">Beschrijf je foto:</label><br>
                    <p><textarea id="fotoBeschrijving" class="form-control" name="fotoBeschrijving" rows="10" ></textarea></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <input type="submit" id="deelnemenKnop" value="deelnemen">
                </div>
            </div>
        </div>
    </div>
</form>