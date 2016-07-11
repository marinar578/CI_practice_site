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

		// the $message var comes from $data from the else part of the if/else statement in the send_email function:
		if (isset($message)) {echo $message;}

		// if you load the validation library in controller, you can use all the functions of the library in this view. This will display errors if the user tries to submit the form without entering the required fields
		echo validation_errors();

		echo form_open("site/send_email"); /*location for where this form will be sending*/


			echo form_label("Name: ", "fullName");
			// $data here is an array with attributes of the input:
			$data = array(
				"name" => "fullName",
				"id" => "fullName",
				"value" => set_value("fullName") // repopulates field with value typed by user (useful if they get an error)
			);
			echo form_input($data);

			echo form_label("Email: ", "email");
			$data = array(
				"name" => "email",
				"id" => "email",
				"value" => set_value("email")
			);
			echo form_input($data);

			echo form_label("Message: ", "message");
			$data = array(
				"name" => "message",
				"id" => "message",
				"value" => set_value("message")
			);
			echo form_textarea($data);

			echo form_submit("contactSubmit", "Send!");

		echo form_close();

	?>
	
</div>