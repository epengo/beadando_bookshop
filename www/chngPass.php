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
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Change Password</h1>
							<div class="entry" style="height:auto">
								<?php
						error_reporting(1);
						$id=$_SESSION['unm'];
						$op=$_GET['op'];
						$np=$_GET['np'];
						if(isset($_GET['chngP']))
						{
							if($op=="" || $np=="")
							{
							$err="Fill all the fields first";
							}
							else
							{
								if($np==$op)
								{
								$sql="update user set u_pwd='$np' where u_unm='$id'";
								$d=mysqli_query($conn, $sql);
								echo "<p>pass updated..</p>";
								}	
								else
								{
								echo "<p>new pass doesn't match to confirm pass";
								}
							}
								
								
						}
						?>

						<form method="get">
						<table width="365" border="1">
						  <tr>
						  <?php echo $err; ?>
						    <th width="173" scope="row">New Pass </th>
						    <td width="176">
								<input type="password" name="op"/>
							</td>
						  </tr>
						  <tr>
						    <th scope="row">Confirm Password </th>
						    <td>
									<input type="password" name="np"/>
							</td>
						  </tr>
						<tr>
						    <td colspan="2" align="center">
							<input type="submit" name="chngP" value="Change Password"/></td>
						  </tr>
						  
						</table>
						</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>

