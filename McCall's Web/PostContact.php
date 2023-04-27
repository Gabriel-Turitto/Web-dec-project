<!DOCTYPE html>
<html lang="en">

<head>
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<meta charset="utf-8">
        <link rel="stylesheet" href="css/McC.css">
        <nav>
                <div>
                    <a href="Aboutme.html">What We're About</a>
                    <a href="Menu.html">Menu</a>
                    <a href="Catering.html">Catering</a>
                    <a href="contact.php?submit=true">Online Order</a>
                    <a href="manage.html">Management</a>
        
                </div>
            </nav>	
		<style type="text/css">
		
		body {
			font-family: 'Raleway', sans-serif;
		}
		form {
			width: 600px;
			margin: 0 auto;
			background-color: white;
			padding: 5px;
			padding-top: 20px;
		}

		label, p {
			padding-left: 15px;
		}

		img.fixedPos {
			display: block;
			position: fixed;
			right: 150px;
			top: 50px;
			border: 3px white solid;
			box-shadow: 10px 10px 5px rgba(125,125,125,.8);
			
		}
		
		td {
			padding: 4px;
			vertical-align: top;
		}
			
		</style>
	</head>
	<body>
		<div class="wrapper">
		<section style="width:650px; margin:50px auto;">
				<h1>Got it!</h1>
				<hr />
				<p> 
					Thanks for your input, <?php if(isset($_POST['firstname'])){echo ($_POST['firstname']);} ?>!
				</p>
				<p>
					You entered:
				</p>
				<table style="width:600px; margin:0 auto; border:1px solid #00A;">
					<col style="width:75px;" />
					<col style="width: 325px;" />
					<tr>
						<td>First name: </td><td><span style="color:red;"><?php if(isset($_POST['firstname'])){echo ($_POST['firstname']);} ?></span></td>	
					</tr>
					<tr>
						<td>Last name: </td><td><span style="color:red;"><?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?></span></td>
					</tr>
					<tr>
						<td>Email: </td><td><span style="color:red;"><?php if(isset($_POST['email'])){echo $_POST['email'];} ?> </span></td>
					</tr>
					<tr>
						<td>Telephone: </td><td><span style="color:red;"><?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?> </span></td>
					</tr>
					<tr>
						<td>Comments:</td><td><span style="color:red;"><?php if(isset($_POST['comments'])){echo $_POST['comments'];} ?> </span></td>
					</tr>
					
				</table>				<br /><br /><br />				
				<p style="width: 150px; margin:0 auto;">
					<?php echo "<a style='text-decoration:none;' href='javascript:history.go(-1)'>&lArr; GO BACK</a>"; ?>	
				</p>
			 </form>
		</section>
	</body>
	<footer>
        <h1>Contact</h1>
        <p>Phone: 423-777-0022</p>
        <a href="https://www.instagram.com/spoonfulosugarr/"><img src="Images/insta2.jpg" alt="Instagram"></a>
    </footer>
</html>