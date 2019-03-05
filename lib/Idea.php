<?php
define('IDEA_SUBJECT', "You've been successfuly registered!");
define('IDEA_MESSAGE', "Thank you %s for registering for IDEA '19.
We have received your registration you will be receiving a confirmation mail once your registration is reviewed.
\nYou are receiving this message because you have registered for IDEA 2019 through the E-Cell GD Goenka University website.");

define('IDEA_TG_MESSAGE', "New registration for Idea 2019.
*Details are:*
```yaml\n%s\n```");

class Idea {
    private $data;
    public function __construct($name1, $name2, $name3, $email1, $email2, $email3, $phone1, $phone2, $phone3, $university, $state, $pincode, $city, $title, $idea_desc, $stage, $paytm)
     {
        $this->$data = compact('name1', 'name2', 'name3', 'email1', 'email2', 'email3', 'phone1', 'phone2', 'phone3', 'university', 'state', 'pincode', 'city', 'title', 'idea_desc', 'stage', 'paytm');
    }
    public function email() {
        $message = sprintf(IDEA_MESSAGE, $this->$data['name1']);
        return Email::sendEmail($this->$data['email1'], IDEA_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO idea (name1, name2, name3, email1, email2, email3, phone1, phone2, phone3, university, state, pincode, city, title, idea_desc, stage, paytm) VALUES (:name1, :name2, :name3, :email1, :email2, :email3, :phone1, :phone2, :phone3, :university, :state, :pincode, :city, :title, :idea_desc, :stage, :paytm)';
        $db = new Database;
        $db->query($sql, $this->$data);
    }
    public function notify() {
        $part = \Symfony\Component\Yaml\Yaml::dump($this->$data);
        return TeamUpdate::sendUpdate(sprintf(IDEA_TG_MESSAGE, $part));
    }

    public static function reglist() {
        $sql = "SELECT * FROM idea";
        $db = new Database;
        $stmt = $db->query($sql, []);
        $records = array();
        foreach($stmt as $row) {
            $records[] = $row;
        }
        return $records;
    }
}
