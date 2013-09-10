<?php
function logo($logo_name,$alt)
{
	echo "<img src='images/".$logo_name."' class = 'logo' alt='".$alt."'/>";
}
$version=0.4;
$welcome="Welcome to Banoffee v".$version;

?>

<html>
<link href="stylesheets/main.css" rel="stylesheet" type="text/css">

<div class = "header area">
	<div class = "boxer padded area"><!--Keeps box central-->
		<div class = "logo_container"><?php logo("logo2.png","What does this image have to do with banoffee???")?></div><!--Define the logo location in sass/project/page_setup.scss-->
		<h1><?php echo $welcome?></h1>
	</div>
</div>

<div class = "hero area">
	<div class = "boxer area">
		<div class = "round inner_box area">
			<div class = "button"><p>Home</p></div>
			<div class = "button"><p><a href="https://github.com/chrisguiblin/banoffee">Download</a></p></div>
			<div class = "button"><p><a href="updates.html">Updates</a></p></div>
		</div>
		<h1>This is an example banoffee hero unit</h1>
		<h2>Banoffee is yummy</h2>
		<p>Nom nom nom</p>
		<p>Download Banoffee from <a href="https://github.com/chrisguiblin/banoffee">GitHub</a></p>
	</div>
</div>

<div class = "footer area">
	<div class = "boxer area"><p>&copy; CJG Design 2013</p></div>
</div>

</html>

