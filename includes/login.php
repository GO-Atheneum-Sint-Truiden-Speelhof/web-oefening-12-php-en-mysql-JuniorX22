<?php include("scripts/functions.php");

if(isset($_POST['Username']) && !empty($_POST['Username'])){
    login();
} else {
?>
<div class="jumbotron">
    <h1 class="display-4">Login pagina</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <form action= "begin.php?page=login" method = "POST">
            <div class="form-group row">
                <div class="col">
                    <label for="Username">Username:</label><br>
                    <p><input type="text" id="Username" class="form-control" name="Username"></p>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col">
                    <label for="Password">Password:</label><br>
                    <p><input type="password" id="Password" class="form-control" name="Password"></p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <button type="submit" id="loginButton">Login</button>                   
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>