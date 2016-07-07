<!-- <div id="content">
	<?//php echo heading("About Page", 1, "class=className");?>
	<p>Check out my awesome business</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div> -->


<div id="content">
	<?php echo heading("About Page", 1 /*header size*/, "class=className" /*optional attribute like class or id*/);?>
	
	<?php 
		foreach($results as $row){
			$title = $row -> title;
			$text1 = $row -> text1;
			$text2 = $row -> text2;
		}

		echo heading($title, 1);
	?>

	<p><?php echo $text1; ?></p>
	<p><?php echo $text2; ?></p>
	
</div>