<?php
define('CONTACTUS_SUBJECT', "Thanks for contacting!");
define('CONTACTUS_MESSAGE', "Thank you %s for contacting us.
We have received your query and are looking forward to contacting you back as soon as possible.
\nYou are receiving this message because you tried to contact us through the E-Cell GD Goenka University website.");

define('CONTACTUS_TG_MESSAGE', "Somebody is willing to contact.
*Details are:*
```yaml\n%s\n```");

class Idea {
    private $data;
    public function __construct($name1, $name2, $name3, $email1, $email2, $email3, $phone1, $phone2, $phone3, $university, $state, $pincode, $city, $title, $idea_desc, $stage, $paytm)
     {
        $this->$data = compact('name1', 'name2', 'name3', 'email1', 'email2', 'email3', 'phone1', 'phone2', 'phone3', 'university', 'state', 'pincode', 'city', 'title', 'idea_desc', 'stage', 'paytm');
    }
    public function email() {
        $message = sprintf(CONTACTUS_MESSAGE, $this->$data['name1']);
        return Email::sendEmail($this->$data['email1'], CONTACTUS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO idea (name1, name2, name3, email1, email2, email3, phone1, phone2, phone3, university, state, pincode, city, title, idea_desc, stage, paytm) VALUES (:name1, :name2, :name3, :email1, :email2, :email3, :phone1, :phone2, :phone3, :university, :state, :pincode, :city, :title, :idea_desc, :stage, :paytm)';
        $db = new Database;
        $db->query($sql, $this->$data);
    }
    public function notify() {
        $part = \Symfony\Component\Yaml\Yaml::dump($this->$data);
        return TeamUpdate::sendUpdate(sprintf(CONTACTUS_TG_MESSAGE, $part));
    }
}
