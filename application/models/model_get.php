<?php

class Model_get extends CI_Model {
	function getData($page){
		// get_where takes two params: table name and where specifier (this is an associative array where the key is the row and the value is the variable that we pass in (which page we're running the function for - home or about))
		$query = $this -> db -> get_where("pageData", array("page" => $page));
		return $query -> result();
	}
}