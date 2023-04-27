<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<script type="text/javascript">
		var images = ["image1.jpg", "image2.jpg", "image3.jpg", "image7.jpg"]; 
		var currentIndex = 0; 
		
		function changeImage() {
		    var header = document.getElementById("header"); // gets the header elements
		    header.style.backgroundImage = "url('images/" + images[currentIndex] + "')"; // sets up the background image
		    currentIndex++; 
		    if (currentIndex >= images.length) {
		        currentIndex = 0;
		    }
		    setTimeout(changeImage, 6000); //after 6 seconds
		}
	</script>
</head>
<body onload="changeImage()">
	<header id="header"></header>
</body>
</html>