<?php
//this file  mocks a database class that would be responsible for connecting to the database
//DO NOT TOUCH THIS FILE

//this is a safety feature.  ABS_PATH is defined in the index.php file.  Once defined a global
//is available everywhere.  If someone gets to this file without having ABS_PATH set, it means
//they tried to access it directly.  Which is a no no.
if(!defined('ABS_PATH')){die;}

class Db_service{
	public $_users;
	public function __construct(){
		//simply returns an unfiltered list of users from applicants.json
		$this->_users = json_decode(file_get_contents('./applicants.json'), true)['users'];
	}
	public function get_users(){
		return $this->_users;
	}
}