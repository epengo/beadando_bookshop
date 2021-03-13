<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Congratulations!</font>
<div class="container">			
<?php
									$tot = 0;
									if(isset($_SESSION['cart']))
									{
									
									foreach($_SESSION['cart'] as $id=>$x)
									{	
										$tot = $tot + ($x['qty']*$x['rate']);
									}
									}
									echo '<h3 style="margin-left:260px">Books ordered for: '.$tot.' money</h3>'
?>
</div>