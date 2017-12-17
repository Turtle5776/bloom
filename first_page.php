<!DOCTYPE html>
<html>

<head>
	<title>First Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
	<script type="text/javascript" src="family.js?<?php echo time() ?>"></script>
    <script> 

    var effiong = prompt("Are you a member of the Effiong's royal family? ");

 if (effiong == "Yes") {
	window.alert("You are granted access in to view the lovely pics.");
} else if (effiong == "No") {
	window.("C'mon get out of here.");
}


</script>

<script>
 var length = prompt("Length: ");
 var width = prompt("Width: ");

var perimeter = 2(length + width);

var area = length * width;

window.alert("Perimeter: " + length);
window.alert("Area: " + area);


</script>
	<link href="family.css?<?php echo time() ?>" type="text/css" rel="stylesheet" />
    
</head>

<body bgcolor="yellow">
<header id="big_wrapper">
	THE EFFIONG'S ALBUM
</header>

<figure>
<img src = "1st_fam.jpg" height="200px" width="300px" />
<img src = "2nd_fam.jpg" height="200px" width="300px" />
<img src = "3rd_fam.jpg" height="200px" width="300px" />
<img src = "4th_fam.jpg" height="200px" width="300px" />
<img src = "5th_fam.jpg" height="200px" width="300px" />
<img src = "6th_fam.jpg" height="200px" width="300px" />
<img src = "7th_fam.jpg" height="200px" width="300px" />
<img src = "8th_fam.jpg" height="200px" width="300px" />
<img src = "9th_fam.jpg" height="200px" width="300px" />
<img src = "10th_fam.jpg" height = "200px" width = "300px" />
<img src = "11th_fam.jpg" height = "200px" width = "300px" />
<marquee>
<p id="flow_text">
	Which day was this?
</p>
</marquee>
</figure>
<figure>
	<img src = "beulah.jpg" width = "200px" height = "300px" />
	<p>
		Beulah looking special on thanksgiving.
	</p>
</figure>
<figure>
	<img src = "mom (2).jpg" width = "200px" height = "300px" />
	<p>
		Mom looking special on thanksgiving.
	</p>
</figure>

<?php $link_name = "Second Page"; ?>
<?php $id  = 2; ?>

<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
 
</body>
</html>