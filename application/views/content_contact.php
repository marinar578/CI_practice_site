<!-- <div id="content">
	<? // php echo heading("Contact Page", 1 /*header size*/, "class=className" /*optional attribute like class or id*/);?>
	
	<p>Contact me!</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div> -->


<div id="contact">
	<?php 

		$this -> load -> helper("form");
		echo form_open("site/send_email"/*location for where this form will be sending*/);

			echo form_label("Name: ", "fullName");
			$data = array(
				"name" => "fullName";
				"id" => "fullName";
				"value" => ""
			);
			echo form_input($data);

			echo form_label("Email: ", "email");
			$data = array(
				"name" => "email";
				"id" => "email";
				"value" => ""
			);
			echo form_input($data);

			echo form_textarea("Message: ", "message");
			$data = array(
				"name" => "message";
				"id" => "message";
				"value" => ""
			);
			echo form_input($data);

			echo form_submit("contactSumit", "Send!");

		echo form_close();

	?>
	
</div>