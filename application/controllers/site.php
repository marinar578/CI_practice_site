<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this -> home();
	}

	public function home(){
		$this -> load -> model("model_get");
		$data['results'] = $this -> model_get -> getData("home");

		$this -> load -> view("site_header");
		$this -> load -> view("site_nav");
		$this -> load -> view("content_home", $data);
		$this -> load -> view("site_footer");
	}

	public function about(){
		$this -> load -> model("model_get");
		$data['results'] = $this -> model_get -> getData("about");

		$this -> load -> view("site_header");
		$this -> load -> view("site_nav");
		$this -> load -> view("content_about", $data);
		$this -> load -> view("site_footer");
	}

	public function contact(){
		$this -> load -> view("site_header");
		$this -> load -> view("site_nav");
		$this -> load -> view("content_contact");
		$this -> load -> view("site_footer");
	}


	// validating the form coming from the content_contact view
	public function send_email(){
		$this -> load -> library("form_validation");

		// set_rules takes 3 params: name/id that's submitted of the text field, user-readable value that gets outputted when there are errors, conditions that need to be met
		$this -> form_validation -> set_rules("fullName", "Full Name", "required|alpha|xss_clean"); // alpha means that it must include capital or lowercase letters
		$this -> form_validation -> set_rules("email", "Email Address", "required|valid_email|xss_clean");
		$this -> form_validation -> set_rules("message", "Message", "required|xss_clean"); // xss_clean prevents anyone from doing cross site scripting in those input fiesl

		if ($this -> form_validation -> run() == FALSE){
			$this -> load -> view("site_header");
			$this -> load -> view("site_nav");
			$this -> load -> view("content_contact");
			$this -> load -> view("site_footer");
		} else {
			$data["message"] = "The email has successfully been sent!";

			$this -> load -> library("email");

			$this->email->from(set_value("email"), set_value("fullName")); // two params: email and name of person getting emails
			$this->email->to("la@la.la"); // param: email that it goes to
			$this->email->subject("Message from out form");
			$this->email->message(set_value("message"));

			$this->email->send();

			echo $this->email->print_debugger();


			$this -> load -> view("site_header");
			$this -> load -> view("site_nav");
			$this -> load -> view("content_contact", $data);
			$this -> load -> view("site_footer");
		}

	}

}
