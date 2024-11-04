<div class="jumbotron">
			<h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
			</div class="row">
            <form method = "post" action = "begin.php?page=confirm">
        <div class="row">
                <label for="naam">Naam:</label><br>
                    <input type="text" id="naam" name="naam" required>
                <br>
            <label for="adres">adres</label><br>
                    <input type="text" id="adres" name="adres" required>
                 <br>
            <label for="postcode">Postcode:</label><br>
                    <input type="text" id="postcode" name="postcode" required>
                <br>
            <label for="gemeente">Gemeente:</label><br>
                    <input type="text" id="gemeente" name="gemeente" required>
                <br>
            <label for="telefoonnummer">Telefoonnummer:</label><br>
                    <input type="text" id="telefoonnummer" name="telefoonnummer" required>
                <br>
            <label for="e-mailadres">E-mailadres:</label><br>
                    <input type="text" id="e-mailadres" name="e-mailadres" required>
                <br>
            <label for="geboortedatum">Geboortedatum</label><br>
                    <input type="date" id="geboortedatum" name="geboortedatum" required>
        </div>
        <div class="right">
                <br>
            <label for="fotoTitel">Titel van je foto:</label><br>
                    <input type="text" id="fotoTitel" name="fotoTitel" required>
                <br>
            <label for="camera">Camera:</label><br>
                    <input type="text" id="camera" name="camera" required>
                <br>
            <label for="lens">Lens:</label><br>
                    <input type="text" id="lens" name="lens" required>
                <br>
            <label for="fotoBeschrijving">Beschrijf je foto:</label><br>
                    <input type="textarea" id="fotoBeschrijving" name="fotoBeschrijving" rows="4" cols="25" required>
                    <input type="submit" id="deelnemen" value="deelnemen">
        </div>
    </form>
</div>

		</div>