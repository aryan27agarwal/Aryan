<?php
define('AMBASSADORS_SUBJECT', "You've been successfuly registered!");
define('AMBASSADORS_MESSAGE', "Thank you %s for contacting us.
We have received your query and are looking forward to contacting you back as soon as possible.
\nYou are receiving this message because you tried to contact us through the E-Cell GD Goenka University website.");

class Ambassadors {
    private $data;
    public function __construct($name, $email, $contact, $gender, $city, $college, $why, $other) {
        $this->$data = compact('name', 'email', 'contact', 'gender', 'city', 'college', 'why', 'other');
    }
    public function email() {
        $message = sprintf(AMBASSADORS_MESSAGE, $data['name']);
        return Email::sendEmail($data['email'], AMBASSADORS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO ambassadors (name, email, contact, gender, city, why, college, anything) VALUES (:name, :email, :contact, :gender, :city, :why, :college, :other)';
        $db = new Database;
        $db->query($sql, $data);
    }
}