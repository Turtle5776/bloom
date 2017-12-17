<?php

if( $_REQUEST["Site"] )
{
	$Site = $_REQUEST["Site"];
	header( "Site:$Site");
	exit();
}



if( $_REQUEST["name"] || $_REQUEST["age"] )
{
	echo "Welcome ". $_REQUEST['name']. "<br />";
	echo "You are ". $_REQUEST['age']. " years old.";

	exit();
}

?>
<html>
<body>
<p>Choose a site to visit :</p>
<form action="<?php $_PHP_SELF ?>" method="POST">
<select name="Site">
   <option value="www.codecademy.org">
       Daniel's Consortium
   </option>
   <option value="www.youtube.com">
       Daniel's Special
   </option>
 </select>
 <input type="submit" /> 
 </form>      
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>
<video  width="300px" height="300px" controls controlsList="download" loop="loop"  poster="images (38).jpg"> <source type="video/mp4" src="AS.mp4">

</video>
</body>
</html>

