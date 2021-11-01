<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
   <title>Thank You for Connecting</title>
</head>

<body>
   <?php

   // Create PHP variables and assign incoming POST variables to PHP variables (left to right assignment)
   $fullname = $_POST['fullname'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $major = $_POST['major'];
   $degree = $_POST['degree'];

   // Create an HTML page "on the fly"

	echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Thank You for Joining our Mailing List</title></head><body>";
	echo "<h3>Thank you for Joining Our Mailing List!</h3>";
	echo "<p>This is the information you entered:</p>";
	echo "<table>";
	echo "<tr><td>Name:  </td><td> $name  </td></tr>";
	echo "<tr><td>tel:   </td><td> $tel       </td></tr>";
	echo "<tr><td>Email: </td><td> $email     </td></tr>";
	echo "<tr><td>date: </td><td> $date     </td></tr>";
	echo "<tr><td>age:</td><td> $age    </td></tr>";
	echo "</table>";
	echo "</body></html>";

   ?>

</body>
</html>
