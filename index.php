<?php
class Applicant 
{
    public $_firstname;
    public $_lastname;

    public $_skills;
    public $_level;
    public $_experience;
    public function __construct($user)
    {
        $this->_firstname = $user["firstName"];
        $this->_lastname = $user["lastName"];
        $this->_skills = $user["skills"];
        $this->_level = $user["level"];
        $this->_experience = $user["experience"];
    }
    public function get_name()
    {
        return $this->_firstname . " " . $this->_lastname;
    }
    public function get_level()
    {
        return $this->_level;
    }
    public function get_exp()
    {
        return $this->_experience;
    }
    public function get_skills()
    {
        return $this->_skills;
    }
} 
define('ABS_PATH', __DIR__);

require_once('./applicants.service.php');
$jobTitle = (isset($_GET['jobTitle'])) ? $_GET['jobTitle'] :'';
$experience = (isset($_GET['experienceNeeded'])) ? $_GET['experienceNeeded'] :'';
$level = (isset($_GET['positionLevel'])) ? $_GET['positionLevel'] :'';
$skills = [];
for ($i = 1; $i <= 3; $i++) {
    if (isset($_GET['skill' . $i])) {
        $skills[] = $_GET['skill' . $i];
    }
}

$db = new Db_service();
$applicants = new Applicants_service($db->get_users());
$users = $applicants->get_selected_users($level,(int)$experience,$skills);


include_once(ABS_PATH . '/views/head.view.php');
include_once(ABS_PATH . '/views/welcome.view.php');
include_once(ABS_PATH . '/views/form.view.php');

foreach ($users as $applicant){
    include(ABS_PATH . '/views/applicant-summary.view.php');
}
include_once(ABS_PATH . '/views/footer.view.php');


