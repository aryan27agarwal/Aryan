<?php
define('CONTACTUS_SUBJECT', "Thanks for contacting!");
define('CONTACTUS_MESSAGE', "Thank you %s for contacting us. 
We have received your query and are looking forward to contacting you back as soon as possible.
\nYou are receiving this message because you tried to contact us through the E-Cell GD Goenka University website.");

define('CONTACTUS_TG_MESSAGE', "Somebody is willing to contact.
*Details are:*
```json\n%s\n```");

class ContactUs {
    private $data;
    public function __construct($fname, $lname, $email, $query) {
        $this->$data = compact('fname', 'lname', 'email', 'query');
    }
    public function email() {
        $message = sprintf(CONTACTUS_MESSAGE, $this->$data['fname']);
        return Email::sendEmail($this->$data['email'], CONTACTUS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO contactus (fname, lname, email, query) VALUES (:fname, :lname, :email, :query)';
        $db = new Database;
        $db->query($sql, $this->$data);
    }
    public function notify() {
        $part = json_encode($this->$data, JSON_PRETTY_PRINT);
        return TeamUpdate::sendUpdate(sprintf(CONTACTUS_TG_MESSAGE, $part));
    }
}