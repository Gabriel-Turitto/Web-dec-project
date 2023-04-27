<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <meta charset="utf-8">
	    <title></title>
	    <link rel="icon" href="">
	    <link rel='stylesheet' href='css/McC.css'>
		<!--
			Author:			
			Class:			CSCI 1710
			Date:			11/22/2015
			Assignment:		
			Purpose:		A little more PHP
		-->
            <nav>
                <div>
                    <a href="Aboutme.html">What We're About</a>
                    <a href="Menu.html">Menu</a>
                    <a href="Catering.html">Catering</a>
                    <a href="contact.php?submit=true">Online Order</a>
                    <a href="manage.html">Management</a>
        
                </div>
            </nav>	
    </head>
    
    <body>
        <div class="wrapper">
            <section>
              <h1>Order</h1>
              <form class="order-form" action="PostContact.php" method="post">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
          
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
          
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
          
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Telephone" required>
          
                <label for="comments">Desired Description:</label>
                <textarea id="comments" name="comments" rows="10" cols="30" placeholder="Please add your comments"></textarea>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
              </form>
            </section>
            <footer>
                <h1>Contact</h1>
                <p>Phone: 423-777-0022</p>
                <a href="https://www.instagram.com/spoonfulosugarr/"><img class="Q"src="Images/insta2.jpg" alt="Instagram"></a>
            </footer>
          </div>
    </body>
</html>