<!doctype html>
<html lang=nl>

<?php  include('<includes/head.php') ?>

<body>
	<div class="container">

		<?php 	
			include('<includes/menu.php');  
			if(!isset($_GET['page'])){
				include("includes/start.php");
			}else{
				$Link = "includes/".$_GET['page'].".php";
			include($Link);
			}
			include('<includes/footer.php')  
			?>
	</div>
</body>

</html>